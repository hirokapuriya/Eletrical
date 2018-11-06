<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);
    
    include('controller.php');

    if(isset($_REQUEST['sub_del_id'])){
       
       $id =  $_REQUEST['sub_del_id'];  

       $delete_sub_id = new controller;
       $delete_sub_id->delete_sub_data($id);
   }

   if(isset($_POST['sendmail'])){
        $to = $_POST['mail'];
        $email_msg  = $_POST['email_msg'];
        $subject = $_POST['subject'];

        $send_mail_ctrl = new controller;
        $send_mail_ctrl->send_mail_ctrl($to,$subject,$email_msg);
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
        <form method="post">
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Subscriber</h1>
                        <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->

                    </div>
                </div>
                <!-- /. ROW  -->
             
                <!-- /. ROW  -->
           <div class="row">
                <div class="col-md-12">
                      <!--Striped Rows Table -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <!-- Subscriber -->
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Checkbox</th>
                                            <th>Id</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                                      $get_subscriber_view = new controller;
                                      $get_subscriber_get_ctrl = $get_subscriber_view->get_subscriber_ctrl();
                                      $i = 1;
                                  while ($get_subscrib_row = mysqli_fetch_assoc($get_subscriber_get_ctrl)) 
                                  {?>
                                        <tr>
                                            <td><input type="checkbox" name="mail[]" value="<?php echo $get_subscrib_row['subscribe_email']; ?>"></td>
                                            <td width="5%"><?php echo $i; ?></td>
                                            <td width="80%"><?php echo $get_subscrib_row['subscribe_email']; ?></td>
                                            <td>                                            
                                                <a href="subscrib.php?sub_del_id=<?php echo $get_subscrib_row['id']; ?>" onclick="return confirm('Are You Sure For Delete This Record?');" class="btn btn-danger">Delete</td>

                                            </td>
                                        </tr>
                                    <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
            </div>
            <div class="row" style="padding-bottom: 100px; `">
                    <div class="col-md-12">
                        <div id="comments-sec">
                            <h4><strong>Compose Support Ticket </strong></h4>
                            <hr />


                            <div class="form-group  ">
                                <label>Please Write a Subject Line</label>
                                <input type="text" class="form-control" name="subject" required="required" placeholder="Enter Subject Of Ticket" />
                            </div>
                            <div class="form-group ">
                                <label>Please Enter Issue</label>
                                <textarea class="form-control" name="email_msg" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="sendmail" class="btn btn-success">Compose &amp; Send Ticket</button>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        </form>
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
