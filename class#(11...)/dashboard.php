<?php
   session_start();
   require_once 'includes/header.php';
require_once 'includes/navbar.php';
    
    if(!isset($_SESSION['Welcome'])){
        header('location:login.php');
    }
    ?>
    <h2><?php echo $_SESSION['Welcome'];?></h2>


    <?php
require_once 'includes/footer.php';

?>