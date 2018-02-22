<?php
  function myLoad($class) {
    if(file_exists('application/'.$class.'.class.php')){
    include_once('application/'.$class.'.class.php');
  }
    if(file_exists('application/controllers/'.$class.'.class.php')){
    include_once('application/controllers/'.$class.'.class.php');
  }
    if(file_exists('application/models/'.$class.'.class.php')){
    include_once('application/models/'.$class.'.class.php');
  }
 }

spl_autoload_register('myLoad');



    new controller();

 ?>
