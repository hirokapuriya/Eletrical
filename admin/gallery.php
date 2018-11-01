﻿
<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include('controller.php');



$get_gallery_image = mysqli_query($con,"SELECT * FROM gallery_image");

if(isset($_POST['submit_image']))
{
    $gallery_img = $_FILES['gallery_image'];
    $name = $_POST['name'];
    $image= new controller;
    $image->image_gallery($gallery_img,$name); 
}

if(isset($_REQUEST['image_delete_id']))
{
  $image_delete_id = $_REQUEST['image_delete_id'];
  $delete_image= new controller;
  $delete_image->delete_image($image_delete_id); 
}
if(isset($_REQUEST['gallery_edit_id']))
{
    $image_edit_id = $_REQUEST['gallery_edit_id'];
    $res = mysqli_query($con,"SELECT * FROM `gallery_image` WHERE `id`=$image_edit_id;");
    $image_row_option = mysqli_fetch_assoc($res);
    var_dump($image_row_option); die('okokok');
} 


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <?php include('admin_include/inc_css.php') ?>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPANY NAME</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <?php include('admin_include/inc_menubar.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">   
                    <div class="col-md-12">
                        <h1 class="page-head-line">Advance Elements</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">
                           File Uploads
                        </div>
                        <div class="panel-body">
                   <form method="post" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="control-label col-lg-12">Gallery Image</label>
                          <div class="">
                              <!-- <input type="file" name="gallery_image" id="fileToUpload"> -->
                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="assets/img/demoUpload.jpg" alt="" />
                                  </div>
                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                  </div>
                                  <?php if(isset($image_row_option))
                                            { ?>
                                              <input type="hidden" name="id" value="<?php echo $image_row_option['id']; ?>">
                                  <?php }?>
                                  <div>
                                    
                                      <span class="btn btn-file btn-primary">
                                        <span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="gallery_image" value=""> 
                                        <img src="Gallery/<?php echo $image_row_option['gallery_img'];?>">
                                      </span>
                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                  </div>
                                  <div class="form-group">
                                        <label>Enter Name</label>
                                        <input type="text" name="name" value="<?php echo $image_row_option['name']; ?>">
                                  </div>
                                  <button type="submit" name="submit_image" value="Upload File Now" class="btn btn-info">Upload File</button>
                               </div>
                          </div>
                      </div>
                    </form>
                    <!-- <div class="alert alert-warning"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div> -->
                    </div>
                           </div>
                         <!-- <div class="panel panel-default">
                        <div class="panel-heading">
                           For More Customization
                        </div>
                        <div class="panel-body">
                            <h4 class="alert alert-info" style="line-height:50px;">
                            For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank" >click here</a> 
                           </h4>
                                 </div>
                             </div> -->
                        </div>
                        <div class="col-md-12">
                          <!--   Kitchen Sink -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Gallery Image List
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="5%">Id</th>
                                                    <th width="25%">Image</th>
                                                    <th width="25%">Content</th>
                                                    <th width="13%">Createdat</th>
                                                    <th width="13%">Updated</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php while ($reslut_image = mysqli_fetch_assoc($get_gallery_image)) {?>
                                                <tr>
                                                    <td><?php echo $reslut_image['id']; ?></td>
                                                    <td><img src="Gallery/<?php echo $reslut_image['gallery_img'];?>" height="100" width="100"></td>
                                                    <td><?php echo $reslut_image['name']; ?></td>
                                                    <td><?php echo $reslut_image['created']; ?></td>
                                                    <td><?php echo $reslut_image['updated']; ?></td>
                                                    <td>
                                                      <a href="gallery.php?gallery_edit_id=<?php echo $reslut_image['id']; ?>" class="btn btn-primary">Edit</a>
                                                      <a href="gallery.php?image_delete_id=<?php echo $reslut_image['id']; ?>" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                             <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                             <!-- End  Kitchen Sink -->
                        </div>
                    </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>

        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
