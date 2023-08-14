<?php include('partials/menu.php'); ?> 
    <!-- Main-content starts -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Gallery</h1>
            <br/>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>
            <br>
            <!-- Button to Add Admin -->
            <a href="<?php echo SITEURL; ?>admin/add-gallery.php" class="btn-primary">Add Gallery Contents</a>
            <br/><br/>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Image Name</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
                <?php
                 $sql="SELECT * FROM tbl_gallery WHERE active='Yes'";

                 $res=mysqli_query($conn,$sql);

                 $count=mysqli_num_rows($res);
                 $sn=1;
                 if($count>0)
                 {
                     while($row=mysqli_fetch_assoc($res))
                     {
                         $id=$row['id'];
                         $image_name=$row['image_name'];
                         $featured=$row['featured'];
                         $active=$row['active'];
                         ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                                <td>
                                    <?php
                                        if($image_name!="")
                                        {
                                            ?>
                                            <img src="<?php echo SITEURL; ?>images/gallery/<?php echo $image_name; ?>" width="100px">
                                            <?php

                                        } 
                                        else
                                        {
                                            echo "<div class='error'>Image Not Added</div>";
                                        }
                                    
                                    ?>
                                </td>
                                <td><?php echo $featured; ?></td>
                                <td><?php echo $active; ?></td>
                               
                            <td>
                                <a href="#" class="btn-secondary">Update Gallery</a>
                                <a href="#" class="btn-danger">Delete Gallery</a>
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

