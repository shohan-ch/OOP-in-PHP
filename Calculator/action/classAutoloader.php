<?php

/*
spl_autoload_register("classLoad");
function classLoad ($classname){
    $path =  "class/";
    $extension =  ".php";
    $fullpath = $path . $classname . $extension;
    include_once $fullpath;
  
}
*/

// spl_autoload_register() call all the classes at the same time. so that don't require call classes by include function.
// Above code for single page and following code for multiple page.

spl_autoload_register("classLoad");
function classLoad ($classname){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,"action") !== false){
        $path = "../class/";

    }else{
        $path = "class/" ;
    }

    $extension =  ".php";
    $fullpath = $path . $classname . $extension;
    include_once $fullpath;
  
}



?>