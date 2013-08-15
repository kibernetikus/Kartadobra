<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Cardreg extends Controller_Template_User {

    public function action_index()
    {   
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/cardreg');
        $this->template->content->hcontent = $hc;

    }    
}

