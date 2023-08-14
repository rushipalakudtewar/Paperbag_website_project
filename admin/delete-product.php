<?php

    include('../config/constants.php');

    if(isset($_GET['id']) AND isset($_GET['image_name']))
    {
        $id=$_GET['id'];
        $image_name=$_GET['image_name'];
        
        if($image_name!="")
        {
            $path="../images/products/".$image_name;

            $remove=unlink($path);
            if($remove==false)
            {
                $_SESSION['remove']="<div class='error'>Failed to Remove Product Image.</div>";
                header("location:".SITEURL.'/admin/manage-product.php');
                die();
            }
        }

        //create sql query
        $sql="DELETE FROM tbl_product WHERE id=$id";

        //execute the query
        $res=mysqli_query($conn,$sql);

        //check the condition
        if($res==TRUE)
        {
            $_SESSION['delete']="<div class='success'>Product Deleted Successfully.</div>";
            header("location:".SITEURL.'admin/manage-product.php');
        }
        else
        {
            $_SESSION['delete']="<div class='error'>Failed to Delete Product.</div>";
            header("location:".SITEURL.'admin/manage-product.php');
        }
    }
    else
    {
        header("location:".SITEURL.'admin/manage-product.php');
    }
?>