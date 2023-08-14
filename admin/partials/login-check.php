


<?php
    //Authorization- access control
    //check whether user logged in or not
    if(!isset($_SESSION['user']))
    {
        //user is not logged in 
        $_SESSION['no-login-message']="<div class='error text-center'>Please login to Access Admin Panel</div>";
        //redirect to login page
        header("location:".SITEURL.'admin/login.php');
    }



?>

