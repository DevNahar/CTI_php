<?php

require_once 'includes/header.php';
require_once 'includes/navbar.php';
require_once 'includes/db.php';




    // $id = $_POST['id'];
    $iid = $_GET['id'];
    
    $name = $_POST['name']; 

    $email = $_POST['email'];
    
  $update = "UPDATE users SET  NAME = '$name', EMAIL = '$email' WHERE ID = $iid ";
  $update_q = mysqli_query($bd_connect, $update);
  header('location: userlist.php');
  




?>




<?php 
require_once 'includes/footer.php';

?>