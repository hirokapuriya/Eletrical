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
	<table>
		<tr>
			<th>id</th>
			<!-- <th>name</th>
			<th>email</th>
			<th>contact</th>
			 --><th>message</th>
		</tr>
		<?php 
		$get_service_data_grid = new controller();
        $get_service_data_done = $get_service_data_grid->show_service_form_data_ctrl();

        while ($row = mysqli_fetch_assoc($get_service_data_done)) { 
        	if($row['message']){
        ?>
        	<tr>
        		<td><?php echo $row['id']; ?></td>
        		<td><?php echo $row['message']; ?></td>
        	</tr>
        <?php }else{
        	
        }}exit();
        //var_dump($get_service_data_done); die('opopopop');

		?>
	</table>
	<table>
		<tr>
			<th>id</th>
			<!-- <th>name</th>
			<th>email</th>
			<th>contact</th>
			 --><th>message</th>
		</tr>
		<?php 
		$get_service_data_grid = new controller();
        $get_service_data_done = $get_service_data_grid->show_service_form_data_ctrl();

        while ($row = mysqli_fetch_assoc($get_service_data_done)) { 
        	if($row['email']){
        ?>
        	<tr>
        		<td><?php echo $row['id']; ?></td>
        		<td><?php echo $row['email']; ?></td>
        	</tr>
        <?php }else{
        	exit();
        }}
        //var_dump($get_service_data_done); die('opopopop');

		?>
	</table>
</body>
</html>