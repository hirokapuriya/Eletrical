<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);  
include('controller.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body>
	<center>Simple Table</center>
    <h3>Message Form</h3>
	<table>
		<tr>
			<th>id</th>
			<th>message</th>
		</tr>
		<?php
        $get_service_data_grid = new controller();
        $get_service_data_done = $get_service_data_grid->show_service_form_data_ctrl();

        while ($row = mysqli_fetch_assoc($get_service_data_done)) {
        	if($row['message'] !== ""){
        ?>
        	<tr>

        		<td><?php echo $row['message']; ?></td>
        	</tr>
        <?php }}

        ?>
	</table>
        <h3>Email Form</h3>
	<table>
		<tr>
			<th>id</th>
            <th>Email</th>
        </tr>
		<?php

		$get_service_data_grid1 = new controller();
        $get_service_data_done1 = $get_service_data_grid1->show_service_form_data_ctrl();
        while ($row1 = mysqli_fetch_assoc($get_service_data_done1)) {
        	if($row1['email'] !== ""){
        ?>
        	<tr>

        		<td><?php echo $row1['email']; ?></td>
        	</tr>
        <?php }} ?>
	</table>
    <h3>Contact Form</h3>
    <table>
        <tr>
            <th>Contact</th>
        </tr>
        <?php
        $get_service_data_grid11 = new controller();
        $get_service_data_done11 = $get_service_data_grid11->show_service_form_data_ctrl();

        while ($row11 = mysqli_fetch_assoc($get_service_data_done11)) {
        if($row11['contact'] !== ""){
        ?>
        <tr>
            <td><?php echo $row11['contact']; ?></td>
        </tr>
        <?php }} ?>
    </table>
</body>
</html>