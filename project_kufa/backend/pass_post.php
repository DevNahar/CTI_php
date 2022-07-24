<?php
session_start();
require_once '../db.php';

$id = $_POST['id'];
$pass = md5($_POST['password']);
$pass_upd = "UPDATE users SET password = '$pass' WHERE id = '$id'";
$pass_rst = mysqli_query($db_connect,$pass_upd);
$_SESSION['passSuccess'] = 'password update successfully';
header('location:profile.php');




?>