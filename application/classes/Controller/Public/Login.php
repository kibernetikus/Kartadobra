<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Login extends Controller_Template_Public {

    public function action_index()
    {
        if($this->u) $this->redirect('/');
        
        $ulogin = Ulogin::factory();
        
        if (!$ulogin->mode())
            $this->template->content = $ulogin->render();
        else
        {
            try
            {
                $ulogin->login();
                $this->redirect('/');
            }
            catch(ORM_Validation_Exception $e)
            {
                print_r($e->errors(''));
                exit;
            }
        }
    }

} // End Welcome
