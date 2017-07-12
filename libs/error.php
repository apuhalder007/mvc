<?php
/**
 *
 */
class Error
{

  function __construct()
  {
    $this->view = new view();
  }

  function show404(){
    $this->view->render('errors/index');
  }
}

?>
