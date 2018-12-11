<?php
  include('connection/connection.php');
  class model
  {
      /**
       * @param $name
       * @param $subject
       * @param $phone
       * @param $email
       * @param $message
       * @return bool|mysqli_result
       */
    //Contact Page Data Add Query
  	public function contact_model($name,$phone,$email,$message)
  	{
      global $con;

      $reg_try_query = mysqli_query($con,"INSERT INTO `contact`(`name`, `phone`, `email`, `message`) VALUES('".$name."','".$phone."','".$email."','".$message."')") or die(mysqli_error('This is not completed for registration'));
      return $reg_try_query;
    }
      /**
       * @param $subscribe_email
       * @return bool|mysqli_result
       */
    //All Pages Subscriber Add Query
    public function subscriber_model($subscribe_email)
    {
      global $con;
          
      $subscriber_query= mysqli_query($con,"INSERT INTO subscribe(subscribe_email) values('".$subscribe_email."')") or die(mysqli_error('this is not completed for subscriber'));  
      return $subscriber_query;
    }
      /**
       * @return bool|mysqli_result
       * Gallery page all image Show Query
       */
      public function get_image_frunt(){
      global $con;
      $get_gallery_image = mysqli_query($con,"SELECT * FROM gallery_image");
      
      return $get_gallery_image;
        
    }
    /**
     * @return bool|mysqli_result
     * get Service name and details Queyry
     */
    public function get_service_name_model()
    {
      global $con;

      $get_service_model = mysqli_query($con,"SELECT * FROM `service_tab_details`,`service_tab_name` WHERE service_name_opt = service_id");
      
       return $get_service_model;
    }
    /**
     * @return bool|mysqli_result
     * get Service name and details Queyry
     */
    public function get_service_name_detals_model()
    {
      global $con;

      $get_service_model_details = mysqli_query($con,"SELECT * FROM `service_tab_details`");
      
       return $get_service_model_details;
    }
      /**
       * @param $name
       * @param $email
       * @param $message
       * @param $contact
       * @param $comman_drive
       * @param $drive_no
       * @param $capcity
       * @param $machine_name
       * @return bool|mysqli_result
       * Insert Service Registration Form in Database
       */
    public function register_model($name,$email,$message,$contact,$comman_drive,$drive_no,$capcity,$machine_name)
    {
      //var_dump($name,$email,$message,$contact,$comman_drive,$drive_no,$capcity,$machine_name); die('iooioioi');
      global $con;

      $insert_register = mysqli_query($con,"INSERT INTO registration(name,email,message,contact,comman_drive,drive_no,capcity,machine_name) values('".$name."','".$email."','".$message."','".$contact."','".$comman_drive."','".$drive_no."','".$capcity."','".$machine_name."')") or die(mysqli_error('this is not completed for registration'));

       return $insert_register;
    }
   /**
   * @return bool|mysqli_result
   * Get Service_form Data In Grid
   */
    public function get_service_From_Data_model(){
      global $con;

       $get_service_data = mysqli_query($con,"SELECT * FROM registration");
       return $get_service_data;

    }
  }

?>