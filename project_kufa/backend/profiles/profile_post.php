<?php
session_start();
require_once '../../db.php';

$id = $_POST['id'];

if(isset($_POST['nm_cng_btn'])){
    $name = $_POST['name'];
    $nm_cng_upd = "UPDATE users SET name = '$name' WHERE id = '$id'";
    $nm_cng_upd_q = mysqli_query($db_connect,$nm_cng_upd);
    $_SESSION['check_name'] = "$name";

}
header('location: profile.php');






?>

