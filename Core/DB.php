<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Core;
use PDO;
/**
 * Description of DB
 *
 * @author cayohenrique
 */
class DB {
    private $host;
    private $port;
    private $user;
    private $pass;
    private $database;
    protected $conn;
    
   public function __construct() {
       $this->host = "localhost";
       $this->port = "8889";
       $this->user = "root";
       $this->pass = "root";
       $this->database = "mvcteste";
       $this->conn = new PDO ( "mysql:host=".$this->host.";dbname=".$this->database."", $this->user, $this->pass );
   }
   
    
}
