<?php 
    ob_start();
    session_start();
    require_once('../1config/connection.php');
    if($_POST['submit'])
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $find_record = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'"));
        if($find_record)
        {
            $password_verify = password_verify($password, $find_record['password'] );
            if($password_verify)
            {
                $_SESSION['emailID'] = $email;
                $_SESSION['success'] = 'Logged In';
                header('location:../3view/pages/dashboard.php');
            }
            else
            {
                $_SESSION['error'] = 'Password not match';
                header('location:../3view/login.php');
            }
        }
        else
        {
            $_SESSION['error'] = 'Record not found';
            header('location:../3view/login.php');
        }
    }
?>