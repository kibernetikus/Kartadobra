<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Offers extends Controller_User_Cabinet {

    public function action_my()
    {        
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/offers_my');
        $this->template->content->hcontent = $hc;
        $this->template->content->hcontent->offers0 = $this->u->offers->where('mode', '=', 0)->find_all();
        $this->template->content->hcontent->offers1 = $this->u->offers->where('mode', '=', 1)->find_all();
    }
    public function action_treg()
    {        
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/offers_reg');
        $this->template->content->hcontent = $hc;
        
    }
    
    public function action_index()
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/offers');
        $this->template->content->hcontent = $hc;
        $this->template->content->hcontent->offers = ORM::factory('Offer')->where('mode', '=', 0)->where('region_id', '=', $this->u->region_id)->where('author_id', '!=', $this->u->id)->order_by('id', 'desc')->limit(20)->find_all();
        $this->template->content->hcontent->offers2 = ORM::factory('Offer')->where('mode', '=', 1)->where('region_id', '=', $this->u->region_id)->where('author_id', '!=', $this->u->id)->order_by('id', 'desc')->limit(20)->find_all();
    }
    
    public function offers($id, $my=FALSE)
    {
        $this->template->content = View::factory('user/cabinet/template');
        $hc = View::factory('user/cabinet/offer');
        $this->template->content->hcontent = $hc;
        $t = ORM::factory('Offer', $id);
        if(!$t->loaded()) return $this->message('Такого задания нет!', 404);
        if($t->author_id==$this->u->id) $my = TRUE;
        if(!empty($t->geo))
        {
            $t->geo = explode(',', $t->geo);
            if(count($t->geo)!=2) $t->geo = FALSE;
        }
        
        $p = ORM::factory('Offer')->where('mode', '=', 0)->where('id', '<', $t->id);
        if($my) $p = $p->where('author_id', '=', $this->u->id);
        else $p = $p->where('region_id', '=', $this->u->region_id)->where('author_id', '!=', $this->u->id);
        $p = $p->order_by('id', 'desc')->find();
        
        $n = ORM::factory('Offer')->where('mode', '=', 0)->where('id', '>', $t->id);
        if($my) $n = $n->where('author_id', '=', $this->u->id);
        else $n = $n->where('region_id', '=', $this->u->region_id)->where('author_id', '!=', $this->u->id);
        $n = $n->order_by('id', 'asc')->find();
        
        if($t->constant==1) $this->template->content->hcontent->count = $t->users->count_all();
        $user = $t->users->find();
        $this->template->content->hcontent->user = $user->loaded() ? $user : FALSE;
        $this->template->content->hcontent->my = $my;
        $this->template->content->hcontent->t = $t;
        $this->template->content->hcontent->prev = $p;
        $this->template->content->hcontent->next = $n;
    }
    public function __call($a=FALSE,$b=FALSE)
    {
        return $this->offers($this->request->action());
    }
}
