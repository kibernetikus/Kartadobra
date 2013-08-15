<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_Ajax extends Controller_Template_System 
{

    public $template = 'ajax/template';
    
    protected $echo = FALSE;
    
    public function after()
    {
        if(!empty($this->echo)) $this->response->body($this->json_safe_encode($this->echo));
        parent::after();
    }
    
        
    private function json_safe_encode($var)
    {
       return json_encode($this->json_fix_cyr($var));
    }

    private function json_fix_cyr($var)
    {
       if (is_array($var)) {
           $new = array();
           foreach ($var as $k => $v) {
               $new[$this->json_fix_cyr($k)] = $this->json_fix_cyr($v);
           }
           $var = $new;
       } elseif (is_object($var)) {
           $vars = get_object_vars($var);
           foreach ($vars as $m => $v) {
               $var->$m = $this->json_fix_cyr($v);
           }
       } elseif (is_string($var)) {
           //$var = iconv('cp1251', 'utf-8', $var);
       }
       return $var;
    }

} // End Welcome
