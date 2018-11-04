<?php
  include('controller.php');
?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://sbtechnosoft.com/electricshop/gallery.html -->
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
          <h3>Gallery</h3>
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
      <li>Pages</li>
      <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
      <li>Gallery</li>
    </ul>
  </div>
</div>
<!-- Breadcromb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<section class="news-wrapper">
  <div class="container">
    <div class="title">
      <h2>Gallery</h2>
      <span class="title-border-color"><i class="fa fa-bolt" aria-hidden="true"></i></span> 
    </div>
    <div class="row">
      <?php
          $get_img_view = new controller;
          $get_img_get_ctrl = $get_img_view->get_image_ctrl();
      while ($get_image_row = mysqli_fetch_assoc($get_img_get_ctrl)) 
      {?>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="news-section-single">
          <div class="news-img-main">
            <div class="news-img"><img src="<?php echo "admin/Gallery/".$get_image_row['gallery_img'];?>" style="height: 200px; width: 226px;" data-popupalt-original-title="null">
              <!-- <img src="images/news-img1.jpg" alt="" data-popupalt-original-title="null" title=""> -->
              <div class="news-list">
                <ul>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $get_image_row['updated']; ?></li>
                  <!-- <li><i class="fa fa-comments-o" aria-hidden="true"></i> 8</li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="news-head">
           <h3><?php echo $get_image_row['name']; ?></h3>
          </div>
        </div>
      </div>   
      <?php } ?>
     
    </div>
  </div>
</section>
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

<a id="scrollUp" href="http://sbtechnosoft.com/electricshop/#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a></body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>