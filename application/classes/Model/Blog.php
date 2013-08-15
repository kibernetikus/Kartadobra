<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Blog extends ORM {

    protected $_has_many = array(
        'medias' => array('model' => 'Media', 'through' => 'blogs_medias'),
    );   
    protected $_belongs_to = array('user' => array());    


}
