<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Backend_Backend extends Controller_Template {
    
    public $template = 'backend';
    public $auto_render = FALSE;
    public $auth = NULL;
    public $authUser = FALSE;
    public $errors;
    public $post;
    public $config;

    protected $allow_free_access = array();

    public function before() {
        parent::before();

        $this->auth = Auth::instance();
        $this->authUser = $this->auth->get_user();
        if ((!$this->authUser || !Auth::instance()->logged_in('backend')) && !in_array(Request::current()->action(),$this->allow_free_access)) {
            Session::instance()->set('REDIRECT_URL', URL::site($this->request->uri(),TRUE));
            $this->request->redirect('/backend/user/login');
        }
        try {
            $this->template = View::factory($this->template.'/'.$this->request->controller().'/'.($this->request->is_ajax() ? 'ajax/' : '').$this->request->action());
        }
        catch(Exception $e) {
            $this->template = new stdClass();
            $this->template->no_render = 1;
        }
        if (!$this->request->is_initial())
        {
            $this->template->isClean = TRUE;
        }

        $this->config = Kohana::$config->load('general');

        $this->buildMenu();
        $this->buildAssets();
        $this->template->authUser = $this->authUser;
        $this->post = Validation::factory($_POST);
    }    
    
    public function after() {
        parent::after();
        
        if ($this->template instanceof View)
        {
            // Append post-data
            $this->template->post = $this->post;
            // Append errors
            $this->template->errors = $this->errors;
        }
        if (!property_exists($this->template,'no_render')) {
            $this->response->body($this->template->render());
        }
        $this->template->config = $this->config;
    }
    
    private function buildMenu() {
        $Menu = ORM::factory('menu');
        $this->template->MainMenu = $Menu->where('parent_id', '=', '0')->order_by('order_id')->find_all();
        $this->template->MenuItem = ORM::factory('menu')->where('controller', '=', $this->request->controller())->where('action','=',$this->request->action())->find();
         if (!$this->template->MenuItem) {
            $this->template->MenuItem = $this->template->MainMenu[0];
        } 
        $parent_id = $this->template->MenuItem->parent_id ? $this->template->MenuItem->parent_id : $this->template->MenuItem->id;
        $this->template->SubMenu = ORM::factory('menu')->where('parent_id', '=', $parent_id)->order_by('order_id')->find_all();
    }
    
    private function buildAssets() {
        $this->template->styles = array();
        $this->template->scripts = array();
        
        $styles = array(
            'css/theme.css',
            'css/style.css',
        );
        $scripts = array(
            'js/lib/jquery.min.js',
            'js/lib/history.js',
            'js/backend.js'
        );
        $this->template->styles = array_merge( $this->template->styles, $styles );
        $this->template->scripts = array_merge( $this->template->scripts, $scripts );    
    }
    
}
 