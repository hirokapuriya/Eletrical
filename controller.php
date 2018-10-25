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
             header("location:contact.php");
        }
        else
        {  
            echo "<script>alert('Subscribed Not Successful')</script>";  
        }
      }
      /*Image upload function*/
      public function image_gallery($gallery_img){
        //var_dump($gallery_img); die('opopopopo');
        $gallery_ctrl=new model;

        //var_dump($gallery_ctrl); die('hello_ctrl');
        /*$image_done = $gallery_ctrl->gallery_model($gallery_img);
        if ($image_done) {
          echo "image Uploaded";
        }else{
          echo "image Not Uploaded";
        }*/

        

        
      }
  } 

?>