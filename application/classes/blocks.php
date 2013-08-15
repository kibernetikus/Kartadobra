<?php
class blocks
{
    public static function menu()
    {
        return View::factory('blocks/menu')->render();
    }
    public static function honors($u)
    {
        $v = View::factory('blocks/honors');
        $arr = array();
        foreach($u->helps->find_all() AS $h)
        {
            if(isset($arr[$h->type_id])) $arr[$h->type_id]['count'] = $arr[$h->type_id]['count']+1;
            else $arr[$h->type_id] = array('name'=>$h->type->name, 'count'=>1);
        }
        $v->honors = $arr;
        $v->user_id = $u->id;
        return $v->render();
    }
    
  

    public static function cards($u, $add=FALSE)
    {
        $v = View::factory('blocks/cards');
        $cards = $u->cards->group_by('id')->find_all();
        
        $v->card_hide = !$cards->count();
        if($cards->count()==0) $cards = array(0);
        $v->cards = $cards;
        $v->add = $add;
        return $v->render();
    }
     public static function cardsreg($u, $add=FALSE)
    {
        
        $v = View::factory('blocks/cardsreg');
        $cards = $u->cards->group_by('id')->find_all();
        $v->card_hide = !$cards->count();
        if($cards->count()==0) $cards = array(0);
        $v->cards = $cards;
        $v->add = $add;
        return $v->render();
    }
    
    public static function blogs($u, $add=FALSE, $region_id=FALSE, $obj=FALSE)
    {
        $model = 0;
        $v = View::factory('blocks/blogs');
        //$v->blogs = $u->blogs->order_by('id', 'desc')->find_all();
        $sql = 'SELECT b.id, b.text, b.date, u.first_name, u.last_name, u.media_id, u.type_id, b.user_id, (SELECT COUNT(*) FROM blogs_medias WHERE blogs_medias.blog_id=b.id) AS media FROM blogs AS b LEFT JOIN users AS u ON u.id=b.user_id WHERE';
        if($obj)
        {
            $model = array(
                 'Model_Team' => 1,
             );
            if(empty($model[get_class($obj)])) return FALSE;
            $model = $model[get_class($obj)];
            
            $sql .= ' b.model_id='.$model.' AND b.object_id='.$obj->id;
        }else{
            $sql .= ' b.model_id=0 AND b.object_id=0 AND';
            if($region_id) $sql .= ' u.region_id='.$region_id;
            else $sql .= ' b.user_id='.$u->id;
        }
        $sql .=' ORDER BY b.id DESC LIMIT 20';
        $v->blogs = DB::query(Database::SELECT, $sql)->execute(NULL, TRUE);
        $v->add = $add;
        $v->obj = $obj;
        $v->model = $model;
        return $v->render();
    }
}
?>
