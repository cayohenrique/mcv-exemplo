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
class ClientesController extends Controller{
    //put your code here
    
    function IndexAction(){
        $dados = array();
        $dados["mensagem"] = "Tela inicial dos clientes";
        $this->result("clientes", "index", $dados);
    }
    
    function ListaAction(){
        $cliente = new \Model\Clientes();
        $dados["clientes"] = $cliente->listClientes();
        $this->result("clientes", "lista", $dados);
    }
    
    
    
}
