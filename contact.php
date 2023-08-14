<?php include('partials-front/menu.php'); ?>

    <section class="background1">
        <h1>Contact Us</h1>
    <div class="navigate">
        <ul class="breadcrumbs-custom-path">
            <li class="right-side"><a href="index.php" class="editContent">Home <span class="arrow1"><img src="images/arrow.png" alt="arrow"width="10px"height="10px"></span></a><p></li><li class="active editContent">Contact</li>
        </ul>
        </div>
    </section>

    
    <section class="info1">
        <div class="head11">
            <a href="#"><img src="images/R.png" alt="phone"><span><h2>Contact Us</h2></span></a>
            <a href="tel:+91 8010253329" style="margin-left: 30px;color:#626262;">8010253329</a>
        </div>

        <div class="head12">
            <a href="#"><img src="images/mes.png" alt="email"><span><h2>Email Us</h2></span></a>
            <div class="mail1">
            <a href="#">pnpformonix@gmail.com</a>
            <a href="#">pnpgroupofcompany@gmail.com</a>
            <a href="#">mktg@pnpformonix.com</a>          
            </div>  
        </div>
        <div class="head13">
            <a href="#"><img src="images/loc.png" alt="location"><span><h2>Address</h2></span></a>
            <p style="margin-left: 40px;color:#626262;">Shop No.11, Bldg no.13, Atlanta Residency, Opposite Oswal College, Anjur phata,Kamatghar road,Bhiwandi,421302</p>
        </div>
    </section>

    <div class="form1">
        <form method="post" name="emailcontact">
            <div class="twice-two">
                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
            <div class="twice-two">
                <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="" pattern="\d{10}" onkeypress="return isNumber(event)">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>
            <textarea name="message" class="form-control1" placeholder="Message" required=""></textarea>
            <div class="input-row">
                <input type="submit" name="send" value="Send Message" class="btn btn-contact">
                <div class="success">
                    <strong></strong>
                </div>
            </div>
        </form>
    </div>

<?php include('partials-front/footer.php'); ?>