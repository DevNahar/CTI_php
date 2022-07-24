<?php
 require_once '../../db.php';
 $id= $_GET['id'];
 echo $id;
 $select_banner= "SELECT * FROM banners WHERE id=$id";
 $banner_query= mysqli_query($db_connect, $select_banner);
 $after_assoc= mysqli_fetch_assoc($banner_query);

 $select_banner= "SELECT count(*) FROM banners ";
 $banner_query= mysqli_query($db_connect, $select_banner);


 if($after_assoc['status']==1){
    $status_upd= "UPDATE banners SET status=0 WHERE id=$id";
    $status_upd_query= mysqli_query($db_connect, $status_upd);
    header('location:banner_list.php');
 }else{
    $status_upd= "UPDATE banners SET status=1 WHERE id=$id";
    $status_upd_query= mysqli_query($db_connect, $status_upd);
    header('location:banner_list.php');
 }

?>