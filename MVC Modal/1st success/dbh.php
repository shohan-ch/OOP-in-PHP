 <?php
  class Dbh{

    private $server  = "localhost";
    private $user    = "root";
    private $pass    ="";
    private $dbn     ="oop_ex_1";

    protected function connect(){

        $conn =  new mysqli($this->server, $this->user, $this->pass, $this->dbn);
        return $conn;
        if(!$conn){
         echo "error";
        }
    }

    
  }



