<?php
require_once 'includes/db.php';
$id = $_GET['id'];


$delete_Q = "DELETE FROM users WHERE ID = $id";
$d_s_q = mysqli_query($bd_connect, $delete_Q);

header('location: trash.php' );

?>