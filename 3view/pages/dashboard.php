<?php 
ob_start();
session_start();
require_once('../../1config/connection.php');
require_once('../../1config/common_function.php');
emailNotSet(); 
last_activity();
echo isset($_SESSION['last_activity'])?$_SESSION['last_activity']:'';
echo isset($_SESSION['emailID'])?$_SESSION['emailID']:'';
?>

<br>
<a href="users.php">User</a>
<br>
<a href="../../2managment/logout.php">Logout</a>
