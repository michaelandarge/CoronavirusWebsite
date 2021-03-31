<?php

  function validateString($str){
    $tempString = htmlspecialchars($str);
    if(isset($str) && !empty($str)){
      return true;
    }
      else {
        return false;
      }
  }

  function validateEmail($str){
    return filter_var($str, FILTER_VALIDATE_EMAIL);
  }



 ?>
