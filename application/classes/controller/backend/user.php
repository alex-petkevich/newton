<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_User extends Controller_Backend_Backend {

    protected $allow_free_access = array('login','register');

    public function action_login() {
        if ($this->authUser)
            $this->request->redirect('/backend/main');
        if (isset($_POST) && Valid::not_empty($_POST)) {
            $remember = isset($_POST['remember']) && $_POST['remember'];
            if (Auth::instance()->login($_POST['username'], $_POST['password'], $remember)) {
                $this->request->redirect('/backend/main');
            }
            else  {
                $this->errors['login'] = 1;
            }
        }
    }
    
    public function action_logout() {
        Auth::instance()->logout(TRUE);
        $this->request->redirect('/backend/user/login');
    }
    
    public function action_register() {
        $client = ORM::factory('user');
        $client->email = "admin@my.loc";        
        $client->username = "admin";        
        $client->password = "admin";        
        $client->save();
        $client->add('roles', ORM::factory('role')->where('name', '=', 'login')->find());
        $client->add('roles', ORM::factory('role')->where('name', '=', 'backend')->find());
    }
    
    public function action_list() {
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
        $this->template->users = $user->order_by($order,$dir)->find_all();
        $this->template->sort = array('order'=>$order,'dir'=>$dir);
    }
    
    public function action_groups() {
        $role = ORM::factory('role');
        $this->template->roles = $role->order_by('name')->find_all();
    }
    
}