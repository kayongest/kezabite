<?php
  include('cartback.php');
  include('db.php');
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
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <style type="text/css">
      .custombtn {
        border-radius: 20px
      }
    </style>
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
                <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="">KEZABITE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
            <!-- <li class="nav-item"><a href="about" class="nav-link">About</a></li> -->
            <li class="nav-item"><a href="menu" class="nav-link">Menu</a></li>
            <!-- <li class="nav-item"><a href="blog" class="nav-link">Stories</a></li> -->
            <!-- <li class="nav-item"><a href="#" class="nav-link">Contact</a></li> -->
            <li class="nav-item active">
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
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_7.JPG');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Specialties</h1>
            <span class="mr-2"><a href="index" style="color:#fff;">Home</a></span>
          </div>
        </div>
      </div>
    </section>


    <section style="padding: 10px" id="ftco-section">
      <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div style="border: 1px solid grey;border-radius: 3px;padding: 10px">
                <form method="post">
                  <h5 class="h6">Client Information</h5>
                  <div class="form-group">
                    <label class="label">Your Names</label>
                    <input type="text" name="clientnames" placeholder="Eg: Aizo Kini" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="label">Telephone</label>
                    <input type="text" name="clientnames" placeholder="Eg: 250789754425" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="label">Address</label>
                    <input type="text" name="shippingaddress" placeholder="Eg: Kimironko" class="form-control">
                  </div>
                  <h6>Billing Information</h6>
                  <div style="display: flex;justify-content: space-around;">
                    <img id="mtnpaymentimg" src="images/payment/mtn_payment.png" style="position: relative;width: 33%;cursor: pointer;">
                    <img id="airtelpaymentimg" src="images/payment/airtel_payment1.png" style="position: relative;width: 33%;cursor: pointer;">
                    <img id="cardspaymentimg" src="images/payment/visamaster.png" style="position: relative;width: 33%;cursor: pointer;">
                  </div>
                  <div id="mtnpaymentdiv">
                    <div class="form-group">
                      <label class="label">Payment Phone</label>
                      <input type="text" id="mtnpaynumber" name="mtnpaynumber" value="25078" class="form-control">
                    </div>
                    <a href="javascript:;" class="btn custombtn full-width bg-orange font-weight-bolder text-white">PAY <?php echo number_format($cartTotal)?> RWF</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-8">
              <div class="table-responsive">
                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Total Price</th>
                      <th>Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      echo $cartOutput;
                    ?>
                    <tr>
                      <th class="h6 text-orange font-weight-bolder">Total</th>
                      <th></th>
                      <th></th>
                      <th class="h6 text-orange font-weight-bolder"><?php echo ''.number_format($cartTotal).''?> Frw</th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div>
                <div style="float: left;">
                  <a href="javascript:;" type="button" class="btn btn-warning">Empty Cart</a>
                </div>
                <div style="float: right;">
                  <a href="menu" type="button" class="btn bg-orange text-white">Continue Order</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
    
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Kezabite</h2>
              <marquee scrolldelay="250" direction="left"><p>Taste meets APPETITE.</p></marquee>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/kezabite/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex">
                  <span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span>
                </li>
                
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Instagram</h2>
                  <div class="thumb d-xs-flex">
                  <a href="https://www.instagram.com/p/B-uiE7YpU3q/" class="thumb-menu img" style="background-image: url(images/social/kb1.jpg);">
                  </a>
                  <a href="https://www.instagram.com/p/B-wo_tKJGYI/" class="thumb-menu img" style="background-image: url(images/social/kb3.jpg);">
                  </a>
                  <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
                  </a>
                </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Comments</h2>
              <p>Your comments and reviews are highly appreciated.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Send" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Kezabite</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
          </div>
        </div>
      </div>
    </footer>
  

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>