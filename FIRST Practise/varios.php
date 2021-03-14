<?php


//Construct & Dstruct Method
  class Fruit{
    //Properties is  below
    private $name;
    private $color;

    //Method is below
    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "Name is: {$this->name}<br> Color is:{$this->color}<br>";
    }
  }



  class Cons{

    function __construct(){

      echo "Construct Automatically load when object created";

    }
   



  }


//------------------------Inheritance Class with overridding--------------



 class Blog{
  public $title;
  public $author;

  public function __construct($title,$author){
    $this->title = $title;
    $this->author = $author;
  }

  public function get_blog(){
     echo "The title is {$this->title}<br> Author name is {$this->author}<br>";
  }
  }
  class Description extends Blog{
      public $description; 

      public function __construct($title,$author,$description)
      {
        $this->title = $title;
        $this->author = $author;
        $this->descrip = $description;        
      }

      public function get_blog()
      {
        echo "The title is {$this->title}<br> Author name is {$this->author}<br>{$this->descrip}";
        
      }

  }


//Abstract Class and Method

abstract class Cars{
  abstract public function sameMethod ($name);
}
class Bmw extends Cars{


  public function sameMethod($name,$des=" is a best cars")
  {
    return "{$name}{$des}";
    
  }
}


// Static Method can called directly


class War {
  public static function get_msg(){
    echo "Hello world. Year of 2020 the world boardly affected to corona virus!";
  }



}


?>




   <?php 
   $apple = new Fruit('Apple',"red");
   $blog = new Blog("hello","Shohan");
   

   $blog =  new Description("fdgfkdhgkf","hdsfhdfgd","dbfggdfjd");
   $blog->get_blog();
   echo"<br>";
   echo"<br>";
   $bmw  =  new Bmw();
   echo $bmw->sameMethod("Bmw");
   echo"<br>";
   echo"<br>";

   War::get_msg();
  

   $obj = new Cons;


   ?>

