<?php include('partials-front/menu.php'); ?>

    <div class="container">
        <div class="myslide fade">
         <div class="numbertext"></div>
         <img src="images/pretty-woman-yellow-uniform-pointing-brown-blank-craft-paper-bag.jpg" alt="wide" width="100%">
         <div class="text">Recyclable And Reusable</div>
     </div>
     <div class="myslide fade">
         <div class="numbertext"></div>
         <img src="images/young-happy-woman-with-shopping-bags-walking-street.jpg" alt="wide" width="100%">
         <div class="text">Save Energy</div>
     </div>
     <div class="myslide fade">
         <div class="numbertext"></div>
         <img src="images/pexels-tim-douglas-6567376.jpg" alt="wide" width="100%">
         <div class="text">Eco-Friendly</div>
     </div>
     
     <div class="myslide fade">
         <div class="numbertext"></div>
         <img src="images/pexels-max-fischer-5868120.jpg" alt="wide" width="100%">
         <div class="text">Durable And Comfortable</div>
     </div>
     <div class="myslide fade">
         <div class="numbertext"></div>
         <img src="images/pexels-amina-filkins-5413724.jpg" alt="wide" width="100%">
         <div class="text">Bio-Degradable</div>
     </div>
     <div class="myslide fade">
         <div class="numbertext"></div>
         <img src="images/delivery-man-give-bag-with-food-isolated-white-background.jpg" alt="wide" width="100%">
         <div class="text">Easy To Use</div>
     </div>
     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
 

    <div class="method1">
        <div class="step1">
            <h1>Be Clean <span style="color: rgb(12, 191, 12);">Go Green</span> </h1>
            <p>PNP Formonix Paper Bags offers an eco-friendly alternative to plastic bags. You want to reduce impact of plastic on the planet, but not at a cost to your business? Not a problem, we’ve worked hard to source affordable paper & manufacture bags without compromising our ethical values.</p>
        </div>
        <div class="step2">
            <div class="img1">
                <img src="images/mission1.jpg" alt="mission" width="100%" height="100%">
            </div>
            <h4>Our Mission</h4>
            <p>Our mission is to improve the environmental quality by providing Recyclable & eco-friendly packaging solutions</p>
        </div>
        <div class="step3">
            <div class="img2">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCG-rpeE8m6TPIPpSSZ9Ax-O8WFxog8UtFMg&usqp=CAU" alt="vision" width="100%" height="100%">
            </div>
            <h4>Our Vision</h4>
            <p>Our Vision is to work together to create a clean and green place to live and work for future generations. Through constantly keep evolving quality and innovation of our products and services.</p>
        </div>

    </div>


    <div class="about">
        <div class="uses1">
        <h1 class="head1">WHY USE ECO-FRIENDLY PAPER BAGS ?</h1>
        <p class="para1">Paper bags are commonly 100% recyclable, unlike plastic that emits extremely toxic & poisonous gases in the atmosphere during the recycling process, the paper in recycling process involves no such hazard. Most paper bag waste takes less than 6 month time to degrade & in most cases, they end up turning fertile waste for vegetation & this is the top reason for using paper bags & so both business owner & customer should promote the use of paper bags.</p>
        </div>
        <div class="img3">
            <img src="https://i.pinimg.com/originals/a5/74/31/a57431a3a51f5116082392f3f9990385.png" alt="img" width="100%" height="100%">

        </div>
        
    </div>


<div class="products">
    <h2 class="text-center" style="color:black">Explore Paper Bags</h2>
    <?php
        $sql="SELECT *FROM tbl_product WHERE active='Yes' AND featured='Yes' LIMIT 3";
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

     <div class="text-center" style="margin:20px">
        <a href="products.php"  style="color:blue">See More</a>
     </div> 
    <?php include('partials-front/footer.php'); ?>