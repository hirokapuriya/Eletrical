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
    public function gallery_model($gallery_img,$name){
      global $con;

      $add_image =  mysqli_query($con, "INSERT INTO gallery_image(gallery_img,name) values('".$gallery_img."','".$name."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_image;
    }
    public function Add_service_description_model($select_dp_service,$service_desc){

        global $con;
        $add_service_desc =  mysqli_query($con, "INSERT INTO Service_tab_details(service_name_opt,service_description) values('".$select_dp_service."','".$service_desc."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_service_desc;

    }
    public function service_delete_model($option_delete)
    {
      global $con;
      $service_delete = mysqli_query($con,"delete from Service_tab_details where id='$option_delete'");

      return $service_delete;
    }
    public function service_edit_model($edit_select_dp_service,$edit_service_desc,$edit_service_id)
    {
      global $con;
      $service_edit = mysqli_query($con,"UPDATE `Service_tab_details` SET service_name_opt='$edit_select_dp_service' , service_description = '$edit_service_desc' WHERE `id`= '$edit_service_id'");      

      return $service_edit;
    }
    public function img_delete_model($image_delete_id){
      global $con;
      //This is used of delete image in folder using unlink function
      $get_image = mysqli_query($con , "select * from gallery_image where id='$image_delete_id'");
      $name = mysqli_fetch_assoc($get_image);
      unlink("Gallery/".$name['gallery_img']);

      $img_delete = mysqli_query($con,"delete from gallery_image where id='$image_delete_id'");
      return $img_delete;
    }

  }

?>