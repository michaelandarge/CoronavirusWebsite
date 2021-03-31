<?php
session_start();
$_SESSION['error'] = null;
include_once('validationphp/validation.php');
include_once('utils.php');

  $_POST['firstName'];
  $_POST['lastName'];
  $_POST['username'];
  $_POST['password'];
  $_POST['confirmPassword'];
  $_POST['email'];
  $_POST['phone'];
  $_POST['scheduledDate'];


  echo "Hello ". $_POST['firstName'];

  $errors = array();

  $isformValid = validateInput();
  if($isformValid == TRUE){
    echo "Hurray! No error found";
  }

  function validateInput(){
    global $errors;
    if(validateString($_POST['firstName'])){
      $firstName = htmlspecialchars(trim( $_POST['firstName']));
    }
    else {
      array_push($errors, "The firstname is empty or not valid");
    }

    if(validateString($_POST['lastName'])){
      $lastName = htmlspecialchars(trim( $_POST['lastName']));
    }
    else {
      array_push($errors, "Last Name is empty or not valid");
    }
/*
    if(validateString($_POST['streetAddress'])){
      $streetAddress = htmlspecialchars(trim( $_POST['streetAddress']));
    }
    else {
      array_push($errors, "Street address is empty or not valid");
    }

    if(validateString($_POST['city'])){
      $city = htmlspecialchars(trim( $_POST['city']));
    }
    else {
      array_push($errors, "City is empty or not valid");
    }

    if(validateString($_POST['state'])){

      if(trim($_POST['state']) === 'default') {
        array_push($errors, "Please chooose a state");
      }
      else {
          $state = trim($_POST['state']);
      }
    }
    else {
      array_push($errors, "State is empty or not valid");
    }

    if(validateString($_POST['zipcode'])){
      $zipcode = htmlspecialchars(trim( $_POST['zipcode']));
    }
    else {
      array_push($errors, "Zipcode is empty or not valid");
    }
*/
    if(validateString($_POST['phone'])){
      $phone = htmlspecialchars(trim( $_POST['phone']));
    }
    else {
      array_push($errors, "Phone is empty or not valid");
    }

    if(validateString($_POST['email'])){
      $email = htmlspecialchars(trim( $_POST['email']));
    }
    else {
      array_push($errors, "Email Address is empty or not valid");
    }

    $password = "";
    $confirmPassword = "";
    if(validateString($_POST['password'])){
      $password = htmlspecialchars(trim( $_POST['password']));
    }
    else {
      array_push($errors, "Password is empty or not valid");
    }

    if(validateString($_POST['confirmPassword'])){
      $confirmPassword = htmlspecialchars(trim( $_POST['confirmPassword']));
    }
    else {
      array_push($errors, "Confirm Password is empty or not valid");
    }

    if($password !== $confirmPassword){
      array_push($errors, "Password and Confirm Password do not match");
    }

    if(!empty($errors)){

      echo "<pre>";

      echo "redirect to form";


      print_r($errors);
      echo "</pre>";
//      redirect('../testings.php');
    }
    else {
        $_SESSION['errors'] = $errors;
  //      redirect('../testings.php');
        echo "Redirect to Registration Form";
    }
  }




 ?>
