﻿<?php require_once('auth.php'); ?>
<?php 
error_reporting(E_ALL); 
ini_set('display_errors',1);  
include("controller.php");
    //Single Delete
    if(isset($_REQUEST['del_id_service']))
    {
        $del_reg_ser=$_REQUEST['del_id_service'];
        $obj_result= new controller;
        $service_result = $obj_result->Single_delete_ragister_service($del_reg_ser);
        if($service_result){ ?>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script type="text/javascript">
             $(document).ready(function () {
              $("#flash-msg").css("display", "block");
                $("#flash-msg").delay(3000).fadeOut("slow");
              });
        </script>
        <?php }
        
    }
    //Delete service list delete_service_list
   if(isset($_POST['bulk_delete_submit'])){
      
      $id = $_POST['checked_id'];
      
      $delete_ac_dc = new controller;
      $mass_delete = $delete_ac_dc->delete_mass_ac_dc($id); 
      if($mass_delete){?>
      <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
      <script type="text/javascript">
         $(document).ready(function () {
          $("#flash-msg").css("display", "block");
            $("#flash-msg").delay(3000).fadeOut("slow");
          });
    </script>
   <?php } }
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
           <?php include('admin_include/nav_bar.php'); ?>
        </nav>
        <!-- /. NAV TOP  -->
        <?php include('admin_include/inc_menubar.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="border-color: #003769; color: #003769;">PCL & SMI Programming</h1>
                       <!--  <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                       <!--  <div class="alert alert-info">
                            This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                          <br />
                            Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default" style="border-color: #003769;">
                        <div class="panel-heading" style="border-color: #003769; color: #ffcb36; background-color: #2b4761">
                            Registration Service List
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success fade in" id="flash-msg" style="display: none;">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Success!</strong> Your message has been Deleted successfully.
                              </div>
                            <div class="table-responsive">
                                <form action="" method="post" onSubmit="return delete_confirm();">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select_all" value=""/></th>
                                            <th width="5%">Id</th>
                                            <th width="20%">Name</th>
                                            <th width="20%">Email</th>
                                            <th width="20%">Contact</th>
                                            <th width="20%">Message</th>
                                            <!-- <th width="13%">Createdat</th>
                                            <th width="13%">Updated</th> -->
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                              $get_register_view_list = new controller;
                                              $get_register_ctrl_list = $get_register_view_list->Show_regisration_data();
                                        foreach ($get_register_ctrl_list as $result) 
                                        {   
                                            if ($result['name'] !== "" && $result['email'] !== "" && $result['contact'] !== "" && $result['message'] !== "") { ?>    
                                        <tr>
                                            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $result['id']; ?>"></td>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><div style="overflow-y:scroll;"><?php echo $result['name']; ?></div></td>
                                            <td><div style="overflow-y:scroll; "><?php echo $result['email']; ?></div></td>
                                            <td><?php echo $result['contact']; ?></td>
                                            <td><div style="overflow-y:scroll;"><?php echo $result['message']; ?></div></td>
                                            <td><a href="pcl_smi_programming.php?del_id_service=<?php echo $result['id']; ?>" class="btn btn-danger" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">Delete</a>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#message<?php echo $result['id'];?>" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">View</button></td>
                                        </tr>
                                        <div id="message<?php echo $result['id'];?>" class="modal fade" role="dialog">
                                          <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">This is&nbsp;<u><?php echo $result['name'];?></u>&nbsp;Detail</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <label>ID&nbsp;-&nbsp;</label><?php echo $result['id'];?></br>
                                                    <label>Name&nbsp;-&nbsp;</label><?php echo $result['name'];?></br>
                                                    <label>Phone-No&nbsp;-&nbsp;</label><?php echo $result['contact']; ?></br>
                                                    <label>Email&nbsp;-&nbsp;</label><?php echo $result['email']; ?></br>
                                                    <label>Message&nbsp;-&nbsp;</label><?php echo $result['message']; ?></br>
                                                    <label>Created&nbsp;-&nbsp;</label><?php echo $result['created']; ?></br>
                                                    <label>Updated&nbsp;-&nbsp;</label><?php echo $result['updated']; ?>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              </div>
                                            </div>

                                          </div>
                                        </div>
                                         <?php  }} ?>
                                    </tbody>
                                </table><!-- 
                                <span class="rows_selected" id="select_count">0 Selected</span> -->
                                 <button class="btn btn-danger" type="submit" name="bulk_delete_submit" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">&nbsp;Mass Delete</button>
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
    <?php include('admin_include/admin_footer.php'); ?>
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
