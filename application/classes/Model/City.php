<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_City extends ORM {

    protected $_has_many = array();
    protected $_belongs_to = array('region'=>array(), 'country'=>array());    
        


}
