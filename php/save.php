<?php
	include('php/connection.php');

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$data = true;
	$user = $_SESSION['user'];

	mysqli_query($connection,"INSERT INTO contactus (name,email,phone,message,subject) VALUES('".$name."','".$email."','".$phone."','".$message."','".$subject."')");
	$message = "name = "+$name+" email = "+$email+" phone = "+$phone+" message = "+$message+" subject = "+$subject;

	if(mail($email,"New query",$message))
		echo"<script type='text/javascript'>
	           alert('Message sent');
	        </script>";
	else
		echo"<script type='text/javascript'>
	           alert('Message not sent');
	        </script>";
	echo json_encode($data);
	
	?>