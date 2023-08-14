<?php include('partials-front/menu.php'); ?>
    <section class="background1">
        <h1>Products</h1>
    <div class="navigate">
        <ul class="breadcrumbs-custom-path">
            <li class="right-side"><a href="index.php" class="editContent">Home <span class="arrow1"><img src="images/arrow.png" alt="arrow"width="10px"height="10px"></span></a><p></li><li class="active editContent">Products</li>
        </ul>
        </div>
    </section>
        
        <?php
            if(isset($_SESSION['order']))
                {
                    echo $_SESSION['order'];//Displaying the session
                    unset($_SESSION['order']);//Removiing the session
                }
        ?>


    <?php
        $sql="SELECT *FROM tbl_product WHERE active='Yes'";
        //execute the query
        $res=mysqli_query($conn,$sql);
        //count row to check whether product available or not
        $count=mysqli_num_rows($res);

        if($count>0)
        {
            //products avalible
            while($row=mysqli_fetch_assoc($res))
            {
                $id=$row['id'];
                $title=$row['title'];
                $image_name=$row['image_name'];
                ?>
                <div class="main3">
                        <div class="page3">
                            <?php
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not Avalible.</div>";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/products/<?php echo $image_name; ?>" alt="img">
                                    <?php
                                }
                            ?>
                            <div class="hdd">
                                <h2><?php echo $title; ?></h2>
                                <a href="<?php echo SITEURL; ?>order.php?bag_id=<?php echo $id; ?>" class="btn-secondary">Get Quotation</a>
                            </div>
                        </div>
                </div>    
                <?php
            }
        }
        else
        {
            echo "<div class='error'>Product Not Added.</div>";
        }

    ?>
</div>

<?php include('partials-front/footer.php'); ?>

    