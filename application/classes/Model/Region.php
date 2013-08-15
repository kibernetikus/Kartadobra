<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Region extends ORM {

    protected $_has_many = array('cities'=>array());
    protected $_belongs_to = array('country'=>array());    
        


}
