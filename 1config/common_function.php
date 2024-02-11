<?php
function emailSet()
{
    if(isset($_SESSION['emailID']) && $_SESSION['emailID'] != '')
    {
        header('location:../3view/pages/dashboard.php');
        exit(); // Exit after redirection
    }
}

function emailNotSet()
{
    if(!isset($_SESSION['emailID']) || empty($_SESSION['emailID']))
    {
        header('location:../login.php');
        exit(); // Exit after redirection
    }
}

function last_activity()
{
    $_SESSION['last_activity'] = time();
}
function autologout()
{
    if(isset($_SESSION['last_activity']) && $_SESSION['last_activity'] != '')
    {
        if((time() - $_SESSION['last_activity']) > 10)
        {
            session_unset();
            session_destroy();
            header('../3view/login.php');
            // exit();
        }
    }
}
if(isset($_POST['autologout']) && $_POST['autologout'] == 'logout')
{
    autologout(); // Call autologout function
}



?>
