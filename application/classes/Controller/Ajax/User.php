<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_User extends Controller_Template_Ajax {
    
    public function before()
    {
        parent::before();
        if(!$this->u) exit;
        $this->is_org = $this->u->has('roles', 3);
    }
    
    public function action_setteam()
    {
        if(empty($_POST['id']) OR !isset($_POST['a'])) exit;
        
        $this->u->team_id = $_POST['a']==1 ? $_POST['id'] : 0;
        $this->u->save();
        /*
        $m = ORM::factory('Member')->where('user_id', '=', $this->u->id)->where('team_id', '=', $_POST['id'])->find();
        if($_POST['a']==1)
        {
            //если чел стоит в группе - то он больше не стоит
            foreach(ORM::factory('Member')->where('user_id', '=', $this->u->id)->where('mode', '=', 1)->find_all() AS $mm)
            {
                $mm->mode = 0;
                $mm->save();
            }
            if(!$m->loaded()) $m = ORM::factory('Member');
            else if($m->mode==2) return;//ban
            $m->user_id = $this->u->id;
            $m->team_id = $_POST['id'];
            $m->mode = 1;
            $m->save();
        }else{
            $m = ORM::factory('Member')->where('user_id', '=', $this->u->id)->where('team_id', '=', $_POST['id'])->find();
            if($m->loaded())
            {
                $m->mode = 0;
                $m->save();
            }
        }
        $my = $this->u->members->where('mode', '=', 1)->find();
        */
        $this->echo = array('my'=>$this->u->team->name);
    }
    
    public function action_addteam()
    {
        if(empty($_POST['n']) OR empty($_POST['d'])) exit;
        $t = ORM::factory('Team');
        $t->user_id = $this->u->id;
        $t->name = text::accepte($_POST['n']);
        $t->about = text::accepte($_POST['d']);
        $t->city_id = $this->u->city_id;
        $t->region_id = $this->u->region_id;
        if(!empty($_POST['m'])) $t->media_id = $_POST['m'];
        $t->save();
        
        $this->echo = array('id'=>$t->id);
    }
    
    public function action_edittask()
    {
        if(empty($_POST['id'])) exit;
        $obj = ORM::factory('Task', $_POST['id']);
        if(!$obj->loaded() || $obj->author_id!=$this->u->id) exit;
        if(!empty($_POST['text'])) $obj->text = text::accepte($_POST['text']);
        if(!empty($_POST['title'])) $obj->title = text::accepte($_POST['title']);
        $obj->save();
    }
    
    public function action_closetask()
    {
        if(empty($_POST['id'])) exit;
        $t = ORM::factory('Task', $_POST['id']);
        if(!$t->loaded() OR $t->author_id!=$this->u->id) exit;
        if(empty($_POST['close']) AND $t->constant==1 AND $this->is_org) //добавление пользователя
        {
            $u = preg_replace('/\D/', '', $_POST['u']);
            $u = ORM::factory('User', $u);
            if($u->loaded() && !$t->has('users', $u->id))
            {
                $t->add('users', $u);
                $u->rating++;
                $u->save();
            }
            $this->echo = array('id'=>$u->id,'n'=>$u->first_name.' '.$u->last_name, 'cnt' => text::get_word_int($t->users->count_all(), 'rz', TRUE));
            return;
        }
        elseif(!empty($_POST['c']))//если указана карта
        {
            if(!is_numeric($_POST['c'])) exit; //если карта не цифра
            
            $c = ORM::factory('Card', $_POST['c']);
            
            if(!$c->loaded())//если карты нет - создаем
            {
                $c->id = $_POST['c'];
                $c->save();
            }else{         
                //последний пользователь карты но не я
                $a = $c->actions->where('user_id', '!=', $this->u->id)->order_by('id', 'desc')->find();
                if($a->loaded())
                {
                    $u = $a->user;
                    if(!$t->has('users', $u->id))
                    {
                        $t->add('users', $u);
                        $u->rating++;
                        $u->save();
                    }
                }
            }
            //последний пользователь карты должен быть я
            $p = $c->actions->order_by('id', 'desc')->find();
            if($p->user_id!=$this->u->id)//если это не так, создаем
            {
                $a = ORM::factory('Action');
                $a->card_id = $c->id;
                $a->user_id = $this->u->id;
                $a->city_id = $this->u->city_id;
                $a->desc = empty($_POST['d']) ? 'Получил карту оказав помощь' : text::accepte($_POST['d'], 5000);
                $a->save();
            }
            
        }elseif(!empty($_POST['u'])){
            $u = preg_replace('/\D/', '', $_POST['u']);
            $u = ORM::factory('User', $u);
            if($u->loaded() && !$t->has('users', $u->id))
            {
                $t->add('users', $u);
                $u->rating++;
                $u->save();
            }
        }
        $t->mode = 1;
        $t->date_close = date('Y-m-d H:i:s');
        $t->save();
        if(isset($u)) $this->echo = array('id'=>$u->id,'n'=>$u->first_name.' '.$u->last_name);
    }
    
    public function action_settings()
    {
        if(empty($_POST['c'])) exit;
        $c = ORM::factory('City', $_POST['c']);
        if($c->loaded())
        {
            $this->u->city_id = $c->id;
            $this->u->region_id = $c->region_id;   
            if($this->is_org AND !empty($_POST['t'])) $this->u->type_id = $_POST['t'];
            if(isset($_POST['d'])) $this->u->desc = strip_tags($_POST['d']);
            if(isset($_POST['phone'])) $this->u->phone = strip_tags($_POST['phone']);
            if(isset($_POST['fname'])) $this->u->first_name = strip_tags($_POST['fname']);
            if(isset($_POST['lname'])) $this->u->last_name = strip_tags($_POST['lname']);
        }
        $this->u->save();
    }
    
    public function action_task()
    {
        echo media::add($_FILES['myfile']['tmp_name'], 2, array('small'=>array(240,180)));
        exit;
    }
    
    public function action_media()
    {
        $type_id = $this->request->param('arg1');
        echo media::add($_FILES['myfile']['tmp_name'], $type_id, array('mini'=>array(55, 55)));
        exit;
    }
    
    public function action_teamavatar()
    {
        $media = media::add($_FILES['myfile']['tmp_name'], 1, array('orig'=>array(180, 0), 'mini'=>array(55, 55)), TRUE);
        echo $media[1];
        exit;
    }
    
    public function action_avatar()
    {
        $media = media::add($_FILES['myfile']['tmp_name'], 1, array('orig'=>array(180, 0), 'mini'=>array(55, 55)), TRUE);
        $this->u->media_id = $media[0];
        $this->u->save();
        echo $media[1];
        exit;
    }
    
    public function action_addtask()
    {
        if(empty($_POST['img']) OR empty($_POST['t']) OR empty($_POST['c']) OR empty($_POST['txt'])) exit;
        $c = ORM::factory('City', $_POST['c']);
        if(!$c->loaded()) exit();
        $t = ORM::factory('Task');
        $t->title = text::accepte($_POST['t'], 100);
        $t->city_id = $c->id;
        $t->region_id = $c->region_id;
        $t->text = text::accepte($_POST['txt'], 5000);
        $t->geo = empty($_POST['g']) ? '' : $_POST['g'];
        $t->author_id = $this->u->id;
        $t->constant = (!empty($_POST['const']) AND $this->is_org) ? 1 : 0;
        $t->type_id = $this->u->type_id;
        $t->save();
        $img = explode(';', $_POST['img']);
        foreach($img AS $i)
        {
            $t->add('medias', $i);
        }
        $this->echo = $t->as_array();
    }
    public function action_addoffers()
    {
	if (empty($_POST['img']) OR empty($_POST['t'])OR empty($_POST['slc']) OR empty($_POST['c']) OR empty($_POST['txt']))
	    exit;
	$c = ORM::factory('City', $_POST['c']);
	if (!$c->loaded())
	    exit();
	$type  = ORM::factory('Type', $_POST['slc']);
	if (!$type->loaded())
	    exit();
	$t = ORM::factory('Offer');
	$t->title = text::accepte($_POST['t'], 100);
	$t->city_id = $c->id;
	$t->region_id = $c->region_id;
	$t->text = text::accepte($_POST['txt'], 5000);
	$t->geo = empty($_POST['g']) ? '' : $_POST['g'];
	$t->author_id = $this->u->id;
	$t->constant = (!empty($_POST['const']) AND $this->is_org) ? 1 : 0;
	$t->type_id = $_POST['slc'];
	$t->save();
	$img = explode(';', $_POST['img']);
	foreach ($img AS $i)
	{
	    $t->add('medias', $i);
	}
	$this->echo = $t->as_array();
    }
    public function action_addcard($id=NULL)
    {
        if(empty($_POST['id']) OR !is_numeric($_POST['id']) OR empty($_POST['c']) OR empty($_POST['t'])) exit;
        
        $c = ORM::factory('Card', $_POST['id']);
        if(!$c->loaded())
        {
            $c->id = $_POST['id'];
            $c->save();
        }
        $a = ORM::factory('Action');
        $a->card_id = $c->id;
        $a->user_id = $this->u->id;
        $a->city_id = text::accepte($_POST['c'], 100);
        $a->desc = text::accepte($_POST['t'], 5000);
        
        $a->save();
        
        $r = array('p'=>text::get_word_int($c->actions->count_all(), 'p', TRUE), 'r'=>$c->rating, 'a'=>array());
        
        foreach($c->actions->find_all() AS $a)
        {
            $r['a'][] = array('id'=>$a->id,'my'=>$a->user_id==$this->u->id?1:0);
        }
        $this->echo = $r;
        
    }
    
    public function action_getaction()
    {
        $id = $this->request->param('arg1');;
        $a = ORM::factory('Action', $id);
        $this->echo = array('t' => strip_tags($a->desc), 'a' => media::user($a->user), 'n' => $a->user->first_name.' '.$a->user->last_name, 'uid' => $a->user_id, 'id' => $a->id);
    }

    public function action_blogadd()
    {
         $b = ORM::factory('Blog');
         $b->text = text::accepte($_POST['t'], 10000);
         $b->user_id = $this->u->id;
         if(!empty($_POST['obj'])) $b->object_id = $_POST['obj'];
         if(!empty($_POST['md'])) $b->model_id = $_POST['md'];
         $b->save();
         if(!empty($_POST['m']))
         {
            foreach(explode(';', $_POST['m']) AS $i)
            {
                if(is_numeric($i)) $b->add('medias', $i);
            }
         }
         $this->echo = array('t' => $b->text, 'a' => media::user($this->u), 'n' => $this->u->first_name.' '.$this->u->last_name, 'uid' => $this->u->id, 'id' => $b->id);
    }
    
    public function action_blogdel()
    {
        if(empty($_POST['id'])) exit;
        $b = ORM::factory('Blog', $_POST['id']);
        if(!$b->loaded() OR $b->user_id!=$this->u->id) exit;
        foreach($b->medias->find_all() AS $m)
        {
            media::delete($m);
        }
        foreach(ORM::factory('Comment')->where('model_id', '=', 1)->where('object_id', '=', $b->id)->find_all() AS $c)
        {
            $c->delete();
        }
        $b->delete();
    }
    
    public function action_addcomment()
    {
        if(empty($_POST['id']) OR empty($_POST['t'])) exit;
        $param = explode('_', $_POST['id']);
        if(count($param)!=2) exit;
        $t = text::accepte($_POST['t'], 5000);
        if(empty($t))
        {
            $this->echo = array('err' => 1);
        }else{
            $c = ORM::factory('Comment');
            $c->model_id = $param[0];
            $c->object_id = $param[1];
            $c->user_id = $this->u->id;
            $c->text = $t;
            $c->save();
            $this->echo = array(
                't' => $c->text, 
                'a' => media::user($this->u), 
                'n' => $this->u->first_name.' '.$this->u->last_name, 
                'uid' => $this->u->id, 
                'id' => $c->id
                );
        }
    }

} // End Welcome
