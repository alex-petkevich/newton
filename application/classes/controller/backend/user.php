<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Backend_User
 *
 */
class Controller_Backend_User extends Controller_Backend_Backend
{

    protected $allow_free_access = array('login', 'register');

    public function action_login()
    {
        if ($this->authUser)
            $this->request->redirect('/backend/main');
        if (isset($_POST) && Valid::not_empty($_POST)) {
            $remember = isset($_POST['remember']) && $_POST['remember'];
            if (Auth::instance()->login($_POST['username'], $_POST['password'], $remember) && Auth::instance()->get_user()->active) {
                if (Session::instance()->get('REDIRECT_URL')) {
                    $url = Session::instance()->get('REDIRECT_URL');
                    Session::instance()->delete('REDIRECT_URL');
                    $this->request->redirect($url);
                } else
                    $this->request->redirect('/backend/main');
            } else {
                $this->errors['login'] = 1;
            }
        }
    }

    public function action_logout()
    {
        Auth::instance()->logout(true);
        $this->request->redirect('/backend/user/login');
    }

    public function action_list()
    {
        $order = 'id';
        switch ($this->request->query('order')) {
            case "id":
                $order = "id";
                break;
            case "username":
                $order = "username";
                break;
            case "email":
                $order = "email";
                break;
        }
        $dir = ($this->request->query('desc') ? "desc" : "asc");

        $user = ORM::factory('user');
        $filter = $this->prepare_filter($this->request->post('filter'));
        foreach($filter as $k => $v) {
            if ($k != 'apply')
                $user->and_where($k,'LIKE','%'.$v.'%');
        }

        $count = $user->count_all();
        $pagination = Pagination::factory(array('total_items' => $count))->route_params(array('controller' => Request::current()->controller(), 'action' => Request::current()->action(),));

        foreach($filter as $k => $v) {
            if ($k != 'apply')
                $user->and_where($k,'LIKE','%'.$v.'%');
        }

        $this->template->users = $user->order_by($order, $dir)->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();

        $this->template->sort = array('order' => $order, 'dir' => $dir);
        $this->template->pagination = $pagination;
        $this->template->filter = $filter;
    }


    public function action_add()
    {
        $User = new Model_User($this->request->param('id'));
        if (!empty($_POST)) {
            $User->values($_POST);
            try {
                if ($User->check()) {
                    $User->create_user($_POST, array('username', 'password', 'email',));
                    $this->create_default_member($User);
                    $User->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
                    $User->add('roles', ORM::factory('role')->where('name', '=', 'members')->find());

                    $this->request->redirect('backend/user/edit/' . $User->id);
                } else {
                    $this->errors = $User->validate()->errors();
                }
            } catch (ORM_Validation_Exception $ex) {
                $this->errors = $ex->errors('');
            }
        }

        $this->template->User = $User;
    }

    private function create_default_member($User)
    {
        $User->member->user_id = $User->id;
        $User->member->added = date("Y-m-d H:i:s");
        $User->member->validation_required(false);
        $User->member->save();
    }

    public function action_switch()
    {
        $User = new Model_User($this->request->param('id'));
        if ($User->loaded()) {
            $User->active = (int)!$User->active;
            $User->save();
        }
        $this->request->redirect('backend/user/list');
    }

    public function action_delete()
    {
        $User = new Model_User($this->request->param('id'));
        if ($User->loaded()) {
            $User->delete($User);
        }
        $this->request->redirect('backend/user/list');
    }
    
    private function load_avatar($User) {
        if ($this->request->method() == Request::POST)
        {
            if (isset($_FILES['avatar']) && $_FILES['avatar']['tmp_name'])
            {
                $filename = $this->_save_image($_FILES['avatar'],$User->id);
            }
            if ($this->request->post('ava_delete')) {
                $File = $User->member->files->where('type','=',Model_Memberfiles::TYPE_AVATAR)->find();
                if ($File->filename!='' ) {
                    $storage = Storage::factory();
                    $storage->delete('user/avatar/'.$File->filename);
                }
                if ($File->loaded())
                    $File->delete($File);
                $this->template->ok = true;
                return true;
            }
        }
        if ( ! isset($filename))
        {
            $this->errors['filename'] = I18n::get('There was a problem while uploading the image. Make sure it is uploaded and must be JPG/PNG/GIF file.');
            return false;
        }

        $File = $User->member->files->where('type','=',Model_Memberfiles::TYPE_AVATAR)->find();
        if ($File->filename!='' ) {
            $storage = Storage::factory();
            $storage->delete('user/avatar/'.$File->filename);
        }
        $File->member = $User->member;
        $File->type = Model_Memberfiles::TYPE_AVATAR;
        $File->filename = $filename;
        $File->save();
        $this->template->ok = true;

    }

    protected function _save_image($image,$id)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }

        if ($file = Upload::save($image, NULL, sys_get_temp_dir()))
        {
            $filename = $id.'_'.$image['name'];
            $tempfile = sys_get_temp_dir() . DIRECTORY_SEPARATOR  . $filename;

            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($tempfile);

            $storage = Storage::factory();
            $storage->set('user/avatar/'.$filename, $tempfile, TRUE);
            
            // Delete the temporary file
            unlink($file);

            return $filename;
        }

        return FALSE;
    }

    public function action_edit()
    {
        $role = ORM::factory('role');
        $User = new Model_User($this->request->param('id'));
        $type = (isset($_POST['type']) ? $_POST['type'] : 'general');
        $this->template->types = ORM::factory('membertype')->find_all();
        $this->template->countries = ORM::factory('country')->order_by('priority', 'desc')->order_by('title')->find_all();
        
        switch ($type) {
            case "extended" :
                $this->edit_extended($User);
                $this->template->type = 2;
                break;
            case "notes" :
                $this->edit_notes($User);
                $this->template->type = 3;
                break;
            case "groups" :
                $this->edit_groups($User);
                $this->template->type = 1;
                break;
            case "avatar" :
                $this->load_avatar($User);
                $this->template->type = 4;
                break;
            default:
                $this->edit_general($User);
                $this->template->type = 0;
        }
        // get avatar
        
        $this->template->Groups = $role->find_all();
        $this->template->User = $User;
        $this->template->Roles = $User->roles->find_all()->as_array();
        $this->template->Avatar = $this->_get_avatar($User);
    }
    
    private function _get_avatar($User) {
        $files = $User->member->files->where('type','=',Model_Memberfiles::TYPE_AVATAR)->find()->as_array();
        if (!$files['id'])
            return '';
        $storage = Storage::factory();
        if ($storage->exists('user/avatar/'.$files['filename']))
            return $storage->url('user/avatar/'.$files['filename']);
    }

    public function action_groups()
    {
        $order = 'id';
        switch ($this->request->query('order')) {
            case "id":
                $order = "id";
                break;
            case "name":
                $order = "name";
                break;
            case "description":
                $order = "description";
                break;
        }
        $dir = ($this->request->query('desc') ? "desc" : "asc");
        $role = ORM::factory('role');
        $this->template->roles = $role->order_by($order, $dir)->find_all();
        $this->template->sort = array('order' => $order, 'dir' => $dir);
    }

    public function action_addgroup()
    {
        $Menu = ORM::factory('menu');
        $uMenu = $Menu->order_by('order_id')->find_all()->as_array();
        $Role = new Model_Role($this->request->param('id'));
        $selGroups = $Role->roles->find_all()->as_array();
        if (!empty($_POST)) {
            $Role->values($_POST);
            try {
                if ($Role->check()) {
                    $Role->save();
                    $Role->remove('roles');
                    foreach ($this->request->post('menu') as $group) {
                        $group = ORM::factory('menu', $group);
                        if ($group->loaded()) {
                            $Role->add('roles', $group);
                        }
                    }
                    $this->request->redirect('backend/user/groups/0/ok');
                } else {
                    $this->errors = $Role->validate()->errors();
                }
            } catch (ORM_Validation_Exception $ex) {
                $this->errors = $ex->errors('');
                $selGroups = $this->request->post('menu');
            }
        }

        $this->template->Groups = ($selGroups ? $selGroups : array());
        $this->template->Role = $Role;
        $this->template->uMenu = $uMenu;
    }

    public function action_editgroup()
    {
        $this->action_addgroup();
    }

    public function action_deletegroup()
    {
        $Role = new Model_Role($this->request->param('id'));
        if ($Role->loaded()) {
            $Role->delete($Role);
        }
        $this->request->redirect('backend/user/groups/0/ok');
    }


    private function edit_groups($User)
    {
        if (!empty($_POST)) {
            $this->template->ok = true;
            $User->remove('roles', NULL);
            foreach ($_POST['group'] as $k => $v) {
                $User->add('roles', ORM::factory('role', $v));
            }
        }
    }

    private function edit_extended($User)
    {
        if (!empty($_POST)) {
            $User->member->values($_POST);
            $User->member->user_id = $User->id;
            try { //Debug::dump($_POST);
                if ($User->member->check()) {
                    $User->member->update_member($_POST);
                    $this->template->ok = true;
                } else {
                    $this->errors = $User->member->validate()->errors();
                }
            } catch (ORM_Validation_Exception $ex) {
                $this->errors = $ex->errors('');
            }
        }
    }

    private function edit_notes($User)
    {
        if (!empty($_POST)) {
            $User->member->user_id = $User->id;
            $User->member->notes = $_POST['notes'];
            $User->member->validation_required(false);
            $User->member->save();
            $this->template->ok = true;
        }
    }

    private function edit_general($User)
    {
        if (!empty($_POST)) {
            if (!isset($_POST['active'])) {
                $_POST['active'] = 0;
            }
            $User->values($_POST);
            try {
                if ($User->check()) {
                    $User->update_user($_POST);
                    //$this->request->redirect('backend/user/list/0/ok');
                    $this->template->ok = true;
                } else {
                    $this->errors = $User->validate()->errors();
                }
            } catch (ORM_Validation_Exception $ex) {
                $this->errors = $ex->errors('');
            }
        }
    }
}