<?php 
    ob_start();
    session_start();
    require_once('../1config/connection.php');
    session_unset();
    session_destroy();
    header('location:../3view/login.php');

?>