<?php
	include('connection.php');
	 
	$passw = $_POST['passw'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$data = false;

	$validateU = mysqli_query($connection,"SELECT * FROM user WHERE email = '".$email."' ");
	if(mysqli_num_rows($validateU) < 1)
	{
		mysqli_query($connection,"INSERT INTO user (name,email,passw) VALUES('".$name."','".$email."','".$passw."')");
		$data = true;
	}
	
	echo json_encode($data);

?>