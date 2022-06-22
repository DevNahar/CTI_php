<?php
session_start();
require_once 'db.php';

$id = $_SESSION['check_id'];


$upl_file = $_FILES["image_upload"];
$upl_file_n = $upl_file['name'];
$file_xpld = explode('.',$upl_file_n);

$ext_last_part = end($file_xpld);
$allow_extention = array('jpg','jpeg','png','gip');


if(in_array($ext_last_part, $allow_extention)){
    if($upl_file['size'] <= 1000000){
        
        $upl_file_new_name = $id . '.' . $ext_last_part;
        
        $new_file_location = '../images/' .  $upl_file_new_name ;
         move_uploaded_file($upl_file['tmp_name'], $new_file_location);
         
        $photo_up = "UPDATE users SET upload_image='$upl_file_new_name' WHERE id=$id";
        $photo_up_query = mysqli_query($db_connect, $photo_up);
        $_SESSION['photo'] = "profile photo updated";
        header('location:profile.php');
    }else{
        $_SESSION['size'] = "file size too large";
        header('location:profile.php');
    }
}else{
    $_SESSION['inv_extention'] = "invalid extention";
   header('location:profile.php');
}
?>



