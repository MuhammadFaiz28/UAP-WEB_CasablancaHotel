<?php
require 'function.php';

$hotel = query("SELECT * FROM customer");


?>

<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.6.8, mobirise.com">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Template">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="CH.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>CH Hotel</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
    <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a>
                            <img src="CH.png" alt="Mobirise Website Builder" style="height: 3.8rem;">
                        </a>
                    </span>
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-white text-primary display-7" href="index.php">Casablanca Hotel</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="rservice.php">Room Service</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="checkin.php">My Order</a></li>
                    <li class="nav-item"><a class="nav-link link text-white display-4" href="logout.php">Logout</a></li>     
                </div>
            </div>
        </nav>
    
    </section>
    <section>
        <div class="card ms-5 mt-4" style="width: 40rem;">
          <div class="card-body ms-5">

            <h3 class="mbr-section-title mbr-fonts-style m-0 display-2 ms-3 mb-4"><strong>Rincian Reservasi</strong></h3>
            <p class="card-text">
            <form action="" method="post">
            <table class="table table-light">
    <thead>
        <th>Tipe Kamar</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th>Harga Total</th>
    </thead>
    <?php foreach( $hotel as $row) :  {?>
    <tbody>
        <tr>
            <td><?= $row["tipe"]; ?></td>
            <td><?= $row["cin"]; ?></td>
            <td><?= $row["cout"]; ?></td>
            <td><?= $row["total tagihan"]; ?></td>
        </tr>
    </tbody>
    <?php 
        }
endforeach; ?>
    </table> 
                <br>
                <a class="btn btn-dark btn-lg" href="checkin.php">Lakukan Check-in</a>
            </form>
            </p>
          </div>
        </div>
        </section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<section data-bs-version="5.1" class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
 
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7"><br>Jl. Asia Afrika Senayan Jakarta 10270
                <br>info.jakarta@venushotel.com</p>
            </div>
        </div>
    </div>
</section><section class="display-7" style="padding: 0;align-items: center;justify-content: center;flex-wrap: wrap;    align-content: center;display: flex;position: relative;height: 4rem;"><a href="https://mobiri.se/" style="flex: 1 1;height: 4rem;position: absolute;width: 100%;z-index: 1;"><img alt="" style="height: 4rem;" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></a><p style="margin: 0;text-align: center;" class="display-7">@ &#8204;</p><a style="z-index:1" href="https://mobirise.com/html-builder.html">Reservasi Hotel Venus</a></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/embla/embla.min.js"></script>  <script src="assets/embla/script.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  
  
  
</body>
</html>