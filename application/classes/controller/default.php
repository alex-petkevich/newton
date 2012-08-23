<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller_Template {
	
	public $template = 'cms/default';

	public function action_default()
	{
		$this->template->test = 'My test';

		$this->template->content = 'me';
	}

} // End Welcome
