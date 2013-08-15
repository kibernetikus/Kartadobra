<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Settings extends Controller_Template_User {

    public function action_index()
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/settings');
        $this->template->content->hcontent = $hc;
    }



} // End Welcome
