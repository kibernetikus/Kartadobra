<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Card extends ORM {

    protected $_has_many = array('actions'=>array());
    protected $_belongs_to = array('city'=>array());    
        


}
