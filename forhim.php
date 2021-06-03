<?php
    include('php/connection.php');

    if(isset($_SESSION['user']) == true){

    
        $user = mysqli_query($connection,"SELECT * FROM user WHERE email = '".$_SESSION['user']."'");
       $dataUser = mysqli_fetch_array($user);
   }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>For-Him, Divine - BRAUTY</title>
<!--

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo"></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="forhim.php"  class="active">For Him</a></li>
                            <li><a href="forher.php" >For Her</a></li>
                            <li><a href="https://www.instagram.com/divine_beauty_nz/">Gallery</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
                            <?php if(isset($_SESSION['user']) == true){ ?>
                                <li>
                                    <a href="topay.php">To Pay</a>

                                </li>
                                 <?php
                              }
                                 ?>
                            <?php if(isset($_SESSION['user']) == true){ ?>
                                <li>
                                    <a href="user.php" class="active"><?php 
                                    echo $dataUser['name'];?></a>

                                </li>
                                 <?php
                              }
                                 ?>
                                 <?php if(isset($_SESSION['user']) == true){ ?>
                                <li>
                                    <a href="php/out.php" class="active">Sign out</a>

                                </li>
                                 <?php
                              }
                                 ?>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1>We believe in inner <strong> BEAUTY </strong> but do what you can on the outside. </h1>
                        <p> We believe the customer is always right, but you have to tell us what you are right about. <strong> COMMUNICATE </strong> We believe in <strong> CLEANLINESS </strong> and hygiene, but also clean minds that hold kindness and positive for ourselves. We believe in <strong> CARE </strong> for other, but it all starts with the care we had given to ourselves first.</p>
                        <a href="#login" class="main-button-slider">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
    
    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">OUR SPECIAL SERVICES</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>DIVINE is where beauty, culture, and wellness meet. We Believe that you deserve the healthiest ingredients to enhance your beauty as well as the best care to enhance your wellness.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title">MAN-icure
</h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="currency">$</span>
                                <span class="price">45</span>
                                <span class="period">30 Minutes</span>
                            </div>
                            <ul class="list">
                                <li class="active">For immaculate hands that make a good impression, present a more professional image with well-manicured nails and hands that are a pleasure to shake. This classic manicure delivers complete hand, nails and cuticle maintenance.</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="topay.php" class="main-button">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/divine_beauty_forever/?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; Divine - Brauty © 2021. All right reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>