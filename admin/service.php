<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
//echo "hello service";
include("controller.php");

$get_services_drop = mysqli_query($con,"SELECT * FROM service_tab_name");
$get_services_name = mysqli_query($con,"SELECT * FROM service_tab_name");



  if(isset($_POST['service']))
  {
      // /var_dump($_POST['service']); die('789');
      $service_name = $_POST['service_name']; 
      //var_dump($service_name); die('klklklk');
      
      $service_view= new controller;
      $service_view->Add_service_admin_ctrl($service_name); 
  }
  if(isset($_POST['add_services'])){
        var_dump($_POST['service_name']); die('7777');
        var_dump($_POST['Service_description']); die('oooo');
  }

?>
<form role="form" method="post">
    <div class="input-group">
      <span class="form-group input-group-btn">
        <input type="text" placeholder="Enter Service Name" class="form-control" name="service_name" />
        <button class="btn btn-default" type="submit" name="service" value="TabService" type="button">Go!</button>
      </span>
    </div>
</form>

<form method="post">
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
            <select name="service_name_dp">
                <?php while ($result = mysqli_fetch_assoc($get_services_drop)) 
                {
                     echo '<option value='.$result["service_id"].'>'.$result["service_name"].'</option>';
                } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            <textarea cols="30" rows="30" name="Service_description"></textarea>
        </td>
        <td><button class="btn btn-default" type="submit" name="add_services" value="add_services_data" type="button">Add Data</button></td>
    </tr>
</table>
</form>