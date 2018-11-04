<?php
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
      public function get_image_ctrl(){
        $get_img_frunt = new model;
        $get_img = $get_img_frunt->get_image_frunt();
        
        return $get_img;
      }
  } 

?>