<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Welcome extends Controller_Template_Public {

    public function action_index()
    {
        $this->template->content = View::factory('public/welcome/index');
        $this->template->content->pageUri = '';
        $this->template->content->pageTitle = '';
    }

} // End Welcome
