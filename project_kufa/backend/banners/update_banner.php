<?php
session_start();
require_once '../../db.php';

$id= $_POST['id'];

$sub_title  = $_POST['sub_title'];
$title  = $_POST['title'];
$descp  = $_POST['descp'];



$update_image= $_FILES['banner_image'];
//update without image
if($update_image['name']== ""){
    $banner_update="UPDATE banners SET sub_title='$sub_title', title='$title',descp='$descp' WHERE id=$id";
    $banner_update_query= mysqli_query($db_connect, $banner_update);
}else{
    // img explode,extention,allow_extention

    $img_exlode= explode('.',$update_image['name']);
    $extention = end($img_exlode);
    $allow_extention= array('jpg', 'png', 'jpeg','zip');

    if(in_array($extention, $allow_extention)){
        if($update_image['size'] <= 10000000){

            //old image delete after select image 

            $select_img= "SELECT * FROM banners WHERE id=$id";
            $select_query= mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc($select_query);


            $delete_image= "../../uploads/banner_image/".$after_assoc['banner_image'];
            unlink($delete_image);

            // make random_filename & move new_location then update

            $random_filename = time() . '.' . $extention;
            $new_location="../../uploads/banner_image/".$random_filename;
            move_uploaded_file($update_image['tmp_name'],$new_location);
            
            $banner_update="UPDATE banners SET banner_image='$random_filename' WHERE id=$id";
            $banner_update_query= mysqli_query($db_connect, $banner_update);
            header('location:edit_banner.php?id='. $id);


        }else{
            $_SESSION['invalid_size']= "image size is too large";
            header('location:edit_banner.php?id='. $id);
        }

    }else{
        $_SESSION['invalid_ext']= "invalid_extention";
        header('location:edit_banner.php?id='. $id);
    }


    
}



?>