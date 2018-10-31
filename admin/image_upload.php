<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include('controller.php');

$get_gallery_image = mysqli_query($con,"SELECT * FROM gallery_image");

if(isset($_POST['submit']))
{
    
    $gallery_img = $_FILES['gallery_image'];
    $name = $_POST['name'];

    $image= new controller;
    $image->image_gallery($gallery_img,$name); 
}
?>
    <form method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="gallery_image" id="fileToUpload">
        <input type="text" name="name">
        <input type="submit" name="submit" value="Upload File Now" >
    </form>

<table>
    <tr>
        <td>Image</td>
    </tr>
    <?php while ($row_image = mysqli_fetch_assoc($get_gallery_image)) { ?>
    <tr>
        <td><img src="Gallery/<?php echo $row_image['gallery_img'];?>" height="40" width="40"></td>
        <td><?php echo $row_image['name']; ?></td>
    </tr>
    <?php } ?>
</table>