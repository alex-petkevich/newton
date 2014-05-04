<?php defined('SYSPATH') or die('No direct script access.');

    /**
     * Class Controller_Backend_Config
     *
     */
    class Controller_Backend_Config extends Controller_Backend_Backend
    {
        public function action_general() {
            
            $this->template->group_name = Request::current()->action();
            
        }
    }