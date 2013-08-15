<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Member extends ORM {

    protected $_has_many = array();
    protected $_belongs_to = array('user'=>array(),'team'=>array());    
        


}
