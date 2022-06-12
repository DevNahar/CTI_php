<?php
require_once 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$count_select = "SELECT count(*) AS total FROM users WHERE EMAIL = '$email' "; 
    $count_query = mysqli_query($bd_connect, $count_select);
    $after_assoc = mysqli_fetch_assoc($count_query);

   if($after_assoc['total'] == 1 ){
        $check_select = "SELECT * FROM users WHERE EMAIL = '$email' "; 
        $check_query = mysqli_query($bd_connect, $check_select);
        $after_check_assoc = mysqli_fetch_assoc($check_query);
       
        $check_name = $after_check_assoc['NAME'];       
        
        $check_email = $after_check_assoc['EMAIL'];
        
    
        if (password_verify($password,$after_check_assoc['PASSWORD'])) {
            $_SESSION['check_name'] = $check_name;
            $_SESSION['check_email'] = $check_email;
            $_SESSION['welcome'] = "Welcome to Dashboard";
            header('location:dashboard.php');
        }else{   
            $_SESSION['login_error_pass'] = "wrong password";
            header('location:login.php');
        } 

   }else{   
        $_SESSION['login_wrong_mail'] = "invalid email address";
        header('location:login.php');
    }
?>