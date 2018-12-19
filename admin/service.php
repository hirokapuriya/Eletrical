<!DOCTYPE html>
<html>
<head>
  <title>Hello</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="http://parsleyjs.org/dist/parsley.js"></script>
</head>
<style>
 .box
 {
  width:100%;
  max-width:600px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
 input.parsley-success,
 select.parsley-success,
 textarea.parsley-success {
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 input.parsley-error,
 select.parsley-error,
 textarea.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 .parsley-errors-list {
   margin: 2px 0 3px;
   padding: 0;
   list-style-type: none;
   font-size: 0.9em;
   line-height: 0.9em;
   opacity: 0;

   transition: all .3s ease-in;
   -o-transition: all .3s ease-in;
   -moz-transition: all .3s ease-in;
   -webkit-transition: all .3s ease-in;
 }

 .parsley-errors-list.filled {
   opacity: 1;
 }
 
 .parsley-type, .parsley-required, .parsley-equalto{
  color:#ff0000;
 }
 
 </style>
<body>


<?php echo "This Is tray page"//require_once('auth.php'); ?>

<?php

error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include("controller.php");
//include("admin_include/inc_css.php");

$get_services_drop = mysqli_query($con,"SELECT * FROM service_tab_name");
$get_services_name = mysqli_query($con,"SELECT * FROM service_tab_name");
$get_service_details = mysqli_query($con,"SELECT * FROM `Service_tab_details`,`service_tab_name` WHERE service_name_opt = service_id");

/*if (isset($_POST["service"])) 
{
    // process the form contents...
  $nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
  $name = $address = $email = $howMany = "";
  $favFruit = array();


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["service_name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["service_name"];
    }

    if (empty($_POST["address"])) {
        $addrErr = "Missing";
    }
    else {
        $address = $_POST["address"];
    }

    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    }

    if (!isset($_POST["howMany"])) {
        $howManyErr = "You must select 1 option";
    }
    else {
        $howMany = $_POST["howMany"];
    }

    if (empty($_POST["favFruit"])) {
        $favFruitErr = "You must select 1 or more";
    }
    else {
        $favFruit = $_POST["favFruit"];
    }
}

}*/


  if(isset($_POST['service']))
  {
      $service_name = $_POST['service_name']; 
      $service_view= new controller;
      $service_view->Add_service_admin_ctrl($service_name); 
  }
  if(isset($_POST['add_services'])){
       
       $select_dp_service = $_POST['service_name_opt'];
       $service_desc = $_POST['Service_description'];
       $service_ctrl_select = new controller;
       $service_ctrl_select->Add_service_description_ctrl($select_dp_service,$service_desc);
     }
?>
<form role="form" method="post" action="" style="width: 50%;" id="validate_form">
    <div class="input-group">
      <span class="form-group input-group-btn">
        <input type="text" name="name" id="first_name" placeholder="Enter First Name" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control" /><span>
          
        <button class="btn btn-default" name="submit" id="submit" value="TabService" type="submit">Go!</button>
      </span>
    </div>
</form>

<!-- <form method="post">
<table>
    <?php while ($row = mysqli_fetch_assoc($get_services_name)) { ?>
      <tr>
        <td>
          <?php echo $row['service_name']; ?>  
        </td>
    </tr>  
      
    <?php } ?>
    
    <tr>
        <td>
            <select name="service_name_opt">
                <?php while ($result = mysqli_fetch_assoc($get_services_drop)) 
                {
                     echo '<option value='.$result["service_id"].'>'.$result["service_name"].'</option>';
                } ?>
            </select>
        </td>
    </tr>
    <tr>
      <td>
        <span>ggggg</span>
        <div id="editor">
              <textarea id='edit' style="margin-top: 30px;" name="Service_description"></textarea>
        </div>
        <span>ggggg</span>
      </td>

       <!- <td>
        </td>
        -> 
        <td><button class="btn btn-default" type="submit" name="add_services" value="add_services_data" type="button">Add Data</button></td>
    </tr>
</table>
</form>
 -->

<!-- <table>
  <tr>
    <td>Service_name</td>
    <td>Service_description</td>
  </tr>
  <?php while ($option_details = mysqli_fetch_assoc($get_service_details)) { ?>
    <tr>
      <td><?php echo $option_details['service_name']; ?></td>
      <td><?php echo $option_details['service_description']; ?></td>
    </tr>
<?php } ?>
  
</table> -->


  </body>
</html>
<script>  
$(document).ready(function(){  
    $('#validate_form').parsley();
 
 $('#validate_form').on('submit', function(event){
  event.preventDefault();
  if($('#validate_form').parsley().isValid())
  {
   $.ajax({
    url:"service.php",
    method:"POST",
    data:$(this).serialize(),
    beforeSend:function(){
     $('#submit').attr('disabled','disabled');
     $('#submit').val('Submitting...');
    },
    success:function(data)
    {
     $('#validate_form')[0].reset();
     $('#validate_form').parsley().reset();
     $('#submit').attr('disabled',false);
     $('#submit').val('Submit');
     alert(data);
    }
   });
  }
 });
});  
</script>