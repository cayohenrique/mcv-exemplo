<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Model;
use Core;
/**
 * Description of Clientes
 *
 * @author cayohenrique
 */
class Clientes extends Core\DB{
    
    private $id;
    private $nome;
    private $endereco;
    public function __construct() {
        parent::__construct();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    public function getEndreco(){
        return $this->endereco;
    }
    
    
    public function listClientes(){
        $stm = $this->conn->prepare("SELECT * FROM clientes");
        $stm->execute();
        $result = $stm->fetchAll();
        return $result;
    }
    
}
