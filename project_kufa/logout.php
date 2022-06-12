<?php
session_start();
session_destroy();
// session_unset( $_SESSION['Welcome']);
// $_SESSION['logout'] = "Successfully logout";
header('location:login.php')
?>
