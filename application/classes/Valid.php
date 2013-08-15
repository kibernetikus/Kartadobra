<?php defined('SYSPATH') OR die('No direct script access.');

class Valid extends Kohana_Valid {
    
    public static function username_available($value)
    {
        return !ORM::factory('User')->where('username', '=', $value)->find()->loaded();
    }
    
    public static function email_available($value)
    {
        return !ORM::factory('User')->where('email', '=', $value)->find()->loaded();
    }
    
    public static function city_id($value)
    {
        return ORM::factory('City', $value)->loaded();
    }
}
?>
