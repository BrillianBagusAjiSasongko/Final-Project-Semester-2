<?php
    session_start();
 
    $_SESSION['access_token'] = "";
    $_SESSION['access_profile'] = "";
    
    unset($_SESSION['user_username']);
    session_destroy();
    
    header("location:home.php")
?>