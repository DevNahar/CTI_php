<?php
require_once 'db.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);


$count_select = "SELECT count(*) AS total FROM users WHERE email = '$email' "; 
    $count_query = mysqli_query($db_connect, $count_select);
    $after_assoc = mysqli_fetch_assoc($count_query);

   if($after_assoc['total'] == 1 ){
        $check_select = "SELECT * FROM users WHERE email = '$email' "; 
        $check_query = mysqli_query($db_connect, $check_select);
        $after_check_assoc = mysqli_fetch_assoc($check_query);
       
       
          
        $check_id = $after_check_assoc['id']; 
        

        $check_name = $after_check_assoc['name']; 
          
        
        $check_email = $after_check_assoc['email'];

        $_SESSION['check_id'] = $check_id;
        $_SESSION['check_name'] = $check_name;
        $_SESSION['check_email'] = $check_email;
        
        $_SESSION['welcome'] = "Welcome to Dashboard";
                    
        header('location:backend/dashboard.php');
        
    
        // if (password_verify($password,$after_check_assoc['password'])) {
           
        //     $_SESSION['check_id'] = $check_id;
        //     $_SESSION['check_name'] = $check_name;
        //     $_SESSION['check_email'] = $check_email;
            
        //     $_SESSION['welcome'] = "Welcome to Dashboard";
                        
        //     header('location:backend/dashboard.php');

        // }else{   
        //     $_SESSION['login_error_pass'] = "wrong password";
        //     header('location:login.php');
        // } 

   }else{   
        $_SESSION['login_wrong_mail'] = "invalid email address";
        header('location:login.php');
    }
?>