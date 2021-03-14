<?php
/*
spl_autoload_register("classAutoload");

function classAutoload($className){
    $path = "class/";
    $ext  = ".php";
    $fullPath = $path. $className. $ext;

    if(!file_exists($fullPath)){
        die("Class not found");
    }

    include_once($fullPath);

}
*/


spl_autoload_register("classLoad");
function classLoad ($classname){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,"assests") !== false){
        $path = "../class/";

    }else{
        $path = "class/" ;
    }

    $extension =  ".php";
    $fullpath = $path . $classname . $extension;
    include_once $fullpath;
  
}

