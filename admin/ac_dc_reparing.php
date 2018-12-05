<?php //require_once('auth.php'); ?>
<?php 
error_reporting(E_ALL); 
ini_set('display_errors',1);  
include("controller.php");
//Delete service list delete_service_list
   if(isset($_POST['bulk_delete_submit'])){
      
      $id = $_POST['checked_id'];
      
      $delete_ac_dc = new controller;
      $delete_ac_dc->delete_mass_ac_dc($id);
   }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <?php include('admin_include/mass_delete.php') ?>
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
                        <h1 class="page-head-line">BLANK PAGE</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                          <br />
                            Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Gallery Image List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form method="post" action="">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select_all" value=""/></th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone-No</th>
                                            <th>Message</th>
                                            <th>Comman-Drive</th>
                                            <th>Drive-Model No.</th>
                                            <th>Createdat</th>
                                            <th>Updated</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                              $get_register_view_list = new controller;
                                              $get_register_ctrl_list = $get_register_view_list->Show_regisration_data();
                                        foreach ($get_register_ctrl_list as $result) 
                                        {   
                                            if ($result['capcity'] !== "" && $result['machine_name'] !== "") { ?>    
                                        <tr>
                                            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $result['id']; ?>"></td>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><?php echo $result['name']; ?></td>
                                            <td><?php echo $result['email']; ?></td>
                                            <td><?php echo $result['contact']; ?></td>
                                            <td><div style="overflow-y:scroll; height:80px;"><?php echo $result['message']; ?></div></td>
                                            <td><?php echo $result['capcity']; ?></td>
                                            <td><?php echo $result['machine_name']; ?></td>
                                            <td><?php echo $result['created']; ?></td>
                                            <td><?php echo $result['updated']; ?></td>
                                            <td>
                                             
                                             <!--  <button class="btn btn-danger"><i class="glyphicon glyphicon-home"></i>Delete</button></td> -->
                                        </tr>
                                         <?php  }} ?>
                                    </tbody>
                                </table>
                                <button class="btn btn-danger" type="submit" name="bulk_delete_submit"><i class="glyphicon glyphicon-home"></i>&nbsp;Mass Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
