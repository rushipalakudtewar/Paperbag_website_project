<?php ob_start(); ?>

<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>
        <?php
            //1.get the id 
            $id=$_GET['id'];
            //2.create the query
            $sql="SELECT * FROM tbl_admin WHERE id=$id";
            //3.execute query
            $res=mysqli_query($conn,$sql);

            if($res==TRUE)
            {
                //check whether the data is avalible or not
                $count=mysqli_num_rows($res);
                if($count==1)
                {
                    //get the details
                    //echo "Admin avalible";
                    $row=mysqli_fetch_assoc($res);
                    $full_name=$row['full_name'];
                    $username=$row['username'];
                }
                else
                {
                    header("location".SITEURL.'admin/manage-admin.php');
                }
            }
        ?>


        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>

    </div>
</div>

<?php
if(isset($_POST['submit']))
{
    //echo "Button Clicked";
    //get the value from form
    $id=$_POST['id'];
    $fullname=$_POST['full_name'];
    $username=$_POST['username'];

    //create sql query
    $sql="UPDATE tbl_admin SET
    full_name='$fullname',
    username='$username'
    where id='$id'
    ";

    $res=mysqli_query($conn,$sql);
    if($res==TRUE)
    {
        $_SESSION['update']="<div class='success'>Admin Updated Sucessfully.</div>";
        header("location:".SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['update']="<div class='error'>Failed to Update Admin</div>";
        header("location:".SITEURL.'admin/manage-admin.php');
    
    }
}

?>





<?php include('partials/footer.php'); ?>

<?php ob_flush(); ?>