<?php

class Dbh{

private $host = "localhost";
private $user ="root";
private $pass = "";
private $dbname = "oop_ex_1";

protected function connect(){

    $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user, $this->pass);
   
    if(!$conn){
        echo "Error";
        
    }
    
    return $conn;

}

}

