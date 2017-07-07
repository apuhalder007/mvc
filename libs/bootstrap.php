<?php
/**
 *
 */
class Bootstrap
{

  function __construct()
  {
    if(isset($_REQUEST['path'])){
    $path = rtrim($_REQUEST['path'], '/');
    $path = explode('/',$path);
    $file = 'controller/'.$path[0].'.php';
    if(file_exists($file)){
      require_once $file;
      $controller = new $path[0];
        if(isset($path[1])){
          if(isset($path[2])){
          //  $controller->$path[1]($path[2]);
          }else{
              $controller->$path[1]();
          }
        }
      }else{
        echo 'Requset File not exists!';
        return false;
      }
    }
  }
}

 ?>
