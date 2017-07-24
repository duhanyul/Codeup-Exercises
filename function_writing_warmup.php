<?php
  function capatalize($input){
    return ucwords($input);
  }
  // echo capatalize("daniel") . PHP_EOL;

  function greeting($firstname,$lastname){
    if (!is_string($firstname) || (!is_string($lastname))) {
      echo "ERROR NOT VALID INPUTS";
    }else {
      echo "Hello $firstname $lastname" .PHP_EOL;
    }

  }
  greeting("Daniel","Rojo");
 ?>
