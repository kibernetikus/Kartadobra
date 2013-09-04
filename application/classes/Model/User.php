<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	protected $_has_many = array(
            'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
            'ulogins' => array(),
            'blogs' => array(),
            'cards' => array('model' => 'Card', 'through' => 'actions'),
            'tasks' => array('foreign_key'=>'author_id'),
	    'offers' => array('foreign_key'=>'author_id'),
            'helps' => array('model' => 'Task',  'through' => 'tasks_users', 'far_key'=>'task_id'),
            'teams' => array(),
	);
        protected $_belongs_to = array(
            'city'=>array(), 
            'region'=>array(),
            'team'=>array(),
        ); 
        
	public function labels()
	{
            return array(
                    'username'         => 'Логин',
                    'email'            => 'Email',
                    'password'         => 'Пароль',
            );
	}

} // End User Model