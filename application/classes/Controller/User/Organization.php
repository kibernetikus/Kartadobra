<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Fond extends Controller_Template_Fond {

    public function action_index()
    {        
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/organization');
        $hc->type = ORM::factory('Type')->find_all();

    }

} // End Welcome
