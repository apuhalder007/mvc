<?php
/**
 *
 */
class Bootstrap
{

  function __construct()
  {
    $error = new error;
    if(isset($_REQUEST['path'])){
    $path = rtrim($_REQUEST['path'], '/');
    $path = explode('/',$path);
    $file = 'controller/'.ucfirst($path[0]).'.php';
    if(file_exists($file)){
      require_once $file;
      $controller = new $path[0];
        if(isset($path[1])){
          if(!method_exists($controller, $path[1])){
            $error->show404();
            return false;
          }

          if(isset($path[2])){
            $controller->$path[1]($path[2]);
          }else{
              $controller->$path[1]();
          }
        }else{
          //If no controller method request then default controller method 'index' will be call.
          $controller->index();
        }
      }else{
        //echo 'Requset File not exists!';
        $error->show404();
        return false;
      }
    }
  }
}

 ?>
