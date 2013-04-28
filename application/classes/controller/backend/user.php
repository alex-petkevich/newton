<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Backend_User extends Controller_Backend_Backend
{

   protected $allow_free_access = array('login', 'register');

   public function action_login()
   {
      if ($this->authUser)
         $this->request->redirect('/backend/main');
      if (isset($_POST) && Valid::not_empty($_POST)) {
         $remember = isset($_POST['remember']) && $_POST['remember'];
         if (Auth::instance()->login($_POST['username'], $_POST['password'], $remember)) {
            if (Session::instance()->get('REDIRECT_URL')) {
               $url = Session::instance()->get('REDIRECT_URL');
               Session::instance()->delete('REDIRECT_URL');
               $this->request->redirect($url);
            }
            else
               $this->request->redirect('/backend/main');
         }
         else {
            $this->errors['login'] = 1;
         }
      }
   }

   public function action_logout()
   {
      Auth::instance()->logout(TRUE);
      $this->request->redirect('/backend/user/login');
   }

   public function action_register()
   {
      $client = ORM::factory('user');
      $client->email = "admin@my.loc";
      $client->username = "admin";
      $client->password = "admin";
      $client->save();
      $client->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
      $client->add('roles', ORM::factory('role')->where('name', '=', 'backend')->find());
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
      $this->template->users = $user->order_by($order, $dir)->find_all();
      $this->template->sort = array('order' => $order, 'dir' => $dir);
   }


    public function action_add()
    {
        $User = new Model_User($this->request->param('id'));
        if (!empty($_POST)) {
              $User->values($_POST);
              try {
                if ($User->check()) {
                    $User->create_user($_POST, array(
                        'username',
                        'password',
                        'email',
                    ));

                    $this->request->redirect('backend/user/list/0/ok');
                }
                else {
                    $this->errors = $User->validate()->errors();
                }
            }
            catch (ORM_Validation_Exception $ex) {
                $this->errors = $ex->errors('');
            }
        }

        $this->template->User = $User;
    }

    public function action_edit()
    {
        $role = ORM::factory('role');
        $User = new Model_User($this->request->param('id'));
        if (!empty($_POST)) {
            $User->values($_POST);
            try {
                if ($User->check()) {
                    $User->update_user($_POST);
                    $this->request->redirect('backend/user/list/0/ok');
                }
                else {
                    $this->errors = $User->validate()->errors();
                }
            }
            catch (ORM_Validation_Exception $ex) {
                $this->errors = $ex->errors('');
            }
        }
        $this->template->Groups = $role->find_all();
        $this->template->User = $User;
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
                  $group = ORM::factory('menu',$group);
                  if ($group->loaded()) {
                     $Role->add('roles', $group);
                  }
               }
               $this->request->redirect('backend/user/groups/0/ok');
            }
            else {
               $this->errors = $Role->validate()->errors();
            }
         }
         catch (ORM_Validation_Exception $ex) {
            $this->errors = $ex->errors('');
            $selGroups = $this->request->post('menu');
         }
      }

      $this->template->Groups = ($selGroups ? $selGroups : array());
      $this->template->Role = $Role;
      $this->template->uMenu = $uMenu;
   }
   
   public function action_editgroup() {
      $this->action_addgroup();
   }
   
   public function action_deletegroup() {
      $Role = new Model_Role($this->request->param('id'));
      if ($Role->loaded()) {
         $Role->delete($Role);
      }
      $this->request->redirect('backend/user/groups/0/ok');
   }

}