<?php //require_once('auth.php'); ?>
<?php
error_reporting(E_ALL); 
ini_set('display_errors',1);  
include("controller.php");

//Pagination Data Limi and Satting
$limit = 5;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
$get_service_details = mysqli_query($con,"SELECT COUNT(id) FROM service_tab_details");  
$option_details = mysqli_fetch_row($get_service_details);  
$total_records = $option_details[0];  
$total_pages = ceil($total_records / $limit);  
//Pagination Code Ending

//Edit id is get(option_edit_id) in current page
if(isset($_REQUEST['option_edit_id']))
{     
     $id = $_REQUEST['option_edit_id'];
     $res = mysqli_query($con,"SELECT * FROM `service_tab_details` WHERE `id`=$id;");
     $row_option = mysqli_fetch_assoc($res);
     //get service table name id 
     $get_services_edit=mysqli_query($con,"SELECT * FROM `service_tab_name` WHERE `service_id`=".$row_option['service_name_opt']);
     $row_edit_option =mysqli_fetch_assoc($get_services_edit);
}

  //Delete service list delete_service_list
   if(isset($_POST['bulk_delete_submit'])){
      
      $id_service_display = $_POST['checked_id'];
      
      $mass_delete_service = new controller;
      $mass_delete_service->mass_delete_service($id_service_display);
   }

        
//This $get_services_drop using Drop-down option
$get_services_drop = mysqli_query($con,"SELECT * FROM service_tab_name");
//This $get_services_name using side list name option
$get_services_name = mysqli_query($con,"SELECT * FROM service_tab_name");
//This $get_service_details using final option
$get_service_details = mysqli_query($con,"SELECT * FROM `service_tab_details`,`service_tab_name` WHERE service_name_opt = service_id LIMIT $start_from, $limit ");
  //Add Service name in list  
  if(isset($_POST['service']))
  {
      $service_name = $_POST['service_name']; 
      $service_view= new controller;
      $himaliya = $service_view->Add_service_admin_ctrl($service_name); 
      if($himaliya){ ?>
      <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
      <script type="text/javascript">
         $(document).ready(function () {
          $("#flash-msg").css("display", "block");
            $("#flash-msg").delay(3000).fadeOut("slow");
          });//window.location('add_service.php');
      </script>
  <?php }

   }
  //Add Service Details and Description
  if(isset($_POST['add_services']))
  {
    $select_dp_service = $_POST['service_name_opt'];
    $service_desc = $_POST['Service_description'];
    $service_ctrl_select = new controller;
    $service_ctrl_select->Add_service_description_ctrl($select_dp_service,$service_desc);
  }
  //Delete Service Tab and data(option_del_id) 
  if(isset($_REQUEST['option_del_id']))
  {
       $option_delete=$_REQUEST['option_del_id'];
       $delete_obj= new controller;
       $delete_obj->service_delete($option_delete);
       header("location:add_service.php");
   }
   //Edit Service record Data(option_edit_id)
   if(isset($_REQUEST['edit_services']))
   {   $edit_service_id = $_REQUEST['option_edit_id'];
        
       $edit_select_dp_service = $_POST['service_name_opt'];
       $edit_service_desc = $_POST['Service_description'];
      
       $edit_obj= new controller;
       $edit_obj->service_edit($edit_select_dp_service,$edit_service_desc,$edit_service_id);
       
   }
   //Delete service list delete_service_list
   if(isset($_POST['delete_service_list'])){
      $id = $_POST['delete_service'];

      $delete_service = new controller;
      $delete_service->delete_service_list($id);
   }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <?php include('admin_include/inc_css.php'); ?>
    <?php include('admin_include/mass_delete.php') ?>
    <?php //include('admin_include/validation_js.php'); ?>
    <script type="text/javascript">
      $(document).ready(function(){

          $('.btn btn-default').click(function(){
              //validateForm();
              var names = $('#nameInput').val();
              var inputVal = new Array(names);

              var inputMessage = new Array("name");

              $('.error').hide();

              if(inputVal[0] == ""){
                  $('#nameLabel').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
              }
          });
      });

    </script>
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
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                       <div class="panel panel-info">
                            <div class="panel-heading">
                               Tab Form
                            </div>
                            <!-- Tab Added alert -->
                             <div class="alert alert-success fade in" id="flash-msg" style="display: none;">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Success!</strong> Your Tab Add successfully.
                            </div>
                            <!-- End Tab Added alert -->
                            <div class="panel-body">
                                <form role="form" method="post">
                                    <div class="input-group">
                                        <input type="text" placeholder="Please Enter Service-Tab" class="form-control" name="service_name" id="nameInput" value="" required="" />
                                        <span class="form-group input-group-btn">
                                            <button class="btn btn-default" type="submit" name="service" value="TabService" type="button">Go!</button>
                                        </span>
                                    </div>
                                </form>

                                <form method="post">
                                    <br>
                                    <div class="form-group">
                                        <label>Select Service</label>
                                        <?php if(isset($row_option))
                                              { ?>
                                                <input type="hidden" name="id" value="<?php echo $row_option['id']; ?>">
                                        <?php }?>
                                         <select class="form-control" name="service_name_opt">
                                            <?php while ($result = mysqli_fetch_assoc($get_services_drop)) {?>
                                                <?php if (isset($row_edit_option))
                                                      {?>
                                                        <option <?php if($row_edit_option['service_id']==$result['service_id'])
                                                                      {
                                                                        echo "selected="."selected";
                                                                      }
                                                                    ?> value="<?php echo $result["service_id"];?>"><?php echo $result["service_name"]; ?>
                                                        </option>
                                                        <?php
                                                    }else{   
                                                    echo '<option value="'.$result["service_id"].'">'.$result["service_name"].'</option>';
                                                 }
                                             } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Description</label>
                                        <div id="editor">
                                            <textarea id='edit' style="margin-top: 30px;" name="Service_description">
                                                <?php echo isset($row_option['service_description'])?$row_option['service_description']:''; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <?php if(isset($row_option)) {?>
                                        <button type="submit" type="submit" name="edit_services" value="edit_services_data" class="btn btn-info">Edit Data</button>
                                    <?php }else{?>
                                    <button type="submit" type="submit" name="add_services" value="add_services_data" class="btn btn-info">Add Data</button>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form method="POST">
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
                                              <!-- <input type="checkbox" name="mail[]" value="<?php echo $row_option_name['service_id']; ?>"> -->
                                              <div class="list-group-item">
                                                <input type="checkbox" name="delete_service[]" value="<?php echo $row_option_name['service_id']; ?>">
                                                  <?php echo $row_option_name['service_name']; ?>
                                              </div>    
                                         <?php } ?>
                                      </div>
                                      <!-- /.list-group -->
                                      <div class="col-md-4">
                                          <!-- <a href="#" class="btn btn-info btn-block">Select All </a> -->
                                      </div>
                                      <div class="col-md-4">
                                          <button type="submit" name="delete_service_list" value="hello_delete" class="btn btn-info btn-block">Delete</button>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                </div>
                <!--/.ROW-->
                <div>
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Service list
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                              <form action="" method="post">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Mass-Delete<br/><input type="checkbox" id="select_all" value=""/></th>
                                            <th width="5%">Id</th>
                                            <th width="25%">Service Name</th>
                                            <th width="25%">Content</th>
                                            <th width="13%">Createdat</th>
                                            <th width="13%">Updated</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php while ($option_details = mysqli_fetch_assoc($get_service_details)) { ?>
                                        <tr>
                                          <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $option_details['id']; ?>"></td>
                                            <td><?php echo $option_details['id']; ?></td>
                                            <td><?php echo $option_details['service_name']; ?></td>
                                            <td><div style="overflow-y:scroll; height:100px;"><?php echo $option_details['service_description']; ?></div></td>
                                            <td><?php echo $option_details['created']; ?></td>
                                            <td><?php echo $option_details['updated']; ?></td>
                                            <td>
                                                
                                              <a href="add_service.php?option_edit_id=<?php echo $option_details['id']; ?>" class="btn btn-primary">Edit</a>
                                                
                                              <a href="add_service.php?option_del_id=<?php echo $option_details['id']; ?>" onclick="return confirm('Are You Sure For Delete This Record?');" class="btn btn-danger">Delete</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <?php for ($i=1; $i<=$total_pages; $i++) {  
                                    echo  $pagLink = "<a class=".'btn btn-danger'." href='add_service.php?page=".$i."'>".$i."</a>";  
                                } ?> 
                                <br/><button class="btn btn-danger" type="submit" name="bulk_delete_submit"><i class="glyphicon glyphicon-home"></i>&nbsp;Mass Delete</button>
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


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="Editor/js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="Editor/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/help.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/print.min.js"></script>
  <script type="text/javascript" src="Editor/js/third_party/spell_checker.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/special_characters.min.js"></script>
  <script type="text/javascript" src="Editor/js/plugins/word_paste.min.js"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor()
    });
  </script>
 


</body>
</html>
