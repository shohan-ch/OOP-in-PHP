<?php

class Userview extends User{


    public function viewuser(){

        $datas = $this->get_user();
        foreach($datas as $data){
            echo $data['first_name']."<br>";
        }

      
    }
 





}