<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_A extends Controller_Template_Public {

    public function action_index()
    {
            $this->response->body('this ajax');
    }

} // End Welcome
