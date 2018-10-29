<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
echo "hello service";
include("controller.php");
//This $get_services_drop using Drop-down option
$get_services_drop = mysqli_query($con,"SELECT * FROM service_tab_name");
//This $get_services_name using side list name option
$get_services_name = mysqli_query($con,"SELECT * FROM service_tab_name ORDER BY service_name DESC");

  if(isset($_POST['service']))
  {
      // /var_dump($_POST['service']); die('789');
      $service_name = $_POST['service_name']; 
      //var_dump($service_name); die('klklklk');
      
      $service_view= new controller;
      $service_view->Add_service_admin_ctrl($service_name); 
  }
  if(isset($_POST['add_services'])){
        var_dump($_POST['Service_description']); die('oooo');
  }

?>
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
                        <h1 class="page-head-line">Add Services</h1>
                        <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>
 -->
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                    <div class="panel-heading">
                       Tab Form
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <div class="input-group">
                                <input type="text" placeholder="Please Enter Service-Tab" class="form-control" name="service_name" />
                                <span class="form-group input-group-btn">
                                    <button class="btn btn-default" type="submit" name="service" value="TabService" type="button">Go!</button>
                                </span>
                            </div>
                        </form>

                        <form>
                            <br>
                            <div class="form-group">
                                <label>Select Service</label>
                                <select class="form-control">
                                    <?php while ($result = mysqli_fetch_assoc($get_services_drop)) {?>
                                        <option value="<?php echo $result['service_id'];?>"><?php echo $result['service_name'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Enter Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Send Message </button>
                        </form>
                    </div>
                </div>
            </div>
                            <div class="col-md-6">

                        <div class="panel panel-success">
                            <div class="panel-heading">
                              Service List
                            </div>
                            <div class="panel-body" style="padding: 0px;">
                                <div class="chat-widget-main">
                                  <div class="panel-body">
                                <div class="list-group">
                                    <?php while ($row_option_name = mysqli_fetch_assoc($get_services_name)) { ?>
                                        <a href="#" class="list-group-item">
                                           <?php echo $row_option_name['service_name']; ?>
                                        </a>    
                                   <?php } ?>
                                </div>
                                <!-- /.list-group -->
                                <a href="#" class="btn btn-info btn-block">View All Alerts</a>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.ROW-->
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Service list
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
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>content</td>
                                            <td>02/05/2018</td>
                                            <td>02/05/2018</td>
                                            <td>
                                              <button class="btn btn-primary"><i class="glyphicon glyphicon-search"></i>Edit</button>
                                              <button class="btn btn-danger"><i class="glyphicon glyphicon-home"></i>Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
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
