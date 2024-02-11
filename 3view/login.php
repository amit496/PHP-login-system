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
      <div class="title">Login Form</div>
      <form action="../2managment/login.php" method="post">
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
            <input type="text" required name="email">
            <label>Email Address</label>
         </div>
         <div class="field">
            <input type="password" required name="password">
            <label>Password</label>
         </div>
         <div class="content">
            <div class="checkbox">
               <input type="checkbox" id="remember-me">
               <label for="remember-me">Remember me</label>
            </div>
            <div class="pass-link">
               <a href="#">Forgot password?</a>
            </div>
         </div>
         <div class="field">
            <input type="submit" value="Login" name="submit">
         </div>
         <div class="signup-link">Not a member? <a href="registeration.php">Signup now</a></div>
      </form>
   </div>
   <?php require_once('../1config/all_js.php'); ?>
</body>
</html>