<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Settinreg extends Controller_Template_User {

    public function action_index()
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/settingsreg');
        $this->template->content->hcontent = $hc;
    }



} // End Welcome
