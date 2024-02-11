<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'loginsystem';
    $conn = mysqli_connect($hostname,$username,$password,$database);
    if(!$conn)
    {
        die('Not connected');
    }
?>