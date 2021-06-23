<?php
    include('php/connection.php');

    if(isset($_SESSION['user']) == false){

        header('Location: index.php');
    }
    if($_SESSION['user'] == "admin@admin.com"){
        header('Location: admin.php');
   }
    $user = mysqli_query($connection,"SELECT * FROM user WHERE email = '".$_SESSION['user']."'");
   $dataUser = mysqli_fetch_array($user);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>User Home - Divine Beauty</title>
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
                            <li><a href="#welcome">Home</a></li>
                            <li><a href="forhim.php">For Him</a></li>
                            <li><a href="forher.php">For Her</a></li>
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
                                    <a href="#welcome" class="active"><?php 
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
    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title"><?php 
                                    echo $dataUser['name'];?></h2>
                    </div>
                    <div class="left-text">
                        <p> 
                            
                            <strong> Email: <?php 
                                    echo $dataUser['email'];?>
                                </strong>
                                <br>
                                <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>
Reservations in Process</h1>
                            <p>List of reservations made with your state.</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    
               <?php  
                  $ca = mysqli_query($connection,"SELECT * FROM bussines WHERE user = '".$dataUser['email']."' ");
                  $nacc = mysqli_num_rows($ca);

                  if ($nacc > 0) {
                   
                    while ( $date = mysqli_fetch_row($ca)){
                      
                      echo "<div class='col-lg-5 col-md-5 col-sm-6 col-6'>
                        <a href='#' class='mini-box'>
                            <i><img src='assets/images/work-process-item-01.png' alt=''></i>
                            <strong>".$date[1]."</strong>
                            <span>".$date[2]."</span>
                            <span>".$date[4]."</span>
                        </a>
                    </div>";
                    }
                  }else{
                    echo "<div class='full heading_s1' >
                     <h2 style='margin-left: 25%; ''> no <h2> reservations </h2></h2>
                  </div>";
                  }

               ?>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Queries made</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>List of inquiries made.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
               <?php  
                  $ca = mysqli_query($connection,"SELECT * FROM contactus WHERE email = '".$dataUser['email']."' ");
                  $nacc = mysqli_num_rows($ca);

                  if ($nacc > 0) {
                   
                    while ( $date = mysqli_fetch_row($ca)){
                      
                      echo "<div class='col-lg-4 col-md-6 col-sm-12'>
                    <div class='team-item'>
                        <div class='team-content'>
                            <i><img src='assets/images/testimonial-icon.png' alt=''></i>
                            <p>".$date[4]."</p>
                            <div class='user-image'>
                                <img src='http://placehold.it/60x60' alt=''>
                            </div>
                            <div class='team-info'>
                                <h3 class='user-name'>To: </h3>
                                <span>Administrator</span>
                            </div>
                        </div>
                    </div>
                </div>";
                    }
                  }else{
                    echo "<div class='full heading_s1' >
                     <h2 style='margin-left: 25%; ''> no <h2> Queries </h2></h2>
                  </div>";
                  }

               ?>
                
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

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

  </body>
</html>