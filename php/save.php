<?php
	include('php/connection.php');

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$datos = true;
	$user = $_SESSION['user'];

	mysqli_query($connection,"INSERT INTO contactus (name,email,phone,message,subject) VALUES('".$name."','".$email."','".$phone."','".$message."','".$subject."')");
	$mensaj = "name = "+$name+" email = "+$email+" subject = "+$subject+" phone = "+$phone+" message = "+$message;

	if(mail($email,"New query",$mensaj))
		echo"<script type='text/javascript'>
	           alert('Message sent');
	        </script>";
	else
		echo"<script type='text/javascript'>
	           alert('Message not sent');
	        </script>";
	echo json_encode($datos);
	?>