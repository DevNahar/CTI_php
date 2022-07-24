<?php
    
    require_once '../../db.php';

    $sub_title  = $_POST['sub_title'];
    $title  = $_POST['title'];
    $descp  = $_POST['descp'];
    
    
    $upload_img= $_FILES['banner_image'];
   
    
    $after_explode = explode('.', $upload_img['name']);
    $extention= strtolower(end($after_explode)) ;
    
    $allow_extention = array('jpg', 'png', 'jpeg', 'gif');

    if(in_array($extention, $allow_extention)){
        if($upload_img['size'] <= 10000000){

            
            $banner_id = mysqli_insert_id($db_connect) ; 
            // $filename = $banner_id . '.' . $extention;   //filename to banner_id
            $random_filename = time() . '.' . $extention;   //$random_filename to random number
            $new_location = "../../uploads/banner_image/" . $random_filename;
            move_uploaded_file($upload_img['tmp_name'], $new_location);

            $banner_insert= "INSERT INTO banners (sub_title,title,descp,banner_image)VALUES('$sub_title','$title','$descp', '$random_filename')";
            $banner_query = mysqli_query($db_connect,$banner_insert); 
            $_SESSION['invalid_ext']= "Banner insert successfully";


        }else{
            $_SESSION['invalid_ext']= "file size is too large";
        }

    }else{
        $_SESSION['invalid_ext']= "Extention Invalid";
        
    }

   
        header('location:add_banner.php');
?>