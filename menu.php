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
        <a class="navbar-brand" href="">KEZABITE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index" class="nav-link">Home</a></li>
            <!-- <li class="nav-item"><a href="about" class="nav-link">About</a></li> -->
            <li class="nav-item active"><a href="#ftco-section" class="nav-link">Menu</a></li>
            <!-- <li class="nav-item"><a href="blog" class="nav-link">Stories</a></li> -->
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


    <section class="ftco-section" id="ftco-section">
      <div class="container">
        <div class="ftco-search">
          <div class="row">
            <!-- Menu Tab -->
            <div class="col-md-6 col-md-12 offset-none nav-link-wrap">
              <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link ftco-animate active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-1" aria-selected="true">All</a>

                <?php 
                  $getcats = $con ->query("SELECT * FROM categories WHERE categoryStatus='on'");
                  while ($cat = mysqli_fetch_array($getcats)) {
                    ?>
                      <a class="nav-link ftco-animate" id="v-pills-<?php echo $cat['categoryId'] ?>-tab" data-toggle="pill" href="#v-pills-<?php echo $cat['categoryId'] ?>" role="tab" aria-controls="v-pills-<?php echo $cat['categoryId'] ?>" aria-selected="false"><?php echo $cat['categoryTitle'] ?></a>
                    <?php
                  }
                ?>

              </div>
            </div>
            <div class="col-md-12 tab-wrap">
              
                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="day-1-tab">
                      <div class="row no-gutters d-flex align-items-stretch">
                        <?php
                            $sqlFetchItems = $con ->query("SELECT * FROM items WHERE itemStatus='on' ORDER BY itemId DESC");
                            while ($row = mysqli_fetch_array($sqlFetchItems)) {
                              $takaway = $row['itemPrice']>=5000?500:300;
                              ?>
                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="margin-bottom: 5px">
                                  <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                    <div class="menu-img img" style="background-image: url(images/items/<?php echo $row['itemImage'] ?>);"></div>
                                    <div class="text d-flex align-items-center">
                                      <div>
                                        <div class="d-flex">
                                          <div class="one-half">
                                            <h3><?php echo $row['itemTitle'] ?></h3>
                                          </div>
                                          <div class="one-forth">
                                            <span class="price"><?php echo number_format($row['itemPrice']) ?> Rwf</span>
                                          </div>
                                        </div>
                                        <p><?php echo $row['itemDescription'] ?></p>
                                        <span class="badge badge-info">Take away: <?php echo number_format($takaway) ?> Rwf</span>
                                        <p><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#order<?php echo $row['itemId'] ?>">Order now</a></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <?php
                            }
                        ?>
                      </div>
                    </div>
    
                    <?php 
                      $getcats = $con ->query("SELECT * FROM categories WHERE categoryStatus='on'");
                      while ($cat = mysqli_fetch_array($getcats)) {
                        ?>
                          <div class="tab-pane fade" id="v-pills-<?php echo $cat['categoryId'] ?>" role="tabpanel" aria-labelledby="v-pills-day-<?php echo $cat['categoryId'] ?>-tab">
                            <div class="row no-gutters d-flex align-items-stretch">
                              <?php
                                  $sqlFetchItems = $con ->query("SELECT * FROM items WHERE itemStatus='on' AND itemCategory='$cat[categoryId]' ORDER BY itemId DESC");
                                  while ($row = mysqli_fetch_array($sqlFetchItems)) {
                                    $takaway = $row['itemPrice']>=5000?500:300;
                                    ?>
                                      <div class="col-md-12 col-lg-6 d-flex align-self-stretch" style="margin-bottom: 5px">
                                        <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                          <div class="menu-img img" style="background-image: url(images/items/<?php echo $row['itemImage'] ?>);"></div>
                                          <div class="text d-flex align-items-center">
                                            <div>
                                              <div class="d-flex">
                                                <div class="one-half">
                                                  <h3><?php echo $row['itemTitle'] ?></h3>
                                                </div>
                                                <div class="one-forth">
                                                  <span class="price"><?php echo number_format($row['itemPrice']) ?> rwf</span>
                                                </div>
                                              </div>
                                              <p><?php echo $row['itemDescription'] ?></p>
                                              <span class="badge badge-info">Take away: <?php echo number_format($takaway) ?> Rwf</span>
                                              <p><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#order<?php echo $row['itemId'] ?>">Order now</a></p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <?php
                                  }
                              ?>
                            </div>
                          </div>
                        
                        <?php
                      }
                    ?>

                  </div>
                </div>
            <!-- Menu Tab -->
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
  
    <?php
        $sqlFetchItems = $con ->query("SELECT * FROM `items` INNER JOIN `categories` ON `items`.`itemCategory`=`categories`.`categoryId` ORDER BY rand()");
        while ($row = mysqli_fetch_array($sqlFetchItems)) {
          ?>
            <!-- Modal -->
            <div class="modal fade" id="order<?php echo $row['itemId'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        
                    <!-- Ordering form -->
                    <form id="orderDetails<?php echo $row['itemId'] ?>" action="cart" method="post">
                      <div class="card">
                        <img class="card-img-top" src="images/items/<?php echo $row['itemImage'] ?>" alt="Card image cap">
                        <div class="col-md-12">
                          <!-- Booking form area -->
                          <div class="booking-form">
                            <table border="0" width="80%" class="table table-striped table-hover img-center" style="border-color: grey;">
                              <tbody>
                                <tr>
                                  <td colspan="2">
                                    <h3 class="product-name product-name-product"><?php echo $row['itemTitle'] ?></h3>
                                    <span><?php echo $row['itemDescription'] ?></span>
                                  </td>
                                </tr>
                                  <tr>
                                    <td><label>Price</label></td>
                                    <td>
                                     <b><?php echo $row['itemPrice']; ?> frw</b>                     
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><label>Delivery Time &nbsp;<i class="ion-ios-clock"></i></label></td>
                                    <td><?php echo $row['deliveryTime']; ?> min</td>
                                  </tr>
                                  <tr>
                                    <td><label>Enter Quantity</label></td>
                                    <td>
                                      <div class="form-group">
                                      <input hidden type="number" id="pid" name="pid" value="<?php echo $row['itemId'] ?>" style="width: 50px;">
                                      <input autofocus="" required="" type="number" id="qty" name="qty" value="1" style="width: 50px;" min="1">
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <a href="javascript:;" data-dismiss="modal" class="btn btn-danger btn-sm">Cancel</a>
                    <input onclick="document.getElementById('orderDetails<?php echo $row['itemId'] ?>').submit()" name="button" id="button" value="Add To Cart" type="submit" class="btn btn-success btn-sm" readonly>
                  </div>
                </div>
              </div>
            </div>
          <?php
        }
    ?>

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

