<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE); 
  include('connection/connection.php');
  class model
  {
      /**
       * Contact Delete Query
       * @param $del
       * @return bool|mysqli_result
       */
    public function delete($del){
      global $con;
      $execute_delete = mysqli_query($con,"delete from contact where id='$del'");

      return $execute_delete;
    }
    /**
     * Add Gallery Image Query
     * @param $gallery_img
     * @param $name
     * @return bool|mysqli_result
     */
    public function gallery_model($gallery_img,$name){
      global $con;

      $add_image =  mysqli_query($con, "INSERT INTO gallery_image(gallery_img,name) values('".$gallery_img."','".$name."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_image;
    }
    /**
     * Edit Gallery Image Query
     * @param $gallery_img
     * @param $name
     * @param $edit_image_id
     * @return bool|mysqli_result
    */
    public function edit_gallery_model($gallery_img,$name,$edit_image_id){
      
      global $con;

      $imge_gallery_edit = mysqli_query($con,"UPDATE `gallery_image` SET gallery_img='$gallery_img',name = '$name' WHERE `id`=$edit_image_id");      
      return $imge_gallery_edit;
    }
    /**
     * Delete Gallery Image Folder & Table Query
     * @param $image_delete_id
     * @return bool|mysqli_result
     */
    public function img_delete_model($image_delete_id){
      global $con;
      //This is used of delete image in folder using unlink function
      $get_image = mysqli_query($con , "select * from gallery_image where id='$image_delete_id'");
      $name = mysqli_fetch_assoc($get_image);
      unlink("Gallery/".$name['gallery_img']);

      $img_delete = mysqli_query($con,"delete from gallery_image where id='$image_delete_id'");
      return $img_delete;
    }
    /**
     * Service name Add Query
     * @param $service_name
     * @return bool|mysqli_result
     */
    public function Add_service_model($service_name){
      global $con;
      $service_query= mysqli_query($con,"INSERT INTO service_tab_name(service_name) values('".$service_name."')") or die(mysqli_error('this is not completed for add service_name'));  
      return $service_query;
    }
    /**
     * Delete Service name in list Query
     * @param $id
     * @return bool|mysqli_result
    */
    public function service_list_delete_model($id){
      global $con;

      foreach ($id as  $value) {
         $service_list_del_model = mysqli_query($con,"delete from service_tab_name where service_id='$value'");
      }
      return $service_list_del_model;
    }
    /**
     * Service Data Add Query
     * @param $select_dp_service
     * @param $service_desc
     * @return bool|mysqli_result
     */
    public function Add_service_description_model($select_dp_service,$service_desc){

        global $con;
        $add_service_desc =  mysqli_query($con, "INSERT INTO service_tab_details(service_name_opt,service_description) values('".$select_dp_service."','".$service_desc."')") or die(mysqli_error('this is not completed for add gallery_img'));  
      return $add_service_desc;

    }
    /**
     * Service Data Edit Query
     * @param $edit_select_dp_service
     * @param $edit_service_desc
     * @param $edit_service_id
     * @return bool|mysqli_result
     */
    public function service_edit_model($edit_select_dp_service,$edit_service_desc,$edit_service_id)
    {
      global $con;
      $service_edit = mysqli_query($con,"UPDATE `service_tab_details` SET service_name_opt='$edit_select_dp_service' , service_description = '$edit_service_desc' WHERE `id`= '$edit_service_id'");      

      return $service_edit;
    }  
   /**
    * Service Data Delete Query
    * @param $option_delete
    * @return bool|mysqli_result
   */
    public function service_delete_model($option_delete)
    {
      global $con;
      $service_delete = mysqli_query($con,"delete from service_tab_details where id='$option_delete'");

      return $service_delete;
    }
    /**
       * Subscriber Fetch Query
       * @return bool|mysqli_result
       */
    public function get_subscriber_model()
    {
      global $con;

      $get_subscriber_deatils = mysqli_query($con,"select * From subscribe");
      return $get_subscriber_deatils;
    }
   /**
       * Subscriber Delete Query
       * @param $id
       * @return bool|mysqli_result
       */
    public function delete_subscriber_model($id)
    {
      global $con;
      $delete_sub = mysqli_query($con,"delete from subscribe where id='$id'");

      return $delete_sub;
    }
   /**
       * Show Contact in contact page and display list query
       * @return bool|mysqli_result
       */
    public function get_contact_list()
    {
      global $con;
      
      $limit = 5;  
      if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
      $start_from = ($page-1) * $limit;
      
      $select_contact=mysqli_query($con,"SELECT * FROM contact LIMIT $start_from, $limit");

      return $select_contact;
    }
      /**
       * @return bool|mysqli_result
       */
    public function grid_image_model()
    {
      global $con;
      $limit = 5;  
      if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
      $start_from = ($page-1) * $limit;

      $get_gallery_image_model = mysqli_query($con,"SELECT * FROM gallery_image LIMIT $start_from, $limit");

      return $get_gallery_image_model;
    }
    /**
       * Register Fetch Query
       * @return bool|mysqli_result
       */
    public function get_register_model()
    {
      global $con;

      $get_registration_deatils = mysqli_query($con,"select * From registration");
      return $get_registration_deatils;
    }
    public function Delete_ac_dc_model($id)
    {
      global $con;
      foreach ($id as $delete_mass) 
      {
        $ac_dc_mass_delete = mysqli_query($con,"delete from registration where id='$delete_mass'");
      }
      return $ac_dc_mass_delete;
    }
    public function mass_delete_contact_model($id_contact)
    {
      global $con;
      
      $contact_del = implode(",", $id_contact);
      
      $delete_contact = mysqli_query($con ,"DELETE FROM `contact` WHERE id IN ($contact_del)");
      
      return $delete_contact;
    }
    public function mass_delete_subscrib_model($id_subscribe)
    {
      global $con;
      
      $subscrib_del = implode(",", $id_subscribe);
      
      $subscrib_contact = mysqli_query($con ,"DELETE FROM `subscribe` WHERE id IN ($subscrib_del)");
      
      return $subscrib_contact;
    }
    public function mass_delete_service_model($id_service_display)
    {
      global $con;

      $service_delete = implode(",", $id_service_display);

      $servie_delete_model = mysqli_query($con,"DELETE FROM `service_tab_details` WHERE id IN ($service_delete)");

      return $service_delete_model;
    }
    public function mass_delete_gallery_model($id_gallery)
    {
       global $con;

      $gallery_row_delete = implode(",", $id_gallery);

      $mass_gallery_delete_model = mysqli_query($con,"DELETE FROM `gallery_image` WHERE id IN ($gallery_row_delete)");

      return $mass_gallery_delete_model;

    }
    public function Delete_reg_ser_model($del_reg_ser){
      global $con;
      
      $delete_reg_service = mysqli_query($con,"delete from registration where id='$del_reg_ser'");

      return $delete_reg_service;
    }
  }

?>