<?php
include('security.php');

// logout

if(isset($_POST['logoutbtn']))
{
    session_destroy();
    unset($_SESSION['login']);
    header('Location:login.php');
}
?>