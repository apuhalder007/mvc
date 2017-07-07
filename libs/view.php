<?php
/**
 *
 */
class view
{

  function __construct()
  {
    # code...
  }

  public function render($filename){
    require_once 'view/'.$filename.'.php';
  }
}

?>
