<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Title-->
    <title>Lanaya</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/favicon.ico">
    <!--Custom css-->
    <link rel="stylesheet" href="/lanaya/style/css/main.css">
</head>
<body>
<!-- Main navigation -->
        <!--Navbar-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
            <div class="container">
                <div class="center">
                    <a class="navbar-brand" href="/lanaya">
                        <strong><span id="logospan">LANAYA</span> Gaming</strong>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav">
                            <li class="nav-item animated zoomIn">
                                <a class="nav-link" href="/lanaya"></i>Home</a>
                            </li>
                            <li class="nav-item animated zoomIn">
                                <a class="nav-link" href="/lanaya/shop"></i>Shop</a>
                            </li>
                            <?php
                                if($auth)
                                    {
                            ?>
                                <li class="nav-item animated zoomIn">
                                    <a class="nav-link" href="/lanaya/profile/<?php echo $auth ?>"></i>Profile</a>
                                </li>
                            <?php
                                    }
                            ?>
                            <li class="nav-item animated zoomIn">
                                <a class="nav-link" href="/lanaya/contact"></i>Contact</a>
                            </li>
                            <?php
                                if($auth)
                                    {
                            ?>
                            <li class="nav-item animated zoomIn">
                                <a class="nav-link" href="/lanaya/user/logout"></i>Logout</a>
                            </li>
                            <?php
                                    }
                            ?>
                            <?php
                                if(!$auth)
                                    {
                            ?>
                            <li class="nav-item animated zoomIn">
                                <a class="nav-link" href="/lanaya/user/login"></i></i>Login</a>
                            </li>
                            <?php
                                    }
                            ?>
                            <li>
                                
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    <!-- Main navigation -->

    <span onclick="openDiv()"><i class="fas fa-cart-plus animated bounceIn" id="btnspan"></i></span>
 
    <a href="javascript:void(0)" id="clobtn" onclick="closeDiv();"><i class="fas fa-times animated zoomIn" id="times"></i></a>
    <a href="javascript:void(0)" id="deletebtn" onclick="clearBookmarks();"><i class="fas fa-trash-alt animated lightSpeedIn" id="delete"></i></a>

    <div id="mySidediv" class="sidediv side-nav bookmarks"><button class="btn btn-dark"></button></div>
    
