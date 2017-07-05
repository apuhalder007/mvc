<?php
if(isset($_REQUEST['path'])){
$path = rtrim($_REQUEST['path'], '/');
$path = explode('/',$path);
require_once 'controller/'.ucfirst($path[0]).'.php';
$controller = new $path[0];
  if(isset($path[1])){
    if(isset($path[2])){
    //  $controller->$path[1]($path[2]);
    }else{
        $controller->$path[1]();
    }
  }
}
?>
