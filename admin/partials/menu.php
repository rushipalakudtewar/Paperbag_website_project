<?php 
    include('../config/constants.php'); 
    include('login-check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Paper-bag Website Home page</title>
</head>
    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header1{
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
        /* header starts */
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
        /*main content starts */
        .main-content{
            background-color: #f1f2f6;
            padding:3% 0;
            /* overflow-x:hidden; */
        }
        .wrapper{
            padding:1%;
            width: 80%;
            margin: 0 auto;
        }
                   
        /* CSS for Categories */
        .products{
            padding: 4% 0;
            background-color:#443322;
        }

        .box-3{
            width: 28%;
            float: left;
            margin: 2%;
        }
        .float-container{
            position: relative;
        }
        .float-text{
            position: absolute;
            top: 100px;
            left: 40%;
        }


        .col-4{
            width:20%;
            background-color:white;
            margin:1%;
            padding:2%;
            float:left;
        }
        .text-center{
            text-align:center;
        }
        .clearfix{
            float:none;
            clear: both;
        }
     


        /* admin update delete buttons */
        .btn-primary
        {
            background-color:#1f90ff;
            padding:1%;
            text-decoration:none;
            color:white; 
            font-weight:bold; 
        }
        .btn-primary:hover{
            background-color:#3742fa;
        }
        .btn-secondary
        {
            background-color:#7bed9f;
            padding:1%;
            text-decoration:none;
            color:black; 
            font-weight:bold; 
        }
        .btn-secondary:hover{
            background-color:#2ed573;
        }
        .btn-danger
        {
            background-color:#ff6b81;
            padding:1%;
            text-decoration:none;
            color:white; 
            font-weight:bold; 
        }
        .btn-danger:hover{
            background-color:#ff4757;
        }
        .success{
            color:#2ed573;
        }
        .error{
            color:#ff4757;
        }

       /* Table admin page css */
        .tbl-full{
            width:100%;
        }
        table tr th{
            border-bottom:1px solid black;
            padding:1%;
            text-align:left;
        }
        table tr td{
            padding:1%;
        }
        .tbl-30{
            width:30%;
        }


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
                width: 100vw;
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
            .categories{
                padding: 20% 0;
            }
            h2{
                margin-bottom: 10%;
            }
            .box-3{
                width: 100%;
                margin: 4% auto;
            }
        }

    </style>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>

<body id="body">

    <!-- header footer starts-->
    <div id="#header" class="header1"> 
        <div class="smalllogo">
            <img src="../images/logo.jpg" alt="logo" width="40px" height="40px">
            <a href="#welcome-section" class="logolink">
                <h2> PNP Formonix Bag's</h2>
            </a>
        </div>
        <button class="nav-toggle">
            <span class="hamburger"></span>
        </button>
        <nav class="nav" id="navbar">
            <div class="logo">
                <img src="../images/logo.jpg" alt="logo" width="50px" height="50px">
                <a href="nav.html" id="logo">
                    <h1> PNP Formonix Bag's</h1>
                </a>
            </div>

            <ul class="nav__list" id="navlinkitems">
                <li class="nav__item">
                    <a href="index.php" class="nav__link" id="home">Home</a>
                </li>
                <li class="nav__item">
                    <a href="manage-admin.php" class="nav__link" id="admin">Admin</a>
                </li>
                <li class="nav__item">
                    <a href="manage-product.php" class="nav__link" id="service">Product</a>
                </li>
                <li class="nav__item">
                    <a href="manage-gallery.php" class="nav__link" id="work">Gallery</a>
                </li>
                <li class="nav__item">
                    <a href="manage-order.php" class="nav__link" id="work">Order</a>
                </li>
                <li class="nav__item">
                    <a href="manage-contact.php" class="nav__link" id="contact">Contact</a>
                </li>
                <li class="nav__item">
                    <a href="logout.php" class="nav__link" id="contact">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- header section ends-->
