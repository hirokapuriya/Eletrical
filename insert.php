<?php 
include_once('controller.php');

if(isset($_POST['register']))
  {  
      $banner_image = $_POST['banner_image'];  
      $content_1 = $_POST['content_1'];  
      $content_2 = $_POST['content_2'];  
      
      $reg= new controller;
      $reg->con_register($banner_image,$content_1,$content_2); 
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
</head>
<body>
  <form method="post" action="">
    <table>
      <tr>
        <td>Banner_image</td>
        <td><input type="text" name="banner_image" value=""></td>
      </tr>
       <tr>
        <td>content_1</td>
        <td><input type="text" name="content_1" value=""></td>
      </tr>
       <tr>
        <td>content_2</td>
        <td><input type="text" name="content_2" value=""></td>
      </tr>
      <tr>
        <td><input type="submit" name="register" value="ok" required="required"></td>
      </tr>
    </table>
  </form>
</body>
</html>
