<?php

class Person{
    public $name;
    public $age;
    public $address;

    public function __construct($name,$age,$address)
    {
        $this->name = $name;
        $this->age   = $age;
        $this->address = $address;   
    }
    public function get_name(){
        $person =  "Name:{$this->name}<br>Age:{$this->age}<br>Address:{$this->address}";
        return $person;
    }         
}



class Pets{
    public $name="dog";
    public $color;


     public function __construct($name,$color)
     {
         $this->name = $name;
         $this->color = $color;
     }
     public function pets_name(){
         echo "Name is {$this->name}<br>Color is {$this->color}";
     }

}

class Cal{

    public $num1;
    public $num2;

    public function set($x,$y){
        $this->num1 = $x;
        $this->num2 = $y;
        return $this;
    }

    public function get(){
         
        echo $this->num1 +$this->num2;
        echo"<br> <br>";  
        return $this;   
      
    }

}

class Java{

    public function Javacoder(){
        echo "I Am java coder.<br>";
    }
}

class Php{

    public function Phpcoder(Java $a){
        $value  = $a;
        $value->Javacoder();
        echo "I Am Php coder too. ok<br>";
    }


}

trait User{
    public function gets(){
        echo "this is trait";
    }
}

class  UsingTrate{
    use User;
    public function get (){
        echo "This From a claa.<br>";
        
    }
}

class Parents {

    public function get(){
        echo "Hello i am parent Class method.call form child class";
    }
}

class Child extends Parents{
    public $exm;
}

$chld= new Child();
$chld->get();












