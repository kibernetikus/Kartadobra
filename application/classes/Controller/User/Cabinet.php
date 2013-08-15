<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User_Cabinet extends Controller_Template_User {

    public function action_info()
    {
        $id = $this->request->param('arg1');
        //просмотр другого пользователя
        if($id!=$this->u->id) return $this->user($id);
        
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/index');
        

        $this->template->content->hcontent = $hc;
    }
    
    function user($id)
    {
        $user = ORM::factory('User', $id);
        if(!$user->loaded()) $this->set_info('Нет такого пользователя', 404);
        $this->template->content = View::factory('user/other/index');
        $this->template->content->user = $user;
        $this->template->content->tasks = $user->tasks->where('mode', '=', 0)->find_all();
    }


} // End Welcome
