<?php
  include('connection/connection.php');
  class model
  {
  	public function contact($name,$subject,$phone,$email,$message)
  	{
      
  		global $con;
          //$password = md5($password);  
          $q= mysqli_query($con,"INSERT INTO contact(name,subject,phone,email,message) values('".$name."','".$subject."','".$phone."','".$email."','".$message."')") or die(mysqli_error('this is not completed'));  
          return $q;
  	}
    public function subscriber_model($subscribe_email)
    {
      global $con;
          
      $subscriber_query= mysqli_query($con,"INSERT INTO subscribe(subscribe_email) values('".$subscribe_email."')") or die(mysqli_error('this is not completed for subscriber'));  
      return $subscriber_query;
    }
    public function gallery_model($gallery_img)
    {
      //var_dump($gallery_img); die('Hello model');
      global $con;
          
      $gallery_query= mysqli_query($con,"INSERT INTO gallery_img(gallery_image) values('".$gallery_img."')") or die(mysqli_error('this is not completed for images'));  
      //var_dump($gallery_query); die('kjkjkk');
      return $gallery_query;
    }
    public function get_image_frunt(){
      global $con;

      $get_gallery_image = mysqli_query($con,"SELECT * FROM gallery_image");
      
        return $get_gallery_image;
        
      }
    
  }

?>