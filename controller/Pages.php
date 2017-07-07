<?php
/**
 *
 */
class Pages extends controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index($args = null){
    $this->view->render('pages/index');
  }
}

?>
