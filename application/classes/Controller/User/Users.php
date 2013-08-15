<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Users extends Controller_Template_User {

    public function action_index()
    {        
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/users');
        $hc->users = ORM::factory('User')->where('region_id', '=', $this->u->region_id)->where('id', '!=', $this->u->id)->limit(50)->find_all();
        $this->template->content->hcontent = $hc;
    }

} // End Welcome
