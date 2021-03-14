<?php
include ("classes.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">

<h4>Person name</h4>
<?php
 $person1 =  new Person("Saklim",12,"dhaka");
 echo  $person1->get_name()."<br><br>"; 

 $person2 =  new Person("Rahim",24,"sylhet");
 echo  $person2->get_name(); 

?>
<h4>Pets name</h4>
<?php

 $pets1  =  new Pets("dog","red");
 echo $pets1->pets_name();
?>
<h4>Varios Practise</h4>
<?php

$obj  =  new Cal();
$obj->set(130,10)->get();



$obj2 =  new Java();
$obj3 = new Php($obj2);
$obj3->Phpcoder($obj2 );
$obj4 =  new UsingTrate;
$obj4->gets();





?>




    
</body>
</html>