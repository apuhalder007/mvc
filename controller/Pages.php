<?php
/**
 *
 */
class Pages
{

  function __construct()
  {
    echo '<pre>';
    echo 'This is page controller initialize.wow!';
    echo '</pre>';
  }

  function aboutus($args = null){
    echo '<pre>';
    echo 'This is about us method of pages controller.wow! <br/>';

    if($args){
      echo 'Also got argument - '.$args;
    }

    echo '</pre>';
  }
}

?>
