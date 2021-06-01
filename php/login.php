<?php
	include('connection.php');
		
	$email = $_POST['email'];
	$passw = $_POST['passw'];
	$data = true;	

	$validateU = mysqli_query($connection,"SELECT * FROM user WHERE email = '".$email."' AND  passw = '".$passw."'");
	if(mysqli_num_rows($validateU) > 0)
		$_SESSION['user'] = $email;
	else{
		$data = false;
	}
	
	echo json_encode($data);

?>