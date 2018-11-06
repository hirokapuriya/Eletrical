<?php
  include('connection/connection.php');
  class model
  {
    //Contact Page Data Add Query
  	public function contact($name,$subject,$phone,$email,$message)
  	{
      global $con;
          $q= mysqli_query($con,"INSERT INTO contact(name,subject,phone,email,message) values('".$name."','".$subject."','".$phone."','".$email."','".$message."')") or die(mysqli_error('this is not completed'));  
          return $q;
  	}
    //All Pages Subscriber Add Query
    public function subscriber_model($subscribe_email)
    {
      global $con;
          
      $subscriber_query= mysqli_query($con,"INSERT INTO subscribe(subscribe_email) values('".$subscribe_email."')") or die(mysqli_error('this is not completed for subscriber'));  
      return $subscriber_query;
    }
    //Gallery page all image Show Query
    public function get_image_frunt(){
      global $con;
      $get_gallery_image = mysqli_query($con,"SELECT * FROM gallery_image");
      
      return $get_gallery_image;
        
      }
    
  }

?>