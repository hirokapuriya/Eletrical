<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);  
include_once('controller.php');

if (isset($_REQUEST['ragister']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];
    
    if(isset($_POST['company_drive'])){
      $comman_drive = $_POST['company_drive'];  
    }else{
      $comman_drive = null;
    }
    if(isset($_POST['drive_no'])){
      $drive_no = $_POST['drive_no'];
    }else {
      $drive_no = null;
    }
    if (isset($_POST['capcity'])) {
        $capcity = $_POST['capcity'];   
    }else{
      $capcity = null;
    } 
    if(isset($_POST['machine_name'])){
      $machine_name = $_POST['machine_name'];
    }else{
      $machine_name = null;
    }
   
    $registartion = new controller;
    $registartion->service_register($name,$email,$message,$contact,$comman_drive,$drive_no,$capcity,$machine_name); 
  }
?>
<!DOCTYPE html>
<html class="gr__sbtechnosoft_com" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <?php include("Include/css_inc.php"); ?>
  
</head>
<body data-gr-c-s-loaded="true">
<!-- Pre Loader -->
<div id="dvLoading" style="display: none;"></div>
<!-- Header Start -->
<header class="wow fadeInDown  affix" data-offset-top="197" data-spy="affix" style="visibility: visible;">
  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="row">
        <?php include("Include/include_bookonline.php")?>
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
              <!-- Main Menu -->
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
          <h3>Service details</h3>
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
      <li>Services</li>
      <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
      <li>Service details</li>
    </ul>
  </div>
</div>
<!-- Breadcromb Wrapper End --> 
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper service-details-wrapper">
  <div class="container">
    <div class="service-details-tabs" style="margin-bottom: 150px;">
      <ul class="nav nav-tabs">
        <?php
            $get_service_tabe_name = new controller();
            $get_service_display = $get_service_tabe_name->show_service_tab();
            foreach ($get_service_display as $result_service) {?>
          <li style="margin-top: 10px;">
            <a data-target="#<?php echo $result_service['service_id']; ?>" data-toggle="tab" href="#<?php echo $result_service['service_id']; ?>" aria-expanded="true"><?php echo $result_service['service_name']; ?></a>
          </li>
        <?php } ?>
      </ul>
      <div class="tab-content">
      <?php
         $get_service_tabe_details = new controller();
         $get_service_display_details = $get_service_tabe_details->show_service_tab_details();
        foreach ($get_service_display_details as $result_service_details) {?>
      <div id="<?php echo $result_service_details['service_name_opt']; ?>" class="tab-pane fade">
          <div class="row">
          <div class="col-sm-6">
              <div class="pgwSlider wide">
                  <div class="contact-form">
                    <form method="post" id="contact-form">
                      <div class="row">
                        <div class="col-sm-6">
                          <input class="con-field" name="name" id="name" required="" placeholder="Name" type="text">
                          <span id="error_name" style="display:none;color:#003769;">Wrong Name</span>
                        </div>
                        <div class="col-sm-6">
                          <input class="con-field" name="contact" required="" maxlength="10" autocomplete="off" id="phone" placeholder="Phone No" type="text">
                          <span id="phonealert" style="color: #003769;"></span>
                        </div>
                        <!--AC & DC Drive Programming-->
                        <?php if ($result_service_details['id'] == 18) {?>
                          <div class="col-sm-6">
                            <input class="con-field" name="company_drive" id="name" required="" placeholder="Company-Drive" type="text">
                          </div>
                          <div class="col-sm-6">
                            <input class="con-field" name="drive_no" required="" id="contact" placeholder="Drive Model No" type="text">
                          </div>
                        <?php } ?>
                        <!--AC & DC Drive Reparing-->
                        <?php if ($result_service_details['id'] == 19) {?>
                          <div class="col-sm-6">
                            <input class="con-field" name="capcity" id="capcity" required="" placeholder="Capcity" type="text">
                          </div>
                          <div class="col-sm-6">
                            <input class="con-field" name="machine_name" required="" id="contact" placeholder="Machine-Name" type="text">
                          </div>
                        <?php } ?>
                        <div class="col-sm-12">
                          <input class="con-field" name="email" required="" id="email_address" placeholder="Email" type="text">
                          <span id="error_email" style="display:none;color:#003769;">Wrong Email</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <textarea class="con-field" style="width: 100%" name="message" id="message" rows="6" placeholder="Your Message"></textarea>
                          <div class="submit-area" style="margin-top: 10px; text-align: center;">
                              <input class="btn-one" type="submit" name="ragister" value="Send Message" required="required" style=" background: #003769 none repeat scroll 0 0; border: 2px solid #003769; color: #ffffff; display: inline-block; font-size: 16px; margin: 0 0 20px; padding: 8px 30px; text-transform: uppercase; transition: all 0.3s ease 0s;">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="tabs-content-right">
                  <?php echo $result_service_details['service_description']; ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
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

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a></body></html>