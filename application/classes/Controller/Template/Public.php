<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Public extends Controller_Template_System {

    public $template = 'public/template';
    
    public function before()
    {
        parent::before();
        if($this->u) $this->redirect('/id'.$this->u->id);
    }

} // End Welcome
