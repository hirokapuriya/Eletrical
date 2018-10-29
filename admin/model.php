<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE); 
  include('connection/connection.php');
  class model
  {
  	public function delete($del)
    {
      global $con;
      $execute_delete = mysqli_query($con,"delete from contact where id='$del'");

      return $execute_delete;
    }
    public function Add_service_model($service_name)
    {
      //var_dump($service_name); die('jkjkjk');
      global $con;
      $service_query= mysqli_query($con,"INSERT INTO service_tab_name(service_name) values('".$service_name."')") or die(mysqli_error('this is not completed for add service_name'));  
      return $service_query;
    }
    public function gallery_model($gallery_img){
      global $con;

      $add_image =  mysqli_query($con, "INSERT INTO gallery_image(gallery_img) values('".$gallery_img."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_image;
    }

  }

?>