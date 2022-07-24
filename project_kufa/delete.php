<?php
require_once 'db.php';
$id = $_GET['id'];


$delete_Q = "DELETE FROM users WHERE id = $id";
$d_s_q = mysqli_query($db_connect, $delete_Q);

header('location: userlist.php' );

?>