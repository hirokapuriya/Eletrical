<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);  
include_once('controller.php');

if (isset($_REQUEST['ragister'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$message = $_POST['message'];
	$comman_drive = $_POST['comman-drive'];
	$drive_no = $_POST['drive_no'];
	$capcity = $_POST['capcity'];
	$machine_name = $_POST['machine_name'];


	$registartion = new controller;
	$registartion->service_register($name,$email,$message,$contact,$comman_drive,$drive_no,$capcity,$machine_name); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Form</title>
</head>
<body>
	<form method="post">
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>Message</td>
				<td><input type="text" name="message"></td>
			</tr>
			<tr>
				<td>Comman Drive</td>
				<td><input type="text" name="comman-drive"></td>
			</tr>
			<tr>
				<td>Drive-No</td>
				<td><input type="text" name="drive_no"></td>
			</tr>
			<tr>
				<td>Capcity</td>
				<td><input type="text" name="capcity"></td>
			</tr>
			<tr>
				<td>Machin-Name</td>
				<td><input type="text" name="machine_name"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="ragister" value="OK"></td>
			</tr>
		</table>
	</form>
</body>
</html>