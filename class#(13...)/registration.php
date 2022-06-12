<?php
session_start();
require_once 'includes/db.php';


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirmpassword'];

}
if($password == $confirm_pass){
    $count_select = "SELECT count(*) AS total FROM users WHERE EMAIL =  '$email'"; 
    $count_query = mysqli_query($bd_connect, $count_select);
    $after_assoc = mysqli_fetch_assoc($count_query);

   if($after_assoc['total'] == 0){
    $insert = "INSERT INTO users (NAME, EMAIL, PASSWORD) VALUES ('$name', '$email', '$password')";
    $insert_query = mysqli_query($bd_connect, $insert);
    header("location: userlist.php") ;

   }else{
      $_SESSION['used_email'] = "This email is already taken";
      header("location: index.php") ;
   }

   
}else{
    $_SESSION['error_pass'] = "wrong password";
      header("location: index.php") ;
}

?>