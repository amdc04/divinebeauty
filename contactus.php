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

    <title>Contact us</title>
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
                            <li><a href="forhim.php">For Him</a></li>
                            <li><a href="forher.php">For Her</a></li>
                            <li><a href="contactus.php" class="active">Contact Us</a></li>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Contact Us</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>We'd love to hear from you!</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">LOCATION</h5>
                    <div class="contact-text">
                        <p>12A Main North Rd, Papanui, Christchurch
                        03 352 9789 | 027 914 5999
                        <br></p>
                        <h5 class="margin-bottom-30">OPENING HOURS</h5>
                        <p> <strong> Monday & Wednesday </strong>: 9:00 am to 6:00 pm

                            <strong> Tuesday & Thursday </strong>: 9:00 am to 7:00 pm

                            <strong> Friday & Saturday </strong>: 9:00 am to 6:00 pm

                            <strong> Sunday </strong>: Closed</p>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="form_name" type="text" class="form-control" id="form_name" placeholder="Full Name">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="form_email" type="email" class="form-control" id="form_email" placeholder="E-Mail Address" >
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="form_phone" type="text" class="form-control" id="form_phone" placeholder="Phone" >
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="form_subject" type="text" class="form-control" id="form_subject" placeholder="Subject" >
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="form_message" rows="6" class="form-control" id="form_message" placeholder="Your Message" ></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    
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
                    <p class="copyright">Copyright &copy; Divine - Beauty © 2021. All right reserved.</p>
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
    <script src="assets/js/validate.js"></script>

  </body>
</html>