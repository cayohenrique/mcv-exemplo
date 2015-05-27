<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;

/**
 * Description of Router
 *
 * @author cayohenrique
 */
class Router {
    private $uri;
    private $controller;
    private $action;
    
    public function __construct() {
        $uri = $_SERVER["REQUEST_URI"];
        $base = "/MVC-TESTE";
        $route = str_replace($base,"",$uri);
        $this->uri = $route;
        $this->redirectController();
        $this->loadController();
        
        
    }
    
    protected function redirectController(){
        switch ($this->uri){
            case "/":
                $this->controller = "Index";
                $this->action = "Index";
            break;
            case "/clientes":
                $this->controller = "Clientes";
                $this->action = "Index";
            break;
            case "/clientes/lista":
                $this->controller = "Clientes";
                $this->action = "Lista";
            break;
            default:
                $this->controller = "Index";
                $this->action = "Error";
        }
    }
    
    protected function loadController(){
        $cont = "Controller\\".$this->controller."Controller";
        $controller = new $cont();
        $action = $this->action."Action";
        $controller->$action();
        
    }
}
