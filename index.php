<?php  
  include('cartback.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Kezabite</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="images/food.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="" name="description" />
    <meta content="Aizo Kini & Kayonga Raul" name="author" />


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
   

    <!-- additional link -->
    <link href="https://fonts.googleapis.com/css2?family=Economica&display=swap" rel="stylesheet">
    <style>
     body{
       font-family: 'Economica', sans-serif;
     }
    </style>
    <!-- additional link -->

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
    <div class="py-1 bg-black top">
      <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
          <div class="col-lg-12 d-block">
            <div class="row d-flex">
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                <span class="text">+250 781 350 065</span>
              </div>
              <div class="col-md pr-4 d-flex topper align-items-center">
                <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                <span class="text">info@kezabite.com</span>
              </div>
              <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                <p class="mb-0 register-link"><span>Order & Delivery Hours:</span> <span>Monday - Sunday</span> <span>10:00AM - 07:00PM</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="./">KEZABITE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index" class="nav-link">Home</a></li>
            <!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> -->
            <li class="nav-item"><a href="menu" class="nav-link">Menu</a></li>
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Stories</a></li> -->
            <!-- <li class="nav-item"><a href="#" class="nav-link">Contact</a></li> -->
            <li class="nav-item">
              <a href="cart" class="nav-link"><i class="ion-ios-basket"></i>
                <span class="qty">
                  <?php
                    if ($i>0) {
                      echo $i; 
                    }
                    else {
                      echo "0";
                    }
                  ?>
                </span>
              </a>
            </li> 
            <li class="nav-item"><a href="admin/index" class="nav-link"><i class="ion-ios-lock"></i></a></li> 
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <!-- sliders -->
    <section class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_7.JPG);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">[Keza | Bite]</span>
              <h1 class="mb-4">Special Orders</h1>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/chicken_wings.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
            <div class="col-md-12 col-sm-12 text-center ftco-animate">
              <span class="subheading">[Keza | Bite]</span>
              <h1 class="mb-4">Where taste meets Appetite</h1>
            </div>

          </div>
        </div>
      </div>
      <div class="slider-item js-fullheight" style="background-image: url(images/jollof_1.jpeg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">
              <div class="col-md-12 col-sm-12 text-center ftco-animate">
                <span class="subheading">[Keza | Bite]</span>
                <h1 class="mb-4">Foreign Dish</h1>
              </div>

            </div>
          </div>
        </div>
    </section>
    <!-- sliders -->

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  

  <!-- animate -->
  <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
  <!-- animate -->
  </body>
</html>
