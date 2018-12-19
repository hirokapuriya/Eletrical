<?php require_once('auth.php') ?>

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
        $mail_complete = $send_mail_ctrl->send_mail_ctrl($to,$subject,$email_msg);
    }
    //Delete service list delete_service_list
   if(isset($_POST['bulk_delete_submit'])){
      
      $id_subscribe = $_POST['checked_id'];
      
      $mass_delete_subscribe = new controller;
      $mass_delete_subscribe->mass_delete_subscribe($id_subscribe); ?>
      <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
        <script type="text/javascript">
             $(document).ready(function () {
              $("#flash-msg").css("display", "block");
                $("#flash-msg").delay(3000).fadeOut("slow");
              });
        </script>
   <?php }

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
        <!-- <form method="post"> -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" style="border-color: #003769; color: #003769;">Subscriber</h1>
                        <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->

                    </div>
                </div>
                <!-- /. ROW  -->
             
                <!-- /. ROW  -->
           <div class="row">
                <div class="col-md-12">
                      <!--Striped Rows Table -->
                    <div class="panel panel-default" style="border-color: #003769;">
                        <div class="panel-heading" style="border-color: #003769; color: #ffcb36; background-color: #2b4761">
                           Subscriber List
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success fade in" id="flash-msg" style="display: none;">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    <strong>Success!</strong> Your message has been Deleted successfully.
                              </div>
                            <div class="table-responsive">
                                <form action="" method="POST">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Mass-Delete<br/><input type="checkbox" id="select_all" value=""/></th>
                                                <th>Mail</th>
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
                                                <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $get_subscrib_row['id']; ?>"></td>
                                                <td><input type="checkbox" name="mail[]" value="<?php echo $get_subscrib_row['subscribe_email']; ?>"></td>
                                                <td width="5%"><?php echo $i; ?></td>
                                                <td width="80%"><?php echo $get_subscrib_row['subscribe_email']; ?></td>
                                                <td>                                            
                                                    <a href="subscrib.php?sub_del_id=<?php echo $get_subscrib_row['id']; ?>" onclick="return confirm('Are You Sure For Delete This Record?');" class="btn btn-danger" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">Delete</a>
                                                </td>

                                                </td>
                                            </tr>
                                        <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                    <br/><button class="btn btn-danger" type="submit" name="bulk_delete_submit" style="border-color: #003769; color: #ffcb36; background-color: #003769;">&nbsp;Mass Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
            </div>
            <form method="post">
            <div class="row" style="padding-bottom: 100px;">
                    <div class="col-md-12">
                        <!-- <div id="comments-sec"> -->
                        <div class="panel panel-default" style="border-color: #003769;">
                            <div class="panel-heading" style="border-color: #003769; color: #003769;">
                            <h4><strong>Compose Support Ticket </strong></h4>
                            <hr style="border-color: #003769;" />


                            <div class="form-group  ">
                                <label>Please Write a Subject Line</label>
                                <input type="text" class="form-control" name="subject" required="required" placeholder="Enter Subject Of Ticket" />
                            </div>
                            <div class="form-group ">
                                <label>Please Enter Issue</label>
                                <textarea class="form-control" name="email_msg" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="sendmail" class="btn btn-success" style="border-color: #003769; color: #ffcb36; background-color: #003769; ">Compose &amp; Send Ticket</button>
                            </div>
                        </div>
                    </div>
                        <!-- </div> -->
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
