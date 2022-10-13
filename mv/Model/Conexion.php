<?php
namespace Model;
require_once 'Usuario.php';

class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'php_user1', 'php_user1', 'php_test1');
    }
    
    public function close() {
        $this->con->close();
    }
    
    public function con(){
        return $this->con;
    }
}

