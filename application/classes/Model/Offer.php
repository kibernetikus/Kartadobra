<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Offer extends ORM {

    protected $_has_many = array(
        'medias' => array('model' => 'Media', 'through' => 'medias_offers'),
        'users' => array('model' => 'User', 'through' => 'offers_users'),
    );
    protected $_belongs_to = array(
        'user'=>array(), 
        'city'=>array(), 
        'region'=>array(),
        'type' => array(),
        'author'=>array('model'=>'User'),
    );    
        


}
