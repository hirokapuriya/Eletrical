<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE); 
  include("model.php");
  class controller
  {
      public function delete($del)
      {
         $obj=new model();
         $obj->delete($del);
      }
      /*Image upload function*/
      public function image_gallery($gallery_img,$name)
      {
        $rand_img = rand(0000,9999);
        $img_name=$gallery_img['name'];
        $img_size=$gallery_img['size']/1024;
        $img_tmp_path=$gallery_img['tmp_name'];
        $format =explode(".",$img_name);
        $ext=strtolower(end($format));
        $allow_type=array("jpg","jpeg","png","gif");
        $allow_size=10240;
        if(!in_array($ext,$allow_type))
        {
          ?>
          <script type="text/javascript">
            alert('File Type Should Be jpg,jpeg,png or gif');
           window.location.href = 'image_upload.php';
          </script>
          <?php
          die();
        }
        if($img_size>$allow_size)
        {
          ?>
          <script type="text/javascript">
            alert('Maximumm Size Will Be 10MB');
            window.location.href = 'image_upload.php';
          </script>
          <?php
          die();
        }

        move_uploaded_file($img_tmp_path,"Gallery/".$rand_img.$img_name); 
        $gallery_ctrl=new model;
        $image_done = $gallery_ctrl->gallery_model($rand_img.$img_name,$name);
        if($image_done){
          header('location:image_upload.php');
        }
      }
      public function Add_service_admin_ctrl($service_name)
      {

        $service_ctrl=new model();
         
        $service_done = $service_ctrl->Add_service_model($service_name);
        if($service_done){
        	header("location:add_service.php");
        }else{
        	header('contact.php');
        }
	   }
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
    public function service_delete($option_delete)
    {
       $delete_option_ctrl=new model();
       $delete_option_ctrl->service_delete_model($option_delete);
    }
    public function service_edit($edit_select_dp_service,$edit_service_desc,$edit_service_id)
    {
      $edit_option_ctrl=new model();
      $edit_option_ctrl->service_edit_model($edit_select_dp_service,$edit_service_desc,$edit_service_id); 
      if($edit_option_ctrl){
        header('location:add_service.php');
      }
    }
  } 

?>