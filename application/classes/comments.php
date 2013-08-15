<?php
class comments
{
    public static function show($obj, $type=NULL)
    {
        $model = array(
            'Model_Blog' => 1,
            'Model_Task' => 2,
        );
        if($type AND isset($model[$type]))
        {
            $model = $model[$type];
        }else{
            if(empty($model[get_class($obj)])) return FALSE;
        
            $model = $model[get_class($obj)];
        }
        $id = is_numeric($obj) ? $obj : $obj->id;
        $comments = ORM::factory('Comment')->where('model_id', '=', $model)->where('object_id', '=', $id)->find_all();
        $hide = $comments->count();
        if($hide==0) $comments = array(0);
        $v = View::factory('template/comments');
        $v->comments = $comments;
        $v->model_id = $model;
        $v->object_id = $id;
        $v->hide = !$hide;
        return $v->render();
    }
}
?>
