<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE); 
  include("model.php");

  class controller
  {
      /**
       * Contact Delete Function
       * @param $del
       */
      public function delete($del)
      {
         $obj=new model();
         $obj->delete($del);
      }

      /**
       * Image upload function
       * @param $gallery_img
       * @param $name
       * @param $edit_image_id
       */
      public function image_gallery($gallery_img,$name,$edit_image_id)
      {

          $rand_img = rand(0000, 9999);
          $img_name = $gallery_img['name'];
          $img_size = $gallery_img['size'] / 1024;
          $img_tmp_path = $gallery_img['tmp_name'];
          $format = explode(".", $img_name);
          $ext = strtolower(end($format));
          $allow_type = array("jpg", "jpeg", "png", "gif");
          $allow_size = 10240;
          if (!in_array($ext, $allow_type)) {
              ?>
              <script type="text/javascript">
                  alert('File Type Should Be jpg,jpeg,png or gif');
                  window.location.href = 'image_upload.php';
              </script>
              <?php
              die();
          }
          if ($img_size > $allow_size) {
              ?>
              <script type="text/javascript">
                  alert('Maximumm Size Will Be 10MB');
                  window.location.href = 'image_upload.php';
              </script>
              <?php
              die();
          }

          //===========Image Resize====================


          $size = getimagesize($img_tmp_path);
          $ratio = $size[0] / $size[1]; // width/height
          if ($ratio > 1) {
              $width = 600;
              $height = 600 / $ratio;
          } else {
              $width = 600 * $ratio;
              $height = 400;
          }
          $src = imagecreatefromstring(file_get_contents($img_tmp_path));
          $dst = imagecreatetruecolor($width, $height);

          $imageType = $size[2];

          switch ($imageType) {

              case 3:
                  imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
                  imagepng($dst, $img_name);
                  unlink($img_name); // adjust format as needed
                  break;

              case 1:
                  imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
                  imagegif($dst, $img_name);
                  unlink($img_name); // adjust format as needed
                  break;

              case 2:
                  imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
                  imagejpeg($dst, $img_name);
                  unlink($img_name);  // adjust format as needed
                  break;

              default:

                  break;
          }

          move_uploaded_file($img_tmp_path, "Gallery/" . $rand_img . $img_name);
          chmod("Gallery/" . $rand_img . $img_name, 0777);

          if (isset($edit_image_id) && $edit_image_id !== "") {
              $edit_gallery_ctrl = new model;
              $edit_image_done = $edit_gallery_ctrl->edit_gallery_model($rand_img . $img_name, $name, $edit_image_id);
              if ($edit_image_done) {
                  header('location:gallery.php');
              }
          } else {
              $gallery_ctrl = new model;
              $image_done = $gallery_ctrl->gallery_model($rand_img . $img_name, $name);
              if ($image_done) {
                  header('location:gallery.php');
              }
          }
      }
      /**
       * Delete Gallery Image Function
       * @param $image_delete_id
       */
      public function delete_image($image_delete_id)
      {

          $delete_img_ctrl = new model();
          $delete_img_ctrl->img_delete_model($image_delete_id);
          if ($delete_img_ctrl) {
              header('location:gallery.php');
          }
      }
      /**
       * Add Service In list Function
       * @param $service_name
       */
      public function Add_service_admin_ctrl($service_name){
        $service_ctrl=new model();
         
        $service_done = $service_ctrl->Add_service_model($service_name);

        return $service_done;
        if($service_done){
        	header("location:add_service.php");
        }else{
        	header('contact.php');
        }
	   }
      /**
       * Delete Name In Service List
       * @param $id
       */
     public function delete_service_list($id)
     {
         $delete_service_ctrl = new model();
         $delete_service_ctrl->service_list_delete_model($id);
         if ($delete_service_ctrl) {
             header('location:add_service.php');
         }
     }
      /**
       * Service Data Add Function
       * @param $select_dp_service
       * @param $service_desc
       */
    public function Add_service_description_ctrl($select_dp_service,$service_desc)
     {
        $service_description_ctrl = new model();
        $service_description_done = $service_description_ctrl->Add_service_description_model($select_dp_service,$service_desc);
        if($service_description_done){
          header("location:add_service.php");
        }else{
          header("location:add_service.php");
        }
    }
      /**
       * Service Data Edit Function
       * @param $edit_select_dp_service
       * @param $edit_service_desc
       * @param $edit_service_id
       */
    public function service_edit($edit_select_dp_service,$edit_service_desc,$edit_service_id)
    {
      $edit_option_ctrl=new model();
      $edit_option_ctrl->service_edit_model($edit_select_dp_service,$edit_service_desc,$edit_service_id); 
      if($edit_option_ctrl){
        header('location:add_service.php');
      }
    }
     /**
       * Service Data Delete Function
       * @param $option_delete
       */
    public function service_delete($option_delete)
    {
       $delete_option_ctrl=new model();
       $delete_option_ctrl->service_delete_model($option_delete);
    }
    /**
     * Subscriber Fetch Function
     * @return bool|mysqli_result
    */
    public function get_subscriber_ctrl(){
        $subscrib_get = new model();
        $subscrib_client = $subscrib_get->get_subscriber_model();
        return $subscrib_client;           
    }
    /**
     * Subscriber delete Function
     * @param $id
    */
    public function delete_sub_data($id){
      $del_sub_ctrl = new model;
      $del_sub_done = $del_sub_ctrl->delete_subscriber_model($id);
      if(isset($del_sub_done)){
        header('location:subscrib.php');
      }else{
        die('Delete Not Complete');
      }
    }
      /**
       * Mail Send Function
       * @param $to
       * @param $subject
       * @param $email_msg
       */
    public function send_mail_ctrl($to,$subject,$email_msg){
      include('Email/Thank_you.php');
      
    }
   /**
   * Contact Show Function
   * @return bool|mysqli_result
   */
    public function get_contact_ctrl(){
      $get_contact_list = new model;
      $get_contact = $get_contact_list->get_contact_list();
      return $get_contact;
    }
    /**
     * Show Gallery Image in Backend Grid Function
     * @return bool|mysqli_result
    */
    public function show_image(){
      $get_grid_img = new model();
      $get_grid_img_ctrl = $get_grid_img->grid_image_model();

      return $get_grid_img_ctrl;
    }
    public function Show_regisration_data(){
      $get_grid_registration = new model();
      $get_grid_reg_ctrl = $get_grid_registration->get_register_model();

      return $get_grid_reg_ctrl; 
    }
  } 

?>