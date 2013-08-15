<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Public extends Controller_Template_Ajax {
    
    public function action_contact()
    {
        if(empty($_POST['n'])||empty($_POST['e'])||empty($_POST['t'])) exit;
        
        $to = 'support@kartadobra.ru';
        $subject = 'Сообщение бобра';
        $from = 'root@kartadobra.ru';
        $message = 'Поступила очередная хрень с сайта:<br>
        Автор: '.$_POST['n'].'<br>
        Контакты: '.$_POST['e'].'<br>
        Предьява:<br>'.$_POST['t'];
        
        email::send($to, $from, $subject, $message, $html = TRUE);
    }
    
    public function action_horners()
    {
        $id = $this->request->param('arg1');
        $u = $this->request->param('arg2');
        if(empty($u)) exit;
        $t = ORM::factory('User', $u);
        $t = $t->helps->where('type_id', '=', $id)->find_all();
        $arr = array();
        foreach($t AS $v)
        {
            $arr[] = array('t'=>$v->title, 'id'=>$v->id);
        }
        $this->echo = $arr;
    }
    
    public function action_cities()
    {
        if(empty($_GET['q'])) return FALSE;
        $cities = ORM::factory('City')->where('name', 'LIKE', $_GET['q'].'%')->limit(10)->find_all();
        $arr = array();
        foreach($cities AS $c)
        {
            $arr[] = array('i'=>$c->id, 'n'=>$c->name, 'r'=>$c->region->name);
        }
        $this->echo = $arr;
    }
    
    public function action_login()
    {
        if(Auth::instance()->login($_POST['username'], $_POST['password'])) 
        {
            $this->echo = 1;
        }else{
            $this->echo = array('err'=>$u = ORM::factory('User')->where('username', '=', $_POST['username'])->find()->loaded() ? 
                    'Неверный пароль!':'Пользователя с таким логином не существует!');
        }
        
    }
    
    public function action_registration()
    {
        if ($_POST)
        {
            $data = Validation::factory($_POST)
                ->rule('username', 'not_empty')
                ->rule('username', 'min_length', array(':value', 4))
                ->rule('username', 'max_length', array(':value', 32))
                ->rule('username', 'regex', array(':value', '/^[a-zA-Z-0-9._]++$/uD'))
                ->rule('username', 'username_available')
                    ->label('username', 'Логин')
                ->rule('password', 'not_empty')
                ->rule('password', 'min_length', array(':value', 6))
                ->rule('password', 'max_length', array(':value', 32))
                ->rule('password', 'regex', array(':value', '/^[_a-zA-Z-0-9.*~#!]++$/uD'))
                    ->label('password', 'Пароль')
                ->rule('c', 'city_id')
                    ->label('c', 'Город')
                ->rule('n', 'not_empty')
                ->rule('n', 'min_length', array(':value', 4))
                ->rule('n', 'max_length', array(':value', 32))
                    ->label('n', 'Название организации')
                ->rule('e', 'not_empty')
                ->rule('e', 'email')
                ->rule('e', 'email_available')
                    ->label('e', 'Email')
                ->rule('t', 'not_empty')
                    ->label('t', 'Тип учереждения')
            ;

            if ($data->check())
            {
                $city = ORM::factory('City', $_POST['c']);
                $u = ORM::factory('User');
                $u->username = $_POST['username'];
                $u->email = $_POST['e'];
                $u->password = $_POST['password'];
                $u->first_name = $_POST['n'];
                $u->city_id = $city->id;
                $u->region_id = $city->region_id;
                $u->type_id = $_POST['t'];
                $u->save();
                $u->add('roles', ORM::factory('Role', 1));
                $u->add('roles', ORM::factory('Role', 3));
                Auth::instance()->login($_POST['username'], $_POST['password']);
                $this->echo = 1;
            }else{
                $this->echo = array('err'=>implode('<br/>', $data->errors('Model/User')));
            }
        }
    }

}
?>
