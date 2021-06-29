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

    <title>To Pay</title>
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
                        <a href="#" class="logo">
                            <img src="assets/images/logo.png" alt="Softy Pinko"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="forhim.php">For Him</a></li>
                            <li><a href="forher.php">For Her</a></li>
                            <li><a href="https://www.instagram.com/divine_beauty_nz/">Gallery</a></li>
                            <li><a href="topay.php" class="active">To Pay</a></li>
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
                        <h2 class="section-title">To Pay</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p> Reservation Complet</p>
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
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                        
                        <div class="row" style="">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                              <fieldset>
                            <label><strong>Reservation </strong> </label>
                              </fieldset>
                        </div>
                    </div>
                        <div class="row" >
                            <div class="col-lg-12 col-md-12 col-sm-12">
                              <fieldset>
                                <select style="border-radius: 5px; padding: 10px; margin-left: 4%;" id="form_type" name="form_type">
                                    <option>MAN-icure(45$) - For Her</option>
                                    <option>Polish Only(17$) - For Him</option>
                                    <option>Shape and Polish(25$) - For Him</option>
                                    <option>Manicure or Pedicure(25$) - For Him</option>
                                </select>
                              </fieldset>
                        </div>
                    </div>
                        <div class="row" style="">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                              <fieldset>
                            <label><strong>Date </strong> </label>
                              </fieldset>
                            </div>
                        </div>
                            <div class="col-lg-8 col-md-8 col-sm-8">
                              <fieldset>
                                <input type="date" name="form_date" id="form_date" 
                                  min="2021-05-27" max="2021-12-10" step="1"/>
                              </fieldset>
                            </div>
                            
                            <div class="col-lg-12" style="margin-left: 10%;">

                              <fieldset>
                                <button type="submit" id="validate_reserve" class="main-button">Reserve</button>
                              </fieldset>
                            </div>
                        </form>

                    </div>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="divinebeautynz@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="service">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<table>
<tr><td><input type="hidden" name="on0" value="Service">Service</td></tr><tr><td><select name="os0">
    <option value="MAN-icure - For Him">MAN-icure - For Him $45.00 USD</option>
    <option value="Polish Only - For Her">Polish Only - For Her $17.00 USD</option>
    <option value="Shape & Polish - For Her">Shape & Polish - For Her $25.00 USD</option>
    <option value="Manicure or Pedicure - For Her">Manicure or Pedicure - For Her $30.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="option_select0" value="MAN-icure - For Him">
<input type="hidden" name="option_amount0" value="45.00">
<input type="hidden" name="option_select1" value="Polish Only - For Her">
<input type="hidden" name="option_amount1" value="17.00">
<input type="hidden" name="option_select2" value="Shape & Polish - For Her">
<input type="hidden" name="option_amount2" value="25.00">
<input type="hidden" name="option_select3" value="Manicure or Pedicure - For Her">
<input type="hidden" name="option_amount3" value="30.00">
<input type="hidden" name="option_index" value="0">
<input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>

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
    <script src="assets/js/validate.js"></script>
    <script src="assets/js/payreserve.js"></script>

  </body>
</html>