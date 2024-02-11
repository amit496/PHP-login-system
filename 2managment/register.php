<?php 
    ob_start();
    session_start();
    require_once('../1config/connection.php');
    if($_POST['submit'])
    {
        $name  = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $password_encryption = password_hash($password, PASSWORD_BCRYPT);

        $find_mail = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email'"));
        if($find_mail)
        {
            $_SESSION['error'] = $email . ' already exits';
            header('location:../3view/registeration.php');
        }
        else
        {
            $complete_registration = mysqli_query($conn, "INSERT INTO `users` (`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$contact','$password_encryption')");
            if($complete_registration)
            {
                $_SESSION['emailID'] = $email;
                $_SESSION['success'] = 'Registration Complete';
                header('location:../3view/pages/dashboard.php');
            }
        }
    }
?>