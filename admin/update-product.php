<?php ob_start(); ?>
<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Product</h1>
        <br><br>
        <?php
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $sql="SELECT * FROM tbl_product WHERE id=$id";

            $res=mysqli_query($conn,$sql);

            $count=mysqli_num_rows($res);

            if($count==1)
            {
                //get all the data
                $row=mysqli_fetch_assoc($res);
                $title=$row['title'];
                $current_image=$row['image_name'];
                $price=$row['price'];
                $featured=$row['featured'];
                $active=$row['active'];

            }
            else
            {
                $_SESSION['no-product-found']="<div class='error'>Product Not Found.</div>";
                header("location:".SITEURL.'admin/manage-product.php');
            }
        } 
        else
        {
            header("location:".SITEURL.'admin/manage-product.php');
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-30">
            <tr>
                <td>Title:</td>
                <td>
                    <input type="text" name="title" value="<?php echo $title; ?>">
                </td>
            </tr>

            <tr>
                <td>Current Image:</td>
                <td>
                    <?php
                        if($current_image!="")
                        {
                            ?>
                            <img src="<?php echo SITEURL; ?>images/products/<?php echo $current_image; ?>" width="150px">
                            <?php
                        }
                        else
                        {
                            echo "<div class='error'>Image not displayed";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>
                    <input type="number" name="price" value="<?php echo $price; ?>">
                </td>
            </tr>
            <tr>
                <td>New Image:</td>
                <td>
                    <input type="file" name="image">
                </td>
            </tr>
            <tr>
                <td>Featured:</td>
                <td>
                    <input <?php if($featured=="Yes") {echo "checked";} ?>  type="radio" name="featured" value="Yes">Yes
                    <input <?php if($featured=="No") {echo "checked";} ?> type="radio" name="featured" value="No">No
                </td>
            </tr>
            <tr>
                <td>Active:</td>
                <td>
                    <input <?php if($active=="Yes") {echo "checked";} ?> type="radio" name="active" value="Yes">Yes
                    <input <?php if($active=="No") {echo "checked";} ?> type="radio" name="active" value="No">No
                </td>
            </tr>
            <tr>
                <td>
                <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="update_product" class="btn-secondary">
                </td>
            </tr>
        </table>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                //echo "btn clicked";
                $id=$_POST['id'];
                $title=$_POST['title'];
                $current_image=$_POST['current_image'];
                $featured=$_POST['featured'];
                $active=$_POST['active'];   
                $price=$_POST['price'];

                //2.update new image
                //check whether image is selected or not
                if(isset($_FILES['image']['name']))
                {
                    $image_name=$_FILES['image']['name'];
                    
                    if($image_name!="")
                    {
                        //image available
                        //auto rename image
                        //get the extension of our image jpg,png,gif,etc(special symbol)
                        $ext=end(explode('.',$image_name));

                        $image_name="Food_Product".rand(000,999).'.'.$ext;

                        $source_path=$_FILES['image']['tmp_name'];

                        $destination_path="../images/products/".$image_name;
                        
                        $upload=move_uploaded_file($source_path,$destination_path);
                        
                        if($upload==false)
                        {
                            $_SESSION['upload']="<div class='error'>Failed to Upload image.</div>";
                            header("location:".SITEURL.'admin/manage-product.php');
                            //stop the process
                            die();
                        }
                        //remove  the current image
                        if($current_image!="")
                        {
                            $remove_path="../images/products/".$current_image;
                        
                            $remove=unlink($remove_path);
    
                            //check whether image removed or not
                            if($remove==false)
                            {
                                //Failed to remove image
                                $_SESSION['failed-remove']="<div class='error'>Failed to Remove Current Image.</div>";
                                header("location".SITEURL.'admin/manage-product.php');
                                die();//stop the process
                            }
                        }
                        
                    }
                    else
                    {
                        $image_name=$current_image;
                    }
                } 
                else
                {
                    $image_name=$current_image;
                }
                

                //3.update the database
                $sql2="UPDATE tbl_product SET
                    title='$title',
                    image_name='$image_name',
                    featured='$featured',
                    active='$active',
                    price='$price'
                    WHERE id=$id
                    ";

                //execute the query
                $res2=mysqli_query($conn,$sql2);

                //4.redirect to manage product page with message
                if($res2==TRUE)
                {
                    $_SESSION['update']="<div class='success'>Product Updated Successfully.</div>";
                    header("location:".SITEURL.'admin/manage-product.php');
                }
                else
                {
                    $_SESSION['update']="<div class='error'>Failed to Update Product.</div>";
                    header("location:".SITEURL.'admin/manage-product.php');
                }


            }
        ?>
    </div>
</div>


<?php include('partials/footer.php'); ?>
<?php ob_flush(); ?>