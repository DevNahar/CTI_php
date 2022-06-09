<?php

require_once 'includes/db.php';


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirmpassword'];

}
if($password == $confirm_pass){
// define('password','');
   $insert = "INSERT INTO users (NAME, EMAIL, PASSWORD) VALUES ('$name', '$email', '$password')";
   $insert_query = mysqli_query($bd_connect, $insert);
   header("location: userlist.php") ;
}
?>