<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE); 
  include('connection/connection.php');
  class model
  { 
    //Contact Delete Query
    public function delete($del){
      global $con;
      $execute_delete = mysqli_query($con,"delete from contact where id='$del'");

      return $execute_delete;
    }
    //Add Gallery Image Query
    public function gallery_model($gallery_img,$name){
      global $con;

      $add_image =  mysqli_query($con, "INSERT INTO gallery_image(gallery_img,name) values('".$gallery_img."','".$name."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_image;
    }
    //Edit Gallery Image Query
    public function edit_gallery_model($gallery_img,$name,$edit_image_id){
      
      global $con;

      $imge_gallery_edit = mysqli_query($con,"UPDATE `gallery_image` SET gallery_img='$gallery_img',name = '$name' WHERE `id`=$edit_image_id");      
      return $imge_gallery_edit;
    }
    //Delete Gallery Image Folder & Table Query
    public function img_delete_model($image_delete_id){
      global $con;
      //This is used of delete image in folder using unlink function
      $get_image = mysqli_query($con , "select * from gallery_image where id='$image_delete_id'");
      $name = mysqli_fetch_assoc($get_image);
      unlink("Gallery/".$name['gallery_img']);

      $img_delete = mysqli_query($con,"delete from gallery_image where id='$image_delete_id'");
      return $img_delete;
    }
   
    //Service name Add Query
    public function Add_service_model($service_name){
      global $con;
      $service_query= mysqli_query($con,"INSERT INTO service_tab_name(service_name) values('".$service_name."')") or die(mysqli_error('this is not completed for add service_name'));  
      return $service_query;
    }
    //Delete Service name in list Query
    public function service_list_delete_model($id){
      global $con;

      foreach ($id as  $value) {
         $service_list_del_model = mysqli_query($con,"delete from service_tab_name where service_id='$value'");
      }
      return $service_list_del_model;
    }
    //Service Data Add Query
    public function Add_service_description_model($select_dp_service,$service_desc){

        global $con;
        $add_service_desc =  mysqli_query($con, "INSERT INTO service_tab_details(service_name_opt,service_description) values('".$select_dp_service."','".$service_desc."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_service_desc;

    }
    //Service Data Edit Query
    public function service_edit_model($edit_select_dp_service,$edit_service_desc,$edit_service_id)
    {
      global $con;
      $service_edit = mysqli_query($con,"UPDATE `service_tab_details` SET service_name_opt='$edit_select_dp_service' , service_description = '$edit_service_desc' WHERE `id`= '$edit_service_id'");      

      return $service_edit;
    }
    //Service Data Delete Query
    public function service_delete_model($option_delete)
    {
      global $con;
      $service_delete = mysqli_query($con,"delete from service_tab_details where id='$option_delete'");

      return $service_delete;
    }
   
    //Subscriber Fetch Query
    public function get_subscriber_model(){
      global $con;

      $get_subscriber_deatils = mysqli_query($con,"select * From subscribe");
      return $get_subscriber_deatils;
    }
    //Subscriber Delete Query
    public function delete_subscriber_model($id){
      global $con;
      $delete_sub = mysqli_query($con,"delete from subscribe where id='$id'");

      return $delete_sub;
    }
    //Show Contact in contact page and display list query
    public function get_contact_list(){
      global $con;
      
      $limit = 5;  
      if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
      $start_from = ($page-1) * $limit;
      
      $select_contact=mysqli_query($con,"SELECT * FROM contact LIMIT $start_from, $limit");

      return $select_contact;
    }
  }

?>