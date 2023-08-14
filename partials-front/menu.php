<?php include('config/constants.php');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNP Formonix Bag's</title>
    <style>
         html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
            width: 100%;
            height: 80px;
            position: sticky;
            background-color: #fff;
            top:0;
            z-index: 10;
            
       

        }
        body {
            margin: 0;
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
            /* background: #fff; */
        }

        .nav {
            height: 20px;
            width: 100%;
            display: block;
            justify-content: flex-start;
            z-index: 10;
            font-weight: 300;
            transition: 0.2s ease-in-out;
            /* position: fixed; */
        }

        .nav__list {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            margin-left: 55vh;
            margin-top: -49px;
            padding: 0vh 4vw;
        }

        .nav__link {
            color: inherit;
            text-decoration: none;
            margin-right: 50px;
            position: relative;
            font-family: "Raleway", sans-serif;
            padding: 16px 0;
            margin: 0 12px;
            letter-spacing: 1px;
            line-height: 16px;
            font-weight: 700;
            transition: color 0.1s, background-color 0.1s, padding 0.2s ease-in;
            color: #111;
        }

        .nav-toggle {
            display: none;
        }

        .nav__link::before {
            content: "";
            display: block;
            position: absolute;
            bottom: 3px;
            left: 0;
            height: 3px;
            width: 100%;
            background-color: #000;
            transform-origin: right top;
            transform: scale(0, 1);
            transition: color 0.1s, transform 0.2s ease-out;
        }

        .nav__link:active::before {
            background-color: #000;
        }

        .nav__link:hover::before,
        .nav__link:focus::before {
            transform-origin: left top;
            transform: scale(1, 1);
        }

        .logo {
            padding: 3vh 3vw;
            text-align: center;
            display: flex;
            align-items: center;
            color: rgb(22, 8, 8);
            text-transform: uppercase;
            
            font-family: "Raleway", sans-serif;
            font-weight: 800;
        }

        .smalllogo {
            display: none;
        }

        a {
            text-decoration: none;
            color: #111;
        }

     
        .fade{
           animation-name: fade;
           animation-duration: 1.5s;
       }
       @keyframes fade{
           from{
               opacity: .4;
           }
           to{
               opacity: 1;
           }
       }
       
 
       .img{
           vertical-align: middle;
       }
        .logo{
            border-radius: 30%;
        }

        /* slideshow section starts */
       .container{
        max-width: 1000%;
        position: relative;
        margin: auto;
    }
        .myslide{
            display: none;
        }
        .numbertext{
            position: absolute;
        
        }
        .prev, .next{
            top:50%;
            font-size: 18px;
            position:absolute;
            width: auto;
            padding: 10px;
            font-weight: bold;
            transition:0.6s ease;
                border-radius:0 3px 3px 0;
        }

        .next{
            right: 0;
            transition: 0.6s ease;
            border-radius: 3px 0px 0px 3px;

        }
        .text{
            color: white;
            bottom: 40%;
            font-size: 50px;
            width: 100%;
            padding: 20px;
            text-align: center;
            position: absolute;
            
        }
        /* method step1-3 css */
        .method1{
            display: flex;
            flex-wrap: wrap;
            background-color:  #fff;
            padding: 10px;
            width: 100%;
            height: auto;

        }
        .step1{
            flex: 30%;
            padding: 10px;
            margin: 3px;

        }
        .step2{
            flex:30%;
            padding: 10px;
            margin: 3px;
        }
        .img1{
           width: 300px;
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 8px 20px 0 rgba(0,0,0,0.19);
           text-align: center;
           margin: 5px;
        }
        .step3{
            flex:30%;
            padding: 10px;
            margin: 3px;
        }
        .img2{
           width: 300px;
           box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 8px 20px 0 rgba(0,0,0,0.19);
           text-align: center;
           margin: 5px;
        }
        /* about css  */
        .img3 img{
            width: 100%;
            height: 120px;
            opacity: 0.9;
            border-radius: 5px;
            transition: all 0.4s;
        }
        .img3 img:hover{
            opacity: 1;
            border-radius: 5px;

        }
        .head1{
            font-size: 40px;
            color: #fff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 900;     
            text-align: center;
        }
        .section1{
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 20px;
            color: white;
            background-color: rgb(121, 32, 32);
        }
        .section1 h3{
            padding-bottom: 10px;
        }
        .head2{
            text-align: center;
            width: 40%;
            padding: 10px;

        }
        .product{
            width: 30%;
            padding: 10px;
        }
        .contact{
            width: 30%;
            padding: 10px;
        }
        .product ul a{
            color:#fff;
            padding-bottom: 5px;
        }
        .contact ul a{
            color: #fff;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font: 1em underline;
            padding-bottom: 8px;
        }
        .about{
            width: 100%;
            height: 300px;
            padding: 20px;
            background-image:url(images/pexels-tino-11591449.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            width: 100%;
            height: auto;
            color: #fff;
        }
        .uses1{
            padding: 5px;
            flex:50%;
        }
        .img3{
            flex: 50%;
           
        }
        .img3 img{
           
            width: 500px;
            height: 400px;
        
        }
        /* CSS for Categories */
        .products{
            padding: 4% 0;
        }


        /* about php page css */
        .background1{
            background-image: url(images/pexels-ds-stories-50.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height: auto;
            padding: 60px;
        }
        .background1 h1{
            font-family: 'Gill Sans';
            font-size: 5ch;
        }
        .navigate{
            display: flex;
            flex-wrap: wrap;
        }
        
        .navigate ul li{
            list-style: none;  
            display: inline-block;  
            padding: 5px;
        }
        .editContent{
            color: rgb(17, 189, 17);
            font-family:'Times New Roman', Times, serif;
            
        }
        .active{
            color: #000;
            font-size:2ch;       
            font-family:'Times New Roman', Times, serif;
        }
        .head1{
            font-size: 40px;
            color: #fff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 900;     
            text-align: center;
        }
        .main1{
            text-align: center;
            padding: 50px;
            margin: 10px 40px;
        }
        .main1 p{
            color: #626262;
        }
        /* about php page css end */
        

        .main2{
            display: grid;
            gap: 30px;
            grid-template-columns: auto auto auto;
            background-image: url("images/maria.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            padding: 10px;
            
        }
        .page1{
            padding: 20px;
            
           
        }
        .page1 img{
            width: 320px;
            height: 250px;
            border-radius: 50px/15px;
            opacity: 1;

        }


        /* product css start*/
        
        .main3{
            /* display: grid;
            gap: 20px;
            grid-template-columns: auto auto auto;
            padding: 10px; */
            
            width: 30%;
            float: left;
            margin: 1%;
        
        }
        .page3{
            padding: 20px;
            border:3px solid greenyellow;
            text-align: center;
            margin: 15px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);

        }

        .main3 img{
            width: 300px;
            height: 250px;
        }
        .hdd{
            text-align: center;

        }
        .hdd h2{
            padding-bottom:10px;
            font-size:larger;
        }
        .btn-secondary
        {
            background-color:#7bed9f;
            padding:2%;
            border: 1px solid grey;
            text-decoration:none;
            border-radius:5px;
            color:black; 
            font-weight:bold; 
            
        }
        .btn-secondary:hover{
            background-color:#2ed573;
        }
        /* product css end */

        /* contact css start */
        
        .editContent{
            color: rgb(17, 189, 17);
            font-family:'Times New Roman', Times, serif;
            
        }
        .active{
            color: #000;
            font-size:2ch;       
            font-family:'Times New Roman', Times, serif;
        }

        .info1{
            display: flex;
            flex-wrap: wrap;
            margin: 50px;
            padding: 10px;
        }
        .info1 a{
            text-decoration: none;
            align-items: center;
            display: flex;
            color: #000;
            margin-right: 30px;
            font-size: 13px;

        }
        .info1 .head11 img{
            width: 20px;
            margin-right: 10px;
        }
        .info1 img{
            width: 30px;
            margin-right: 10px;
        }
        .head11{
            flex: 30%;
        }
        .head12{
            flex: 30%;
        }
        .mail1{
            margin-left: 40px;
            color: #626262;
        }
        .head13{
            flex: 30%;
        }

        .twice-two
        {
            display: flex;
            flex-wrap: wrap;
            margin: 5px;
        }
        .form-control{
            flex: 40%;
            margin: 7px;
            padding: 7px;
        }
        .form-control1{
            width: 95%;
            margin-left: 13px;
            padding: 8px;
            margin-top: 5px;
        }
        .btn{
            background-color: rgb(120, 190, 16);
            color: #fff;
            border-radius: 5px;
            padding: 10px;
            border:none;
            margin: 15px;
        }
        .success{
            margin:5px;
            color:#2ed573;
        }
        .error{
            margin:5px;
            color:#ff4757;
        }


        
        /* contact css end */

        /* order css start */
        
        .container1{
            width: 80%;
            margin: 0 auto;
            padding: 1%;
        }
        .img-responsive{
            width: 100%;
        }
        .img-curve{
            border-radius: 15px;
        }

        .text-right{
            text-align: right;
        }
        .text-center{
            text-align: center;
        }
        .text-left{
            text-align: left;
        }
        .text-white{
            color: white;
        }

        .clearfix{
            clear: both;
            float: none;
        }



        .btn{
            padding: 1%;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .btn-primary{
            background-color: #ff6b81;
            color: white;
            cursor: pointer;
        }
        .btn-primary:hover{
            color: white;
            background-color: #ff4757;
        }
        h2{
            color: #2f3542;
            font-size: 2rem;
            margin-bottom: 2%;
        }
        h3{
            font-size: 1.5rem;
        }
        .float-container{
            position: relative;
        }
        .float-text{
            position: absolute;
            bottom: 50px;
            left: 40%;
        }
        fieldset{
            border: 1px solid white;
            margin: 5%;
            padding: 3%;
            border-radius: 5px;
        }             
        /* CSS for  SEarch Section */

        .food-search{
            background-image: url("images/pexels-amina-filkins-5413724.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 7% 0;
        }

        .food-search input[type="search"]{
            width: 50%;
            padding: 1%;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
        }

        .food-menu-img{
            width: 20%;
            float: left;
        }

        .food-menu-desc{
            width: 70%;
            float: left;
            margin-left: 8%;
        }
        .food-price{
            font-size: 1.2rem;
            margin: 2% 0;
        }
        .food-detail{
            font-size: 1rem;
            color: #747d8c;
        }
        /* for Order Section */
        .order{
            width: 50%;
            margin: 0 auto;
        }
        .input-responsive{
            width: 96%;
            padding: 1%;
            margin-bottom: 3%;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }
        .order-label{
            margin-bottom: 1%; 
            font-weight: bold;
        }
        /* CSS for Categories */
        .categories{
            padding: 4% 0;
        }

        .box-3{
            width: 28%;
            float: left;
            margin: 2%;
        }
        /* order css end */

        /* footer css */
        .footer{
            background-color:#fff;
            width: 100%;
            height: 40px;  
            text-align: center;  
            padding-bottom: 10px;
        }
        .footer p{
            color: #111;
            padding: 20px;

        }
        
        @media (max-width: 700px) {
            .nav {
                display: flex;
                justify-content: center;
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 100;
                transform: translateY(100%);
                transition: transform 250ms cubic-bezier(0.5, 0, 0.5, 1);
                height: 100vh;
            }

            .nav__list {
                list-style: none;
                display: flex;
                height: 100%;
                flex-direction: column;
                justify-content: space-evenly;
                text-align: center;
                margin: 0;
                padding: 135px;
                background-color: #111;
                width: 100%;
            }


            .smalllogo {
                padding: 4.7vh 6vw;
                text-align: center;
                display: flex;
                align-items: center;
                color: #111;
                text-transform: uppercase;
                font-family: "Raleway", sans-serif;
                font-weight: 800;
            }

            .nav-toggle {
                display: block;
                padding: 2.3em;
                background: transparent;
                border: 0;
                cursor: pointer;
                position: absolute;
                right: 1em;
                top: 1em;
                z-index: 1000;
                outline: none;
            }

            .nav__link {
                margin: 0;
                color: #fff;
            }

            .nav-open {
                overflow: hidden;
            }

            .nav-open .nav {
                transform: translateX(0);
                width: 110vw;
            }

            .nav-open .logo {
                display: none;
            }

            .nav-open .hamburger {
                transform: rotate(0.625turn);
                background-color: #fff;
            }

            .nav-open .hamburger::before {
                transform: rotate(90deg) translateX(-6px);
                background-color: #fff;
            }

            .nav-open .hamburger::after {
                opacity: 0;
            }

            .hamburger {
                display: block;
                position: relative;
            }

            .hamburger,
            .hamburger::before,
            .hamburger::after {
                background-color: #111;
                width: 2em;
                height: 3px;
                border-radius: 1em;
                transition: transform 250ms ease-in-out;
            }

            .hamburger::before,
            .hamburger::after {
                content: "";
                position: absolute;
                left: 0;
                right: 0;
            }

            .hamburger::before {
                top: 6px;
            }

            .hamburger::after {
                bottom: 6px;
            }

            .nav__item {
                color: #fff;
            }

            .nav__link::before {
                content: "";
                display: block;
                position: absolute;
                bottom: 3px;
                left: 0;
                height: 3px;
                width: 100%;
                background-color: #fff;
                transform-origin: right top;
                transform: scale(0, 1);
                transition: color 0.1s, transform 0.2s ease-out;
            }

            .nav__link:active::before {
                background-color: #fff;
            }

            .nav__link:hover::before,
            .nav__link:focus::before {
                transform-origin: left top;
                transform: scale(1, 1);
            }
            .method1{
                flex-direction:column;
            }

            .section1{
                display: flex;
                flex-wrap: wrap;
            }
            .head2{
                flex: 100%;
                
            }
            .product{
                flex: 100%;

            }
            .contact{
                flex: 100%;
            }
            .main2{
                display: grid;
                grid-template-columns: auto;
            }
            .main3{
                width: 100%;
                margin: 4% auto;
            }
            .info1{
                flex-direction: column;               
            }
            .head11{
                margin-bottom: 10px;
                margin-left: 7px;
            }
            .head12{
                margin-bottom: 10px;
            }
        }
      
   

    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body id="body">
    <header id="header">
        <div class="smalllogo">
            <img src="images/logo.jpg" alt="logo" width="40px" height="40px">
            <a href="#welcome-section" class="logolink">
                <h3> PNP Formonix Bag's</h3>
            </a>
        </div>
        <button class="nav-toggle">
            <span class="hamburger"></span>
        </button>
        <nav class="nav" id="navbar">
            <div class="logo">
                <img src="images/logo.jpg" alt="logo" width="50px" height="50px">
                <a href="nav.html" id="logo">
                    <h1> PNP Formonix Bag's</h1>
                </a>
            </div>

            <ul class="nav__list" id="navlinkitems">
                <li class="nav__item">
                    <a href="<?php echo SITEURL; ?>index.php" class="nav__link" id="home">Home</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo SITEURL; ?>about.php" class="nav__link" id="about">About</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo SITEURL; ?>products.php" class="nav__link" id="service">Product</a>
                </li>
                <li class="nav__item">
                    <a href="<?php echo SITEURL; ?>gallery.php" class="nav__link" id="work">Gallery</a>
                </li>

                <li class="nav__item">
                    <a href="<?php echo SITEURL; ?>contact.php" class="nav__link" id="contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
