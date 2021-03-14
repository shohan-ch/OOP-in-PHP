<?php

class User extends Dbh{

    protected function get_user(){
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        while($row = $result->fetch_assoc()){
            $data[] =$row ;
            return $data;
        }
        


    }



}