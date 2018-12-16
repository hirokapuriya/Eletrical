<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);  
include_once('controller.php');

if(isset($_POST['register']))
  {  
      $name = $_POST['name'];  
      $phone = $_POST['phone'];  
      $email = $_POST['email'];
      $message = $_POST['message'];

      $reg= new controller;

      $result_contact = $reg->con_register($name,$phone,$email,$message); ?>
      <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
      <script type="text/javascript">
         $(document).ready(function () {
          $("#flash-msg").css("display", "block");
            $("#flash-msg").delay(3000).fadeOut("slow");
          });
      </script>
<?php 
  }
?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://sbtechnosoft.com/electricshop/contact.html -->
<html lang="en" class="gr__sbtechnosoft_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php include("Include/css_inc.php") ?>
  <script src="js/jquery-3.1.1.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/slicknav.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.animateNumber.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/slider.js"></script> 
<script src="js/custom.js"></script>
</head>
<body data-gr-c-s-loaded="true">
<!-- Pre Loader -->
<div id="dvLoading" style="display: none;"></div>
<!-- Header Start -->
<header class="wow fadeInDown animated affix-top" data-offset-top="197" data-spy="affix" style="visibility: visible;">
  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="row">
        <?php include("Include/include_bookonline.php") ?>
      </div>
    </div>
  </div>
  <div class="header-inner">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="logo"> 
            <a href="index.php"><img src="images/logo.png" alt="#" data-popupalt-original-title="null" title="#"></a> 
          </div>
            <?php Include("Include/include_mobile_menu.php") ?>
        </div>
        <div class="col-lg-9 col-md-9">
          <nav class="navbar navbar-default desktop">
            <div class="navbar-collapse"> 
              <?php 
                include("Include/menu_bar.php");
              ?>
              <!-- End Main Menu --> 
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header End --> 
<!-- Breadcromb Wrapper Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="breadcromb-left">
          <h3>Contact</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="http://sbtechnosoft.com/electricshop/index.html"><i class="fa fa-home"></i>Home</a></li>
      <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
      <li>Contact</li>
    </ul>
  </div>
</div>
<!-- Breadcromb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper contact-wrapper">
  <div class="container">
  <div class="title">
      <h2>Send a Message</h2>
      <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span> </div>
  <div class="row">
  <div class="col-sm-8 col-sm-offset-2 col-xs-offset-0">
      <div class="contact-form">
          <form method="post" id="contact-form">
            <div class="row">
              <div class="col-sm-6">
                <input class="con-field" name="name" id="name" required="" placeholder="Name" type="text">
                <span id="error_name" style="display:none;color:#003769;">Wrong Name</span>
              </div>
              <div class="col-sm-6">
                <input class="con-field" name="phone" required="" id="phone" maxlength="10" placeholder="Phone" type="text">
                <span id="phonealert" style="color: #003769;"></span>
              </div>
              <div class="col-sm-12">
                <input class="con-field" name="email" required="" id="email_address" placeholder="Email" type="email"><span id="error_email" style="display:none;color:#003769;">Wrong Email</span>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                <div class="submit-area">
                    <input class="btn-one" type="submit" name="register" value="Send Message" required="required">
                </div>
              </div>
            </div>
            <div class="alert alert-success fade in" id="flash-msg" style="display: none;">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> Your message has been sent successfully.
            </div>
          </form>
        </div>
  </div>
  </div>
  </div>
 <div class="google-map">
  <div id="googleMap" style="width:100%;height:600px;"></div>

    <script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(22.439837,70.065917),
        zoom:5,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>
    <!-- AIzaSyBbW71MpJYIKWwyK6mLu7gNxyYzOUiq9mE || AIzaSyA53OIySRO-_Thzi0ohhhRPKKQfRG13A-Q -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA53OIySRO-_Thzi0ohhhRPKKQfRG13A-Q&callback=myMap"></script>
    
<!--   <iframe src="https://www.google.com/maps/embed?pb=AIzaSyA53OIySRO-_Thzi0ohhhRPKKQfRG13A-Q" allowfullscreen=""></iframe>
  <script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(22.439837,70.065917),
      zoom:5,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script> -->

  <div class="contact-info-main">
  <div class="container">
  <div class="contact-info">
  <div class="title">
      <h2>Contact Info</h2>
    <span class="border"></span>
  </div>
  <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="contact-box border"> <img src="images/phone-icon.png" alt="">
          <h3>Phone</h3>
          <p>(800) 123 45 69 or  (012) 123 45 69</p>
        </div>
        <div class="contact-box"> <img src="images/email-icon.png" alt="">
          <h3>Email</h3>
          <p><a href="mailto:info@sbtechnosoft.com">info@sbtechnosoft.com</a></p>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-6 hidden-sm hidden-xs">
        <div class="contact-box-img"> <img src="images/contact-us-icon.png" alt=""> </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="contact-box border"> <img src="images/fax-icon.png" alt="">
          <h3>Fax</h3>
          <p>(600) 123 4569 or (012) 123 45 69</p>
        </div>
        <div class="contact-box"> <img src="images/map-icon.png" alt="">
          <h3>Address</h3>
          <p>PO Box 97845 Baker st. 567, <br>Los Angeles, California, US.</p>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div> 
</div>
<!-- Inner Page Wrapper End --> 
<!-- Footer Wrapper Start -->
<footer class="footer-wrapper">
  <div class="container">
    <div class="row">
      <?php include("Include/include_subscribe.php") ?>
    </div>
    <div class="row">
      <?php include("Include/include_footer_link.php") ?>
    </div>
  <div class="footer-cta-wrapper">
    <div class="row">
        <?php include("Include/include_help_maintanance.php") ?>
    </div>
    </div>
  </div>
</footer>
<!-- Footer Wrapper End --> 
<!-- Copyright Wrapper End -->
<div class="copyright-wrapper">
  <div class="container">
    <div class="row">
      <?php include("Include/Include_footer_social.php") ?>
    </div>
  </div>
</div>
<!-- Copyright Wrapper End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.1.1.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/slicknav.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.animateNumber.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/wow.min.js"></script> 
<script src="js/slider.js"></script> 
<script src="js/custom.js"></script>
<?php include("Include/validation.php") ?>
<a id="scrollUp" href="http://sbtechnosoft.com/electricshop/#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a></body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>