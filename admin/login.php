


<?php include('../config/constants.php'); ?>
<html>
    <head>
        <title>Login-PaperBag Website</title>
        <style>
            .login{
                border:1px solid grey;
                width:30%;
                margin:10% auto;
                padding:2%;
            }
            .text-center{
                text-align:center;
            }
            /* Button css */
            .btn-primary{
                background-color:#1f90ff;
                padding:1%;
                text-decoration:none;
                color:white; 
                font-weight:bold; 
            }
            .btn-primary:hover{
                background-color:#3742fa;
            }

            .success{
                color:#2ed573;
            }
            .error{
                color:#ff4757;
            }
        </style>
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);      
                }
                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);      
                }
            ?>
            <br><br>
            <form action="" method="POST" class="text-center">
                Username: <br>
                <input type="text" name="username" placeholder="Enter Username">
                <br><br>
                Password: <br>
                <input type="password" name="password" placeholder="Enter Password">
                <br><br>
                <input type="submit" name="submit" value="login" class="btn-primary">
                <br>
            </form> 
            <p class="text-center">Created By - <a href="rushipalakudtewar#gmail.com">Rushi Palakudtewar</a> </p>
        </div>

    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    //get the data from login form
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    //create sql query
    $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //execute the query
    $res=mysqli_query($conn,$sql);
    //check whether condition true
    
    //counts rows whether user exists or not
    $count=mysqli_num_rows($res);
    if($count==1)
    {
        //user available and login success
        $_SESSION['login']="<div class='success'>Login Successful.</div>";
        $_SESSION['user']=$username; //To check whether user logged in or not and logout will unset it

        header("location:".SITEURL.'admin/index.php');
    }
    else
    {
        //user not available and login failed
        $_SESSION['login']="<div class='error'>Username and Password Incorrect.</div>";
        header("location:".SITEURL.'admin/login.php');

    }

}
?>
