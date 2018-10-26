<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include('controller.php');

if(isset($_POST['submit']))
{
    //var_dump($_POST['submit']); die('789');
    $gallery_img = $_FILES['gallery_image']; 
    //var_dump($gallery_img); die('klklklk');
    
    $image= new controller;
    $image->image_gallery($gallery_img); 
}
?>
 <!-- <form method="post" enctype="multipart/form-data">
    <input class="form-control first" name="gallery_img" type="file">
    <input class="btn-one" type="submit" name="submit_image" value="submit_image" required="required">
</form> -->

    <form method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="gallery_image" id="fileToUpload">
        <input type="submit" name="submit" value="Upload File Now" >
    </form>