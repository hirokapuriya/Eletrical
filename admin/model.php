<?php
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
  }

?>