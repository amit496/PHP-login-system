<?php 
   ob_start();
   session_start();
   require_once('../1config/connection.php');
   require_once('../1config/common_function.php');
   emailSet();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login System</title>
   <?php require_once('../1config/all_css.php'); ?>
</head>
<body>
   <div class="wrapper">
      <div class="title">Registration Form</div>
      <form action="../2managment/register.php" method="post">
         <?php 
            if(isset($_SESSION['success']) && $_SESSION['success'] != '')
            {
               echo "<div class='alert alert-success'>".$_SESSION['success']."</div>";
            }
            if(isset($_SESSION['error']) && $_SESSION['error'] != '')
            {
               echo "<div class='alert alert-danger'>".$_SESSION['error']."</div>";
            }
         ?>
         <div class="field">
               <input type="text" required name="name" autocomplete="off">
               <label>Name</label>
         </div>
         <div class="field">
            <input type="text" required name="email" autocomplete="off">
            <label>Email Address</label>
         </div>
         <div class="field">
            <input type="text" required name="contact" autocomplete="off">
            <label>Contact</label>
         </div>
         <div class="field">
            <input type="password" required name="password" autocomplete="off">
            <label>Password</label>
         </div>
         <div class="field">
            <input type="submit" value="Login" name="submit">
         </div>
         <div class="signup-link"><a href="login.php">Signin now</a></div>
      </form>
   </div>
   <?php require_once('../1config/all_js.php'); ?>
</body>
</html>