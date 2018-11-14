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
    //get Service name and details Queyry
    public function get_service_name_model()
    {
      global $con;

      $get_service_model = mysqli_query($con,"SELECT * FROM `service_tab_details`,`service_tab_name` WHERE service_name_opt = service_id");
      
       return $get_service_model;
    }
    //Insert Service Registration Form in Database
    public function register_model($name,$email,$message,$contact,$comman_drive,$drive_no,$capcity,$machine_name)
    {
      global $con;

      $insert_register = mysqli_query($con,"INSERT INTO registration(name,email,message,contact,comman_drive,drive_no,capcity,machine_name) values('".$name."','".$email."','".$message."','".$contact."','".$comman_drive."','".$drive_no."','".$capcity."','".$machine_name."')") or die(mysqli_error('this is not completed for registration'));

       return $insert_register;
    }
    //Get Service_form Data In Grid
    public function get_service_From_Data_model(){
      global $con;

       $get_service_data = mysqli_query($con,"SELECT * FROM registration");
       return $get_service_data;

    }
  }

?>