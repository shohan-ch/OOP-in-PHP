<?php
session_start();
include ("classAutoloader.php");

if(isset($_POST['cal-btn'])){
    $num1 = $_POST['first'];
    $num2 = $_POST['second'];
    $op   = $_POST['operator'];

    $cal =  new Cal($num1,$num2,$op);
    $_SESSION['result'] = $cal->calculate();
    header("Location:../index.php");
}





?>