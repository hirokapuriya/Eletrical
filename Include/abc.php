<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include("../controller.php");
//kapuriyahiren8899@gmail.com
if(isset($_POST['subscriber']))
  {
      $subscribe_email = $_POST['subscribe_email']; 
      $subscriber_view= new controller;
      $subscriber_view->subscriber_registration($subscribe_email);
     
  }
?> 