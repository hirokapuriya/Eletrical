<?php 
   include("controller.php");
    
    if(isset($_REQUEST['del_id']))
     {
        $del=$_REQUEST['del_id'];
        $obj= new controller;
        $obj->delete($del);
        header("location:table.php");
    }
    //Pagination page
    $limit = 5;  
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
    $start_from = ($page-1) * $limit;
    $contact_page_details = mysqli_query($con,"SELECT COUNT(id) FROM contact");  
    $get_contact_ctrl_list = mysqli_fetch_row($contact_page_details);  
    $total_records = $get_contact_ctrl_list[0];  
    $total_pages = ceil($total_records / $limit);

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
                        <h1 class="page-head-line">Contact-us</h1>
                        <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="5%">Id</th>
                                            <th width="10%">Name</th>
                                            <th width="15%">Subject</th>
                                            <th width="15%">Phone</th>
                                            <th width="25%">Email</th>
                                            <th width="50%">Message</th>
                                            <th width="50%">Created_At</th>
                                            <th width="50%">Updated_At</th>
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
                                            <td><?php echo $result['id']; ?></td>
                                            <td><?php echo $result['name']; ?></td>
                                            <td><?php echo $result['subject']; ?></td>
                                            <td><?php echo $result['phone']; ?></td>
                                            <td><?php echo $result['email']; ?></td>
                                            <td><?php echo $result['message']; ?></td>
                                            <td><?php echo $result['created']; ?></td>
                                            <td><?php echo $result['updated']; ?></td>
                                            <td><a href="table.php?del_id=<?php echo $result['id']; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-home"></i>Delete</a></td>
                                        </tr>
                                      <?php  } ?>
                                    </tbody>
                                </table>
                                <?php for ($i=1; $i<=$total_pages; $i++) {  
                                    echo  $pagLink = "<a class=".'btn btn-danger'." href='table.php?page=".$i."'>".$i."</a>";  
                                } ?>
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
