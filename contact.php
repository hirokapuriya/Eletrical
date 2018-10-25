<?php 
include_once('controller.php');

if(isset($_POST['register']))
  {  //var_dump($_POST['register']); die('jjjj');
      $name = $_POST['name'];  
      $subject = $_POST['subject'];  
      $phone = $_POST['phone'];  
      $email = $_POST['email'];
      $message = $_POST['message'];

      $reg= new controller;

      $reg->con_register($name,$subject,$phone,$email,$message); 
  }
?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://sbtechnosoft.com/electricshop/contact.html -->
<html lang="en" class="gr__sbtechnosoft_com"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php include("Include/css_inc.php") ?>
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
              </div>
              <div class="col-sm-6">
                <input class="con-field" name="subject" required="" id="subject" placeholder="Subject" type="text">
              </div>
              <div class="col-sm-6">
                <input class="con-field" name="phone" required="" id="phone" placeholder="Phone" type="text">
              </div>
              <div class="col-sm-6">
                <input class="con-field" name="email" required="" id="email" placeholder="Email" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <textarea class="con-field" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                <div class="submit-area">
                 <!--  <button class="btn-one" name="register" >Send Message</button> -->
                      <input class="btn-one" type="submit" name="register" value="Send Message" required="required">
                </div>
              </div>
            </div>
          </form>
        </div>
  </div>
  </div>
  </div>
 <div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198710.35112897935!2d-98.51489117772236!3d38.904562823631146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471865832140" allowfullscreen=""></iframe>
  <script>
  function myMap() {
  var mapProp= {
      center:new google.maps.LatLng(23.031778,72.551332),
      zoom:5,
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }
  </script>

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
      <div class="search-wrapper">
        <div class="col-sm-6">
          <div class="search-inner-text">
            <h3>Want to know about our offers first? <span>Subscribe our newsletter</span></h3>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="footer-search-form">
            <div class="form">
              <input placeholder="Your Email Address" id="exampleInputName" class="form-control first" type="text">
              <input class="bttn" value="Subscribe" type="text">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="intro">
          <div class="flogo"><img src="images/footer-logo.png" alt=""></div>
          <p class="intro-content">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="extralinks">
          <h4 class="title">Information</h4>
          <div class="extralinks-cols">
            <ul class="extralinks-col">
              <li> <a href="javascript:void(0)">Customer Service</a> </li>
              <li> <a href="javascript:void(0)">Privacy Policy</a> </li>
              <li> <a href="javascript:void(0)">Site Map</a> </li>
              <li> <a href="javascript:void(0)">Advanced Search</a></li>
              <li> <a href="javascript:void(0)">Orders and Returns</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="extralinks">
          <h4 class="title">Usefull Links</h4>
          <div class="extralinks-cols">
            <ul class="extralinks-col">
              <li> <a href="javascript:void(0)">About Us</a> </li>
              <li> <a href="javascript:void(0)">Services</a> </li>
              <li> <a href="javascript:void(0)">Blog</a> </li>
              <li> <a href="javascript:void(0)">Gallery</a></li>
              <li> <a href="javascript:void(0)">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="address">
          <h4 class="title">Contact Us</h4>
          <div class="extralinks-cols">
            <ul class="extralinks-col">
              <li> <span class="fcontact-icon fa fa-clock-o"></span> Mon - Sat 9:00 a.m. - 6:00 p.m. <br>
                Sunday Closed </li>
              <li><span class="fcontact-icon fa fa-map-marker"></span>11th Floor, 645 Hudson Street, NY 10018 USA</li>
              <li><span class="fcontact-icon fa fa-phone"></span>012 345 6789</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
	<div class="footer-cta-wrapper">
	<div class="row">
      <div class="col-sm-9">
	    <img src="images/footer-cta-icon.png" alt="">
        <h3>Do you need any help for electrical maintenance?</h3>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      <div class="col-sm-3"> <a href="javascript:void(0)" class="pull-right">Get A Quote</a> </div>
    </div>
	</div>
  </div>
</footer>
<!-- Footer Wrapper End --> 
<!-- Copyright Wrapper End -->
<div class="copyright-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <p>© Copyright <span id="year">2018</span>, ElectricalShop | All Rights Reserved.</p>
      </div>
      <div class="col-sm-5">
        <ul class="footer-social-icons">
          <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>
          <li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
          <li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Copyright Wrapper End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="images/jquery-3.1.1.min.js"></script> 
<script src="images/plugins.js"></script> 
<script src="images/slicknav.min.js"></script> 
<script src="images/bootstrap.min.js"></script> 
<script src="images/jquery.animateNumber.min.js"></script> 
<script src="images/owl.carousel.js"></script> 
<script src="images/wow.min.js"></script> 
<script src="images/slider.js"></script> 
<script src="images/custom.js"></script>

<a id="scrollUp" href="http://sbtechnosoft.com/electricshop/contact.html#top" style="position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a></body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>