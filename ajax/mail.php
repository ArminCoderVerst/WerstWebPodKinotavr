<?php
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	$subject = "=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";

	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html: charset=utf-8\r\n";

	$success = mail("Tatyana.180204082011@gmail.com", $subject, $message, $headers );
	echo $success;
?>