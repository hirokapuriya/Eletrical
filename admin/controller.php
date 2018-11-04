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
      public function image_gallery($gallery_img,$name,$edit_image_id)
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

        //===========Image Resize====================


        $size = getimagesize($img_tmp_path);
        $ratio = $size[0]/$size[1]; // width/height
        if( $ratio > 1) {
            $width = 600;
            $height = 600/$ratio;
        }
        else {
            $width = 600*$ratio;
            $height = 400;
        }
        $src = imagecreatefromstring(file_get_contents($img_tmp_path));
        $dst = imagecreatetruecolor($width,$height);
        //var_dump($src); var_dump($dst); die('op');

        $imageType = $size[2];
       // var_dump($size); die('opopop');

        switch ($imageType) {


            case 3:
                //$src = imagecreatefrompng($img_tmp_path);
                //imagecreatefrompng
                imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
                //imagedestroy($src);
                //var_dump(imagepng($dst,$img_name));die("aaaa");
                imagepng($dst,$img_name);
                unlink($img_name); // adjust format as needed
                //var_dump($img_name);die("AAA");
                //imagedestroy($dst);
                //$imageResourceId = imagecreatefrompng($file); 
                //$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                //imagepng($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            case 1:
                imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
                //imagedestroy($src);
                imagegif($dst,$img_name);
                unlink($img_name); // adjust format as needed
                //imagedestroy($dst);
                //$imageResourceId = imagecreatefromgif($file); 
                //$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                //imagegif($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            case 2:
                imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
                //imagedestroy($src);
                imagejpeg($dst,$img_name);
                unlink($img_name);
                 // adjust format as needed
                //imagedestroy($dst);

                //$imageResourceId = imagecreatefromjpeg($file); 
                //$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
                //imagejpeg($targetLayer,$folderPath. $fileNewName. "_thump.". $ext);
                break;


            default:
               
                break;
        }

       /* imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
        imagedestroy($src);
        imagepng($dst,$img_name); // adjust format as needed
        imagedestroy($dst);*/





        move_uploaded_file($img_tmp_path,"Gallery/".$rand_img.$img_name); 
        chmod("Gallery/".$rand_img.$img_name, 0777);

        if(isset($edit_image_id) && $edit_image_id!=="")
        {
          $edit_gallery_ctrl=new model;
          $edit_image_done = $edit_gallery_ctrl->edit_gallery_model($rand_img.$img_name,$name,$edit_image_id);
          if($edit_image_done){
            header('location:gallery.php');
          }
        }
        else
        {
          $gallery_ctrl=new model;
          $image_done = $gallery_ctrl->gallery_model($rand_img.$img_name,$name);
          if($image_done){
            header('location:gallery.php');
          }    
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
    public function delete_image($image_delete_id){
       
       $delete_img_ctrl=new model();
       $delete_img_ctrl->img_delete_model($image_delete_id);
       if( $delete_img_ctrl){
        header('location:gallery.php');
       }
    }
    public function get_subscriber_ctrl(){
        $subscrib_get = new model();
        $subscrib_client = $subscrib_get->get_subscriber_model();
        return $subscrib_client;           
    }
  } 

?>