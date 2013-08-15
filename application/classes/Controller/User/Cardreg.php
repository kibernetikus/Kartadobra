<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Cardreg extends Controller_Template_User {

    public function action_index($u, $add=FALSE)
    {    
    
        $this->template->content = View::factory('user/cabinet/template');
        
    }
    
    

