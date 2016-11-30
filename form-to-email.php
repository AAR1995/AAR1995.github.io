<?php
	$user_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$to = "almazanruelas@gmail.com";

	$headers = "From: $to \r\n";

	$headers .= "Reply-To: $user_email \r\n";

	mail($to,$subject,$message,$headers);
?>