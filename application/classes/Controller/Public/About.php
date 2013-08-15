<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_About extends Controller_Template_Public {

    public function action_index()
    {
        $this->template->content = View::factory('public/welcome/about');
    }

} // End Welcome
