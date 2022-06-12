<?php
require_once 'includes/header.php';
require_once 'includes/navbar.php';

require_once 'includes/db.php';
$id = $_GET['id'];

$trash_select = "SELECT * FROM users WHERE ID = '$id' ";
$slc_Query_trash =  mysqli_query($bd_connect, $trash_select);
$after_assoc = mysqli_fetch_assoc($slc_Query_trash);

if($after_assoc['status'] == 0){
$status_update = "UPDATE users SET status = '1' WHERE ID = '$id'";
$status_update_Q = mysqli_query($bd_connect,$status_update);

header('location:userlist.php');
}else{
$status_update = "UPDATE users SET status = '0' WHERE ID = '$id'";
$status_update_Q = mysqli_query($bd_connect,$status_update);
header('location:userlist.php');

}
?>