<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Team extends Controller_Template_User {

    public function action_index()
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/team/list');      
        $hc->teams = ORM::factory('Team')->where('region_id', '=', $this->u->region_id)->order_by('rating', 'desc')->order_by('id', 'desc')->limit(20)->find_all();
        $this->template->content->hcontent = $hc;
    }
    
    public function action_add()
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/team/add');        
        $this->template->content->hcontent = $hc;
    }
    
    public function action_info()
    {
        $id = $this->request->param('arg1');
        $t = ORM::factory('Team', $id);
        $this->template->content = View::factory('user/team/info');     
        $this->template->content->t = $t;
        $this->template->content->admin = ($this->u->id==$t->user_id);
        $member = $this->u->team;
        $this->template->content->member = $member->id ? $member : FALSE;
        $this->template->content->memcount = $t->users->count_all();
    }
    

} // End Welcome
