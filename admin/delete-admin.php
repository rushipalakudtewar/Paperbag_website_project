<?php
    //include constants.php file here
    include('../config/constants.php');

    //get the id of admin to be deleted
    $id=$_GET['id'];
    //create sql query to delete admin
    $sql="DELETE FROM tbl_admin where id=$id";

    //execute the query
    $res=mysqli_query($conn,$sql);

    //redirect to managge admin page with message (success/error)
    if($res==TRUE)
    {
        //query executed successfully and admin deleted
        $_SESSION['delete']="<div class='success'>Admin Deleted Successfully.</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }
    else
    {
        $_SESSION['delete']="<div class='delete'>Failed to Delete Admin.Try Again Later..</div>";
        header('location:'.SITEURL.'admin/manage-admin.php');
    }


?>