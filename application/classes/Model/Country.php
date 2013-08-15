<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Country extends ORM {

    protected $_has_many = array('regions'=>array(), 'cities'=>array());
    protected $_belongs_to = array();    
        


}
