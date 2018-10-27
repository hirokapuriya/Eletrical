<?php
  include("model.php");
  class controller
  {
      public function delete($del)
      {
         $obj=new model();
         $obj->delete($del);
      }
      /*Image upload function*/
      public function image_gallery($gallery_img)
      {

        //var_dump($gallery_img); die('opopopopo');
        $gallery_ctrl=new model;

        var_dump($gallery_ctrl); die('hello_ctrl');
        $im1age_done = $gallery_ctrl->gallery_model($gallery_img);
        if ($image_done) {
          echo "image Uploaded";
        }else{
          echo "image Not Uploaded";
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
  } 

?>