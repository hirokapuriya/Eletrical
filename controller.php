<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);  
  include("model.php");
  class controller
  {
    /*Contact Form Function*/
    public function con_register($name,$subject,$phone,$email,$message)
    {
      
      $ins=new model;
      
        $register = $ins->contact($name,$subject,$phone,$email,$message); 
        if($register)
        {  
             echo "<script>alert('Registration Successful')</script>";  
             header("location:contact.php");
        }
        else
        {  
            echo "<script>alert('Registration Not Successful')</script>";  
        }
      }
      
      /*Subscriber Function*/
      public function subscriber_registration($subscribe_email)
      {
        
        $subscriber_ctrl=new model;
      
        $subscriber_customer = $subscriber_ctrl->subscriber_model($subscribe_email);  
        if($subscriber_customer)
        {  
             echo "<script>alert('Subscribed Successful')</script>";  
             header("location:../index.php");
        }
        else
        {  
            echo "<script>alert('Subscribed Not Successful')</script>";  
        }
      }
      //Image Show Function
      public function get_image_ctrl(){
        $get_img_frunt = new model;
        $get_img = $get_img_frunt->get_image_frunt();
        
        return $get_img;
      }
      //Service tabe show data and display service tab
      public function show_service_tab(){
        $get_service_name = new model;
        $get_service_ctrl = $get_service_name->get_service_name_model();
        return $get_service_ctrl;
      }
      
  } 

?>