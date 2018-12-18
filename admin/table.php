<?php require_once('auth.php'); ?>

<?php 
   include("controller.php");
    
    if(isset($_REQUEST['del_id']))
     {
        $del=$_REQUEST['del_id'];
        $obj= new controller;
        $obj->delete($del);
        header("location:table.php");
    }
    //Delete service list delete_service_list
   if(isset($_POST['bulk_delete_submit'])){
      
      $id_contact = $_POST['checked_id'];
      
      $mass_delete_contact = new controller;
      $success_delete = $mass_delete_contact->mass_delete_contact($id_contact);

      if ($success_delete){ ?>
        <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
          <script type="text/javascript">
             $(document).ready(function () {
              $("#flash-msg").css("display", "block");
                $("#flash-msg").delay(3000).fadeOut("slow");
              });
          </script>
    <?php }
    }
    //Pagination page
    $limit = 5;  
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
    $start_from = ($page-1) * $limit;
    $contact_page_details = mysqli_query($con,"SELECT COUNT(id) FROM contact");  
    $get_contact_ctrl_list = mysqli_fetch_row($contact_page_details);  
    $total_records = $get_contact_ctrl_list[0];  
    $total_pages = ceil($total_records / $limit);

    //Count recored Data
    $count = mysqli_query($con,"SELECT COUNT(*)FROM contact");

    $row = mysqli_fetch_array($count);
    $total = $row[0];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include('admin_include/mass_delete.php') ?>
    <title>Responsive Bootstrap Advance Admin Template</title>
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
                        <h1 class="page-head-line" style="border-color: #003769; color: #003769;">Contact-us</h1>
                        <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default" style="border-color: #003769;">
                        <div class="panel-heading" style="border-color: #003769; color: #ffcb36; background-color: #2b4761">
                            Contact Ragister
                        </div>
                        <div class="panel-body">
                              <div class="alert alert-success fade in" id="flash-msg" style="display: none;">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Success!</strong> Your message has been Deleted successfully.
                              </div>
                            <div class="table-responsive">
                                <div style="color: #96a0a9;"><?php echo "Total Records:(" . $total.")"; ?></div>
                                <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover" width="50%">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select_all" value=""/></th>
                                            <th width="">Id</th>
                                            <th width="">Name</th>
                                            <th width="">Phone</th>
                                            <th width="">Email</th>
                                            <th width="">Message</th>
                                           <!--  <th width="50%">Created_At</th>
                                            <th width="50%">Updated_At</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                              $get_contact_view_list = new controller;
                                              $get_contact_ctrl_list = $get_contact_view_list->get_contact_ctrl();
                                          while ($result = mysqli_fetch_assoc($get_contact_ctrl_list)) 
                                          {?>
                                        <tr>
                                            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $result['id']; ?>"></td>
                                            <td><?php echo $result['id']; ?></td>
                                            <td><div style="overflow-y:scroll; height:50px;"><?php echo $result['name']; ?></div></td>
                                            <td><?php echo $result['phone']; ?></td>
                                            <td><?php echo $result['email']; ?></td>
                                            <td><div style="overflow-y:scroll; height:100px;"><?php echo $result['message']; ?></div></td>
                                           <!--  <td><?php echo $result['created']; ?></td>
                                            <td><?php echo $result['updated']; ?></td> -->
                                            <td><a href="table.php?del_id=<?php echo $result['id']; ?>" class="btn btn-danger" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">Delete</a>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#message<?php echo $result['id'];?>" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">View</button>
                                            </td>
                                        </tr>
                                        <div id="message<?php echo $result['id'];?>" class="modal fade" role="dialog" >
                                          <div class="modal-dialog" >
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">
                                                <button type="button" class="close" data-dismiss="modal" style="color: #ffcb36;">&times;</button>
                                                <h4 class="modal-title">This is&nbsp;<u><?php echo $result['name'];?></u>&nbsp;Detail</h4>
                                              </div>
                                              <div class="modal-body">
                                                    <!-- <strong>Hello My Name <b ><?php echo $result['name'];?></b> I have Issue This</strong></br> -->
                                                    <label>ID&nbsp;-&nbsp;</label><?php echo $result['id'];?></br>
                                                    <label>Name&nbsp;-&nbsp;</label><?php echo $result['name'];?></br>
                                                    <label>Phone-No&nbsp;-&nbsp;</label><?php echo $result['phone']; ?></br>
                                                    <label>Email&nbsp;-&nbsp;</label><?php echo $result['email']; ?></br>
                                                    <label>Message&nbsp;-&nbsp;</label><?php echo $result['message']; ?></br>
                                                    <label>Created&nbsp;-&nbsp;</label><?php echo $result['created']; ?></br>
                                                    <label>Updated&nbsp;-&nbsp;</label><?php echo $result['updated']; ?>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">Close</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      <?php  } ?>
                                    </tbody>
                                </table>
                                <?php for ($i=1; $i<=$total_pages; $i++) {  
                                    echo  $pagLink = "<a class=".'btn btn-danger'." href='table.php?page=".$i."'>".$i."</a>";  
                                } ?>
                                <br/><button class="btn btn-danger" type="submit" name="bulk_delete_submit" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">&nbsp;Mass Delete</button>
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
