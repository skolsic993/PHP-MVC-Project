<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Title-->
    <title>Lanaya</title>
    <!--Jquery-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <!--ParticleJs-->
    <!--Custom css-->
    <link rel="stylesheet" href="/lanaya/style/css/main.css">
</head>
<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg" id="navbarNav">
        <!--Nav brand-->
        <a class="navbar-brand" href="/lanaya"><img src="/lanaya/style/img/logo.png" alt="Logo"></a>
        <!--Button for mobile version-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <!--Nav items-->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/lanaya"><i class="fa fa-home place animated fadeIn"></i>HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/lanaya/shop"><i class="fas fa-shopping-cart place animated fadeIn"></i>SHOP</a>
                </li>
                <?php
                    if($auth)
                        {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/lanaya/profile/<?php echo $auth ?>"><i class="fas fa-user place animated fadeIn"></i>PROFILE</a>
                    </li>
                <?php
                        }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/lanaya/contact"><i class="fas fa-phone place animated fadeIn"></i>CONTACT</a>
                </li>
                <?php
                    if($auth)
                        {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/lanaya/user/logout"><i class="fas fa-sign-out-alt place animated fadeIn"></i>LOGOUT</a>
                </li>
                <?php
                        }
                ?>
                <?php
                    if(!$auth)
                        {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/lanaya/user/login"><i class="fas fa-sign-in-alt place animated fadeIn"></i></i>LOGIN</a>
                </li>
                <?php
                        }
                ?>
                <li>
                  <span onclick="openDiv()"><i class="fas fa-cart-plus animated fadeInUp" id="btnspan"></i></span>

                  <a href="javascript:void(0)" id="clobtn" onclick="closeDiv();"><i class="fas fa-times animated zoomIn" id="times"></i></a>
                  <a href="javascript:void(0)" id="deletebtn" onclick="clearBookmarks();"><i class="fas fa-trash-alt animated lightSpeedIn" id="delete"></i></a>
                </li>
            </ul>
        </div>



    </nav>

    <div id="mySidediv" class="sidediv bookmarks"><button class="btn btn-dark">Clear Card</button></div>
