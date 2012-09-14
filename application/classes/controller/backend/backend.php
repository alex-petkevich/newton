<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_Backend extends Controller_Template {
    
    public $template = 'backend';
    public $auto_render = FALSE;
    public $CURRENT_URL = "";

    public function before() {
        parent::before();
        $this->template = View::factory($this->template.'/'.$this->request->controller().'/'.$this->request->action());
    }    
    
    public function after() {
        parent::after();
        $this->response->body($this->template->render());
    }
}
 