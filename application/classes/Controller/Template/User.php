<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_User extends Controller_Template_System {

    public $template = 'public/template';
    
    public function before()
    {
        parent::before();
        //проверка авторизации
        if(!$this->u) $this->redirect('/');
        $this->is_org = $this->u->has('roles', 3);
    }
    
    public function after() {
        View::bind_global('is_org', $this->is_org);
        parent::after();
        
    }

} // End Welcome
