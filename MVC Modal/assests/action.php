<?php
include ("../assests/classAutoloder.php");

if(isset($_POST['sub_btn'])){

    $firstName = $_POST['first'];
    $secondName = $_POST['second'];
    $coun     = $_POST['country'];

    $obj = new Usercon();
    $obj->createuser($firstName, $secondName,$coun);

    header("Location:../index.php?success=Insert record Succesfully");



}


