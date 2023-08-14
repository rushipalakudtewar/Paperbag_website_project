<?php include('partials/menu.php'); ?> 
    <!-- Main-content starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Product</h1>
            <br/>
            <!-- Button to Add Admin -->
            <a href="<?php echo SITEURL; ?>admin/add-product.php" class="btn-primary">Add Product</a>
            <br/><br/>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                if(isset($_SESSION['remove']))
                {
                    echo $_SESSION['remove'];
                    unset($_SESSION['remove']);
                }
                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
                if(isset($_SESSION['no-product-found']))
                {
                    echo $_SESSION['no-product-found'];
                    unset($_SESSION['no-product-found']);
                }
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }
                if(isset($_SESSION['failed-remove']))
                {
                    echo $_SESSION['failed-remove'];
                    unset($_SESSION['failed-remove']);
                }
            ?>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
                <?php
                    $sql="SELECT * FROM tbl_product";

                    $res=mysqli_query($conn,$sql);

                    $count=mysqli_num_rows($res);
                    $sn=1;
                    if($count>0)
                    {
                        while($row=mysqli_fetch_assoc($res))
                        {
                            $id=$row['id'];
                            $title=$row['title'];
                            $image_name=$row['image_name'];
                            $price=$row['price'];
                            $featured=$row['featured'];
                            $active=$row['active'];
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo $title; ?></td>
                                <td>
                                    <?php
                                        if($image_name!="")
                                        {
                                            ?>
                                            <img src="<?php echo SITEURL; ?>images/products/<?php echo $image_name; ?>" width="100px">
                                            <?php

                                        } 
                                        else
                                        {
                                            echo "<div class='error'>Image Not Added</div>";
                                        }
                                    
                                    ?>
                                </td>
                                <td>Rs.<?php echo $price; ?></td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/update-product.php?id=<?php echo $id; ?>" class="btn-secondary">Update Product</a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-product.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name; ?>" class="btn-danger">Delete Product</a>
                                </td>
                            </tr>


                            <?php
                        }

                    }
                    else
                    {

                    }
                ?>

                
            </table>
        </div>

    </div>
    <!-- Main-content ends -->

<?php include('partials/footer.php'); ?>

