<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Core\Controller;
/**
 * Description of IndexController
 *
 * @author cayohenrique
 */
class IndexController extends Controller{
    //put your code here
    
    function IndexAction(){
        $dados = array();
        $dados["mensagem"] = "Olá amigo. Que tal me contratar? rs";
        $this->result("index", "index", $dados);
    }
    
    function ErrorAction(){
        $dados = array();
        $dados["mensagem"] = "Página não encontrada, mas você ainda pode me contratar! rsrs";
        $this->result("index", "error", $dados);
    }
    
    
}
