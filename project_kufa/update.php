<?php

require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';




    // $id = $_POST['id'];
    $iid = $_GET['id'];
    
    $name = $_POST['name']; 

    $email = $_POST['email'];
    
  $update = "UPDATE users SET  name = '$name', email = '$email' WHERE id = $iid ";
  $update_q = mysqli_query($db_connect, $update);
  header('location: userlist.php');
  




?>




<?php 
require_once 'includes/footer.php';

?>