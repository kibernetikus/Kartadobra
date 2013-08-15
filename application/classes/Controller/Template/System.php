<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template_System extends Controller {

    public function before()
    {        
        // Load the template
        $this->template = View::factory($this->template);
        // Session start
        $this->session = Session::instance();
        
        $this->controller = $this->request->controller();
        //Идентификация пользователя
        $this->u = Auth::instance()->logged_in() ? Auth::instance()->get_user() : FALSE;
        return parent::before();
    }
    
    public function after()
    {
        View::bind_global('u', $this->u);
        //если это запрос аякса - обрабатываем только контент
        if($this->request->is_ajax() AND isset($this->template->content) AND isset($this->template->content->hcontent))
        {
            return $this->response->body(json_encode($this->template->content->hcontent->render()));
        }
        View::bind_global('controller', $this->controller);
        echo $this->template->render();
    }

} // End Welcome
