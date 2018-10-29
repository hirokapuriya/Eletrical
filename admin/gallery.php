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
                   
                      <!-- <div class="form-group">
                        <label class="control-label col-lg-4">No Input</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Select file</span>
                                    <span class="fileupload-exists">Change</span>
                                    <input type="file">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                    </div>    
                  <div class="form-group">
                        <label class="control-label col-lg-4">Image Upload</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label class="control-label col-lg-12">Gallery Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                  <img src="assets/img/demoUpload.jpg" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;">
                                </div>

                                <div>
                                    <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                                <div class="form-group">
                                      <label>Enter Name</label>
                                      <input class="form-control" type="text">
                                </div>
                                <button type="submit" class="btn btn-info">Send Message </button>
                             </div>
                        </div>
                    </div>
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
                    <!--<div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           Text Editor Example
                        </div>
                        <div class="panel-body">
                          <h3> Breadcrumbs</h3>
                            <hr />
                            <ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Library</a></li>
  <li class="active">Data</li>
</ol>
                           
                            <h3>Pagination</h3>
                            <hr />
                            <ul class="pagination">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
                            <br />
                            <ul class="pagination">
  <li class="disabled"><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>
                            <h3>Pager </h3>
                            <hr />
                            <ul class="pager">
  <li><a href="#">Previous</a></li>
  <li><a href="#">Next</a></li>
</ul>
                            <br />
                            <ul class="pager">
  <li class="previous disabled"><a href="#">&larr; Older</a></li>
  <li class="next"><a href="#">Newer &rarr;</a></li>
</ul>

                            <h3>Badges</h3>
                            <hr />
                            <a href="#">Inbox <span class="badge">42</span></a>
                            <br /><br />
                            <ul class="nav nav-pills">
      <li class="active"><a href="#">Home <span class="badge">42</span></a></li>
      <li><a href="#">Profile</a></li>
      <li><a href="#">Messages <span class="badge">3</span></a></li>
    </ul>
    <br>
    <ul class="nav nav-pills nav-stacked" style="max-width: 260px;">
      <li class="active">
        <a href="#">
          <span class="badge pull-right">42</span>
          Home
        </a>
      </li>
      <li><a href="#">Profile</a></li>
      <li>
        <a href="#">
          <span class="badge pull-right">3</span>
          Messages
        </a>
      </li>
    </ul>
    <br>
    <button class="btn btn-primary" type="button">
      Messages <span class="badge">4</span>
    </button>



                            </div>
                        </div>
                    </div>-->
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
