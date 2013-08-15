<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Fond extends Controller_Template_User {

    public function action_index()
    {        
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/fond');
        $hc->types = ORM::factory('Type')->find_all();
        $this->template->content->hcontent = $hc;

    }

} // End Welcome
