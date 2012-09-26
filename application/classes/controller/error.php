<?php defined('SYSPATH') or die('No direct script access.'); 
class Controller_Error extends Controller_Template_Nobrand {
    public function before()
    {
        parent::before();
        $this->template = View::factory($this->request->controller().'/'.$this->request->action());
        if (Request::$initial !== Request::$current) {
            if ($message = rawurldecode($this->request->param('message'))) {
                $this->template->message = $message;
            }
        } else {
            $this->request->action(404);
        }
        $this->response->status((int) $this->request->action());
    }
    public function action_404()
    {
        $this->template->title = '404 Not Found';
    }
    public function action_500()
    {
        $this->template->title = 'Internal Server Error';
    }
    public function action_503()
    {
        $this->template->title = 'Maintenance Mode';
    }
}