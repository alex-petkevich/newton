<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_Main extends Controller_Template {
 
	public $template = 'backend/default';

    public function action_index()
    {
		$this->template->content = 'in backend';
    }
 
} 