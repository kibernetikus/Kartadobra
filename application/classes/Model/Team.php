<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Team extends ORM {

    protected $_has_many = array('users'=>array(), 'tasks'=>array());
    protected $_belongs_to = array('region'=>array(),'user'=>array(),'city'=>array());    
        


}
