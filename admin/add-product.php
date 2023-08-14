<?php ob_start(); ?>

<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Products</h1>
        <br><br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>
        <?php
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" placeholder="Product Title">
                    </td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input type="file" name="image">
                    </td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td>
                        <input type="number" name="price">
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
                        <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type="radio" name="active" value="Yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Product" class="btn-secondary">
                    </td>
                </tr>


            </table>
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                //echo "Button clicked";
                $title=$_POST['title'];
                $price=$_POST['price'];
                if(isset($_POST['featured']))
                {
                    //get the value from form
                    $featured=$_POST['featured'];
                }
                else
                {
                    $featured="No";
                }
                if(isset($_POST['active']))
                {
                    //get the value from form
                    $active=$_POST['active'];
                }
                else
                {
                    $active="No";
                }
                //check whether image selected or not and set the value for image name accordingly
                // print_r($_FILES['image' ]);
                // die();//break the code here
                if(isset($_FILES['image']['name']))
                {
                    //upload the image
                    //source path and destination path
                    $image_name=$_FILES['image']['name'];
                    //upload the image only if image is selected
                    if($image_name!="")
                    {
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
                            header("location:".SITEURL.'admin/add-product.php');
                            //stop the process
                            die();
                        }
                    }

                }
                else
                {
                    $image_name="";
                }
                //sql query
                $sql="INSERT INTO tbl_product SET
                title='$title',
                image_name='$image_name', 
                featured='$featured',
                active='$active',
                price='$price'
                ";

                $res=mysqli_query($conn,$sql);

                if($res==TRUE)
                {
                    $_SESSION['add']="<div class='success'>Product Added Successfully.</div>";
                    header("location:".SITEURL.'admin/manage-product.php');
                }
                else
                {
                    $_SESSION['add']="<div class='error'>Failed to Add Product.</div>";
                    header("location:".SITEURL.'admin/add-product.php');

                }
            }
        ?>



    </div>
</div>



<?php include('partials/footer.php'); ?> 

<?php ob_flush(); ?>