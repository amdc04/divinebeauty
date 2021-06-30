<?php
	include('connection.php');
		
	$type = $_POST['type'];
	$date = $_POST['date'];
	$data = true;	
	$user = $_SESSION['user'];

	mysqli_query($connection,"INSERT INTO bussines (reservation,date,user,cond) VALUES('".$type."','".$date."','".$user."','appointment')");
	$message = "Reservation = "+$type+" date = "+$date;

	if(mail($user,"New Reservation",$message))
		echo"<script type='text/javascript'>
	           alert('Message sent');
	        </script>";
	else
		echo"<script type='text/javascript'>
	           alert('Message not sent');
	        </script>";
	echo json_encode($data);

?>