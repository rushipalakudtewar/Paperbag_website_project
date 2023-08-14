    <?php ob_start(); ?>
<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br/><br/>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];//Displaying the session
                unset($_SESSION['add']);//Removiing the session
            }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:-</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username:-</td>
                    <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                </tr>
                <tr>
                    <td>Password:-</td>
                    <td><input type="text" name="password" placeholder="Enter Your Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class=btn-secondary>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php
    // process the value from Form and save it in Database
    // check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //echo "button clicked";
        // 1.Get the data from Form
        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);//password Encryption with MD5

        //2.SQL query save the data into the Database
        $sql="INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
            ";
        
        //3.Executing query and saving data in the database
        $res=mysqli_query($conn, $sql) or die(mysqli_error());

        //4.Check whether the (query is executed) data is inserted or not and display appreciate message
        if($res==TRUE)
        {
            echo "data inserted";
             //create the session variable to display the message
             $_SESSION['add']="<div class='success'>Admin Added Successfully</div>";//redirect page to manage-admin 
             header("location:".SITEURL.'admin/manage-admin.php');
         }
         else
         {
            echo "Failed to data insert";
             //create the session variable to display the message
             $_SESSION['add']="<div class='error'>Failed to Add Admin</div>";//redirect page to add-admin
             header("location:".SITEURL.'admin/add-admin.php');
         }

    }
?>
<?php ob_flush(); ?>