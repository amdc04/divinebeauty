<?php
    include('php/connection.php');

    if(isset($_SESSION['user']) == true){

      if( $_SESSION['user'] == "admin")
         header('Location: admin.php');
      else
         header('Location: user.php');
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

    <title>Divine - BRAUTY</title>
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
                            <li><a href="#welcome" class="active">Home</a></li>
                            <li><a href="forhim.php">For Him</a></li>
                            <li><a href="forher.php">For Her</a></li>
                            <li><a href="https://www.instagram.com/divine_beauty_nz/">Gallery</a></li>
                            <li><a href="contactus.php">Contact Us</a></li>
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

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong>63</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                                        
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
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
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="assets/images/blog-item-01.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">Classic Manicure or Pedicure</a>
                            </h3>
                            <div class="text">
                            More than just a perfect coat of polish confidence at your finger tips here to  nail the day.
                            </div>
                            <a href="forher.php" class="main-button">For Her</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                            <img src="assets/images/blog-item-03.png" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="#">MAN-icure</a>
                            </h3>
                            <div class="text">
                                For immaculate hands that make a good impression, present a more professional image.
                            </div>
                            <a href="forhim.php" class="main-button">For Him</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** login  Start ***** -->
    <section class="section colored" id="login">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Login</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Login to access the client system</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** loging Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30">Register</h5>
                    <div class="contact-text">
                        <p>If you are not yet a customer, register for free
                        <br><br> <a href="#register" class="main-button">Register</a></p>
                        
                    </div>
                </div>
                <!-- ***** login Text End ***** -->

                <!-- ***** login Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                          
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="emaill" placeholder="E-Mail Address" >
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="passw" type="password" class="form-control" id="passwl" placeholder="Password" >
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="validate_login" class="main-button">Login</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** login Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** login End ***** -->
    
    <!-- ***** register Start ***** -->
    <section class="section colored" id="register">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Register</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Register to access the client system</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                
                <!-- ***** register Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="tetx" class="form-control" id="name" placeholder="Name" >
                              </fieldset>
                            </div>
                           
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" >
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="passw" type="password" class="form-control" id="passw" placeholder="Password">
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="validate_register" class="main-button">Register</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** register Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** register End ***** -->
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
    <script src="assets/js/login.js"></script>
    <script src="assets/js/register.js"></script>
      

  </body>
</html>