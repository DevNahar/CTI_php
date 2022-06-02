<?php

define('hostname','localhost');
define('username','root');
define('password','');
define('dbname','signup');


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_pass = $_POST['confirmpassword'];

}
if($password == $confirm_pass){
    $bd_connect = mysqli_connect("localhost,root,'',signup");echo "ok";
}else{
    echo "no";
}
?>