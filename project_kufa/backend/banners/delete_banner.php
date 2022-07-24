<?php
require_once '../../db.php';

$id= $_GET['id'];

$data_select= "SELECT * FROM banners WHERE id=$id";
    $data_select_query= mysqli_query($db_connect, $data_select);
    $after_data_assoc= mysqli_fetch_assoc($data_select_query);  
    
    $delete_image='../../uploads/banner_image/'. $after_data_assoc['banner_image'];   
    unlink($delete_image);

$data_delete= "DELETE FROM banners WHERE id=$id";
$data_delete_query= mysqli_query($db_connect, $data_delete);

header('location: banner_list.php')
?>