<?php

class Connection {
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $bd = "bdcliente";
    private $connectDB = null;
    
    function __construct(){

    }

    function getConnection() {
        if ($this->connectDB == null) {
            $this->connectDB = mysqli_connect($this->servername,$this->username,$this->password,$this->bd);
        }
        if(!$this->connectDB) {
            die("Falha na conexão!" . $connectDB->connect_error);
        }
        return $this->connectDB;
    }
}

?>