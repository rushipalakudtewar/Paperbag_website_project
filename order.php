<?php ob_start(); ?>

<?php include('partials-front/menu.php'); ?>
    <section class="background1">
        <h1>Order Now</h1>
    <div class="navigate">
        <ul class="breadcrumbs-custom-path">
            <li class="right-side"><a href="products.php" class="editContent">Products <span class="arrow1"><img src="images/arrow.png" alt="arrow"width="10px"height="10px"></span></a><p></li><li class="active editContent">Order</li>
        </ul>
        </div>
    </section>

    <?php
        //check bag id set or not
        if(isset($_GET['bag_id']))
        {
            $bag_id=$_GET['bag_id'];
            //get the details of selected bag
            $sql="SELECT * FROM tbl_product WHERE id=$bag_id";
            #execute the query
            $res=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);
            if($count==1)
            {
                $row=mysqli_fetch_assoc($res);
                $title=$row['title'];
                $price=$row['price'];
                $image_name=$row['image_name'];


            }
            else
            {
                header("location:".SITEURL);
            }
        }
        else
        {
            header('location:'.SITEURL);
        }
    ?>
    
    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container1">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="" method="POST" class="order">
                <fieldset>
                    <legend>Selected Bag</legend>

                    <div class="food-menu-img">
                        <?php
                            if($image_name=="")
                            {
                                //image not avalible
                                echo "<div class='error'>Image not available.</div>";
                            } 
                            else
                            {
                                //image available
                                ?>
                                     <img src="<?php echo SITEURL; ?>images/products/<?php echo $image_name; ?>" alt="bag" class="img-responsive img-curve">
                                <?php
                            }
                        ?>
                    </div>
    
                    <div class="food-menu-desc">
                        <h3><?php echo $title; ?></h3>
                        <input type="hidden" name="product" value="<?php echo $title; ?>">
                        <p class="food-price">$<?php echo $price; ?></p>
                        <input type="hidden" name="price" value="<?php echo $price; ?>">


                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Rushi Palakudtewar" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 8329xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. rushipalakudtewar.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>
            
            <?php
                if(isset($_POST['submit']))
                {
                    $product=$_POST['product'];
                    $price=$_POST['price'];
                    $qty=$_POST['qty'];
                    $total=$price*$qty;
                    $order_date=date("Y-m-d h:i:sa");
                    $status="Ordered";
                    $customer_name=$_POST['full-name'];
                    $customer_contact=$_POST['contact'];
                    $customer_email=$_POST['email'];
                    $customer_address=$_POST['address'];

                    $sql2="INSERT INTO tbl_order SET 
                        product='$product',
                        price='$price',
                        qty='$qty',
                        total='$total',
                        order_date='$order_date',
                        status='$status',
                        customer_name='$customer_name',
                        customer_contact='$customer_contact',
                        customer_email='$customer_email',
                        customer_address='$customer_address'";
                    //echo $sql2; die();
                    $res2=mysqli_query($conn,$sql2);

                    if($res2==TRUE)
                    {
                        $_SESSION['order']="<div class='success text-center'>Order Placed Successfully.</div>";
                        header('location:'.SITEURL.'products.php');
                    }
                    else
                    {
                        $_SESSION['order']="<div class='error text-center'>Failed to Order the Paperbag.</div>";
                        header('location:'.SITEURL.'products.php');
                    }

                }
            ?>

        </div>
    </section>

<?php include('partials-front/footer.php'); ?>


<?php ob_flush(); ?>