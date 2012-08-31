<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_Main extends Controller_Backend_Backend {
 
    private $authUser = null;
    
    public function before() {
        parent::before();
        $this->auth = Auth::instance();
        $this->authUser = $this->auth->get_user();
        if (!$this->authUser || !$this->authUser->logged_in('backend')) {
            $this->request->redirect(Route::url('backend_user'));
        }
    }

    public function action_index()
    {
		$this->template->content = 'in backend';
    }
 
} 