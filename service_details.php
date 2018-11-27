<?php 
  error_reporting(E_ALL); 
  ini_set('display_errors',1);  
  include("controller.php");
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
    <div class="service-details-tabs">
      <ul class="nav nav-tabs">
        <?php
            $get_service_tabe_name = new controller();
            $get_service_display = $get_service_tabe_name->show_service_tab();
            foreach ($get_service_display as $result_service) {?>
          <li>

            <a data-target="#<?php echo $result_service['service_id']; ?>" data-toggle="tab" href="#<?php echo $result_service['service_id']; ?>" aria-expanded="true"><?php echo $result_service['service_name']; ?></a>
          </li>
        <!--<li class=""><a data-toggle="tab" data-target="#menu2" href="#menu2" aria-expanded="false">Lighting and Repair</a></li>
        <li><a data-toggle="tab" data-target="#menu3" href="#menu3">Electrical Installation</a></li>
        <li><a data-toggle="tab" data-target="#menu4" href="#menu4">Air Conditioning</a></li>
        <li><a data-toggle="tab" data-target="#menu5" href="#menu5">Services5</a></li> -->
      <?php } ?>
      </ul>
      <div class="tab-content">
      <?php
         $get_service_tabe_details = new controller();
         $get_service_display_details = $get_service_tabe_details->show_service_tab_details();
        foreach ($get_service_display_details as $result_service_details) {?>
      <div id="<?php echo $result_service_details['service_name_opt']; ?>" class="tab-pane fade active in">
          <div class="row">
          <div class="col-sm-6">
              <div class="pgwSlider wide">
                  <!-- <div class="ps-current" style="height: 323.383px;">
                    <ul>
                      <li class="elt_1" style="display: none; opacity: 0; z-index: 1;">
                        <img src="images/service-details-img1.jpg" alt="">
                      </li>
                      <li class="elt_2" style="z-index: 2; display: list-item; opacity: 1;">
                        <img src="images/service-details-img2.jpg" alt="">
                      </li>
                    </ul>
                    <span class="ps-caption"></span>
                  </div>
                  <ul class="ps-list">
                    <li class="elt_1" style="cursor: pointer; opacity: 0.6; width: 50%; height: 158.692px;">
                        <img src="images/service-details-img1.jpg" alt="">
                    </li>
                    <li class="elt_2" style="cursor: pointer; opacity: 1; width: 50%; height: 158.692px;">
                      <img src="images/service-details-img2.jpg" alt="">
                    </li>
                  </ul> -->
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
      <!--  <div id="menu2" class="tab-pane fade">
        <div class="row">
            <div class="col-sm-6">
              <div class="pgwSlider narrow"><div class="ps-current" style="height: 0px;"><ul><li class="elt_1" style="display: none; opacity: 0; z-index: 1;"><img src="images/service-details-img1.jpg" alt=""></li><li class="elt_2" style="z-index: 2; display: list-item; opacity: 1;"><img src="images/service-details-img2.jpg" alt=""></li></ul><span class="ps-caption"></span></div><ul class="ps-list">
                <li class="elt_1" style="cursor: pointer; opacity: 0.6; width: 50%; height: 16.9097px; overflow: hidden;"><img src="images/service-details-img1.jpg" alt=""></li>
                <li class="elt_2" style="cursor: pointer; opacity: 1; width: 50%; height: 16.9097px; overflow: hidden;"><img src="images/service-details-img2.jpg" alt=""></li>
              </ul></div>
            </div>
            <div class="col-sm-6">
              <div class="tabs-content-right">
                <h3>Finibus Bonorum Malorum</h3>
                <p>Eque porro quisquam est, ipsum quia dolor sit amet, 
consectetur, adipisci velit, sed quia non numquam eius modi tempora 
incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Eque 
porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                <h3>Air Condition</h3>
                <p>Eque porro quisquam est, qui dolorem ipsum quia dolor
 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi 
tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <ul>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div id="menu3" class="tab-pane fade">
         <div class="row">
            <div class="col-sm-6">
              <div class="pgwSlider narrow"><div class="ps-current" style="height: 0px;"><ul><li class="elt_1" style="display: none; opacity: 0; z-index: 1;"><img src="images/service-details-img1.jpg" alt=""></li><li class="elt_2" style="z-index: 2; display: list-item; opacity: 1;"><img src="images/service-details-img2.jpg" alt=""></li></ul><span class="ps-caption"></span></div><ul class="ps-list">
                <li class="elt_1" style="cursor: pointer; opacity: 0.6; width: 50%; height: 30.4926px; overflow: hidden;"><img src="images/service-details-img1.jpg" alt=""></li>
                <li class="elt_2" style="cursor: pointer; opacity: 1; width: 50%; height: 30.4926px; overflow: hidden;"><img src="images/service-details-img2.jpg" alt=""></li>
              </ul></div>
            </div>
            <div class="col-sm-6">
              <div class="tabs-content-right">
                <h3>Finibus Bonorum Malorum</h3>
                <p>Eque porro quisquam est, qui dolorem ipsum quia dolor
 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi 
tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                <h3>Air Condition</h3>
                <p>Eque porro quisquam est, qui dolorem ipsum quia dolor
 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi 
tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <ul>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div id="menu4" class="tab-pane fade">
         <div class="row">
            <div class="col-sm-6">
              <div class="pgwSlider narrow"><div class="ps-current" style="height: 0px;"><ul><li class="elt_1" style="display: none; opacity: 0; z-index: 1;"><img src="images/service-details-img1.jpg" alt=""></li><li class="elt_2" style="z-index: 2; display: list-item; opacity: 1;"><img src="images/service-details-img2.jpg" alt=""></li></ul><span class="ps-caption"></span></div><ul class="ps-list">
                <li class="elt_1" style="cursor: pointer; opacity: 0.6; width: 50%; height: 30.4926px; overflow: hidden;"><img src="images/service-details-img1.jpg" alt=""></li>
                <li class="elt_2" style="cursor: pointer; opacity: 1; width: 50%; height: 30.4926px; overflow: hidden;"><img src="images/service-details-img2.jpg" alt=""></li>
              </ul></div>
            </div>
            <div class="col-sm-6">
              <div class="tabs-content-right">
                <h3>Finibus Bonorum Malorum</h3>
                <p>Eque porro quisquam est, ipsum quia dolor sit amet, 
consectetur, adipisci velit, sed quia non numquam eius modi tempora 
incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Eque 
porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                <h3>Air Condition</h3>
                <p>Eque porro quisquam est, qui dolorem ipsum quia dolor
 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi 
tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <ul>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                </ul>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div id="menu5" class="tab-pane fade">
          <div class="row">
            <div class="col-sm-6">
              <div class="pgwSlider narrow"><div class="ps-current" style="height: 0px;"><ul><li class="elt_1" style="display: none; opacity: 0; z-index: 1;"><img src="images/service-details-img1.jpg" alt=""></li><li class="elt_2" style="z-index: 2; display: list-item; opacity: 1;"><img src="images/service-details-img2.jpg" alt=""></li></ul><span class="ps-caption"></span></div><ul class="ps-list">
                <li class="elt_1" style="cursor: pointer; opacity: 0.6; width: 50%; height: 36.9896px; overflow: hidden;"><img src="images/service-details-img1.jpg" alt=""></li>
                <li class="elt_2" style="cursor: pointer; opacity: 1; width: 50%; height: 36.9896px; overflow: hidden;"><img src="images/service-details-img2.jpg" alt=""></li>
              </ul></div>
            </div>
            <div class="col-sm-6">
              <div class="tabs-content-right">
                <h3>Finibus Bonorum Malorum</h3>
                <p>Eque porro quisquam est, qui dolorem ipsum quia dolor
 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi 
tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                <h3>Air Condition</h3>
                <p>Eque porro quisquam est, qui dolorem ipsum quia dolor
 sit amet, consectetur, adipisci velit, sed quia non numquam eius modi 
tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <ul>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                  <li>Powerfull HTML5 Template</li>
                  <li>Quality Design and more</li>
                  <li>Smooth Design</li>
                  <li>It's ferfect for any business website</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> -->
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

<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a></body></html>