<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include('../controller.php');
//kapuriyahiren8899@gmail.com
if(isset($_POST['subscriber']))
  {
      //var_dump($_POST['subscriber']); die('789');
      $subscribe_email = $_POST['subscribe_email']; 
      //var_dump($subscribe_email); die('klklklk');
      
      $subscriber_view= new controller;
      $subscriber_view->subscriber_registration($subscribe_email); 
  }
?>
  <div class="search-wrapper">
    <div class="col-sm-6">
      <div class="search-inner-text">
        <h3>Want to know about our offers first? <span>Subscribe our newsletter</span></h3>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="footer-search-form">
        <div class="form">
          <form method="post">
            <input placeholder="Your Email Address" id="exampleInputName" class="form-control first" name="subscribe_email" type="text">
            <input class="btn-one" type="submit" name="subscriber" value="Subscribe" required="required">
          </form>
        </div>
      </div>
    </div>
  </div>