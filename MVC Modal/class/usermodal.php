<?php

class Usermodal extends Dbh{

    protected function getuser(){

        $sql = "SELECT * FROM users;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
   
    }


    protected function setuser($firstname,$lastname,$country){
        $sql = "INSERT INTO users(first_name,last_name,country) VALUES (?,?,?);";
        $stmt =  $this->connect()->prepare($sql);
        $stmt->execute([$firstname,$lastname,$country]);
        

    }






}

