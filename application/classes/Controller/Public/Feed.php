<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Feed extends Controller_Template_User {

    public function action_index()
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/feed');        
        $this->template->content->hcontent = $hc;
    }
    

} // End Welcome
