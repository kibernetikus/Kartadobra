<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Test extends Controller {
    
    public function action_index()
    {
        $hs = ORM::factory('History')->where('ok', '=', 0)->order_by('created', 'asc')->limit(100)->find_all();
        $cards = array();
        $city = array();
        foreach($hs AS $h)
        {
            if(!in_array($h->number, $cards))
            {
                
                $c = ORM::factory('Card', $h->number);
                $c->id = $h->number;
                if(!$c->loaded())$c->save();
                $cards[] = $h->number;
            }
            //city
            if(!isset($city[$h->city]))
            {
                $c = ORM::factory('City')->where('name', '=', $h->city)->find();
                $city[$h->city] = $c->loaded() ? $c->id : 0;
            }
            $a = ORM::factory('Action');
            $a->user_id = $h->uid;
            $a->card_id = $h->number;
            $a->desc = $h->comment;
            $a->date = $h->created;
            $a->city_id = $city[$h->city];
            $a->save();
            
            $h->ok = 1;
            $h->save();
        }
        echo 'ok';
        exit;
    }

    public function action_index2()
    {
        $users = ORM::factory('Olduser')->where('ok', '=', 0)->limit(100)->find_all();
        $city = array();
        foreach($users AS $v)
        {
            //city
            if(!isset($city[$v->city]))
            {
                $c = ORM::factory('City')->where('name', '=', $v->city)->find();
                $city[$v->city] = $c->loaded() ? array($c->id, $c->region_id) : array(0, 0);
            }
            //name
            $name = explode(' ', $v->name);
            if(count($name)<2) $name[1] = '';
            //username
            $username = text::translate_to_url($v->name);
            //email
            $email = empty($v->email) ? $username.'@piramidadobra.ru' : $v->email;
            $t = ORM::factory('User')->where('username', '=', $username)->or_where('email', '=', $email)->find();
            if($t->loaded())
            {
                $username = $username.'1';
                $email = '1'.$email;
            }
            //user
            $u = ORM::factory('User');
            $u->id = $v->id;
            $u->first_name = $name[0];
            $u->last_name = $name[1];
            $u->username = $username;
            $u->city_id = $city[$v->city][0];
            $u->region_id = $city[$v->city][1];
            $u->email = $email;
            $u->sex = $v->sex;
            $u->password = md5('ulogin_autogenerated_password'.microtime(TRUE));
            $u->avatar_orig = $v->photo;
            $u->desc = '';
            $u->date = $v->date;
            $u->save();
            
            //role
            $u->add('roles', ORM::factory('Role', array('name' => 'login')));
            //ulogin
            $g = ORM::factory('Ulogin');
            $g->user_id = $u->id;
            $g->network = $v->network;
            $g->identity = $v->identity;
            $g->save();
            
            $v->ok = 1;
            $v->save();
        }
        echo 'ok';
        exit;
    }

} // End Welcome
