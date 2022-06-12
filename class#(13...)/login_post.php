<?php
require_once 'includes/db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$count_select = "SELECT count(*) AS total FROM users WHERE EMAIL = '$email' AND PASSWORD = '$password'"; 
    $count_query = mysqli_query($bd_connect, $count_select);
    $after_assoc = mysqli_fetch_assoc($count_query);

   if($after_assoc['total'] == 1 ){
    
    $_SESSION['Welcome'] = "Welcome to login page";
    header('location:login.php');

   }else{
   
    $_SESSION['wrong_mail_pass'] = "mail or password is wrong";
   }


?>