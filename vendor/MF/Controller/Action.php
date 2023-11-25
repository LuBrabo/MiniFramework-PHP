<?php

namespace MF\Controller;

abstract class Action{
    
    protected $view;

    public function __construct(){
        $this->view = new \stdClass(); 
    }

    protected function render($view, $layout){
        $this->view->page = $view;

        if(file_exists("../App/Views/layout1.phtml")){
        require_once "../App/Views/layout1.phtml";
        } else {
            $this->content();
        }
    }

    protected function content(){
        $classAtual = get_class($this);
        $classAtual = str_replace('App\\Controllers\\', '', $classAtual);
        strtolower(str_replace('Controller', '', $classAtual));
        require_once "../App/Views/index/".$this->view->page.".phtml";
    }
}
?>