<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_Main extends Controller_Backend_Backend {
 
    public function before() {
        parent::before();
        if (!$this->authUser || !Auth::instance()->logged_in('backend')) {
            $this->request->redirect('/backend/user/login');
        }
    }

    public function action_index()
    {
    }
    
    public function action_info() {
    }
 
}