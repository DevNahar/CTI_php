<?php
session_start();
require_once 'backend/db.php';


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =  md5($_POST['password']);
    $confirm_pass = md5($_POST['confirmpassword']);
    $after_hash = password_hash($password,PASSWORD_DEFAULT);
    

    if (empty($name)) {
      
      $_SESSION['name_error'] = "Name is required";
      
    }

   
if (empty($email)) {
 
  $_SESSION['email_error'] = "Email is Required";
  
 
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  
  $_SESSION['invalid_email'] = "Invalid Email Address";
    
    
}
if (empty($password)) {
  
  $_SESSION['pass_error'] = "Password is Required";
  
 
}
if (empty($confirm_pass)) {
  
  $_SESSION['confirm_pass_error'] = "Confirm_password is Required";
  
 
}
if($password == $confirm_pass){
  $count_select = "SELECT count(*) AS total FROM users WHERE email =  '$email'"; 
  $count_query = mysqli_query($db_connect, $count_select);
  $after_assoc = mysqli_fetch_assoc($count_query);

    if( $after_assoc['total'] == 0){
      $insert = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
      $insert_query = mysqli_query($db_connect, $insert);
      $_SESSION['reg_success'] = "Registration successfull";
      header("location: login.php") ;

    }    else{
      $_SESSION['used_email'] = "This email is already taken";
      header("location: registration.php") ;
    }
}else{

 $_SESSION['pass_&_confirm_pass_error'] = "Confirm_password is wrong";
 header("location: registration.php") ;
 
}





