<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Registration extends Controller_Template_Public {

    public function action_index()
    {
        $this->template->content = View::factory('user/registration');
        $this->template->content->data = FALSE;
    }

} // End Welcome
