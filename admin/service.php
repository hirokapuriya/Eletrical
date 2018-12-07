<?php //require_once('auth.php'); ?>

<?php
error_reporting(E_ALL); 
ini_set('display_errors', TRUE);  
include("controller.php");
//include("admin_include/inc_css.php");

$get_services_drop = mysqli_query($con,"SELECT * FROM service_tab_name");
$get_services_name = mysqli_query($con,"SELECT * FROM service_tab_name");
$get_service_details = mysqli_query($con,"SELECT * FROM `Service_tab_details`,`service_tab_name` WHERE service_name_opt = service_id");

if($_GET['service'])
{

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

       <!-- <td>
        </td>
        --> 
        <td><button class="btn btn-default" type="submit" name="add_services" value="add_services_data" type="button">Add Data</button></td>
    </tr>
</table>
</form>


<table>
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
  
</table>


  