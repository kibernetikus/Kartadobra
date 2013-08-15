<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Exit extends Controller_Template_User {

    public function action_index()
    {
        Auth::instance()->logout();
        $this->redirect('/');
    }

} // End Welcome
