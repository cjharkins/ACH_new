<?php

$errorMSG = "";

$name = $_POST["name"];
$email = $_POST["email"];
$msg_subject = $_POST["msg_subject"];
$message = $_POST["message"];

//Add your email here
$EmailTo = "charkins@nossi.edu";
$Subject = $msg_subject;

$email_message = $message;

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: ' . $_POST['email'] . "\r\n";
	// $headers .= 'Cc:' . "\r\n";


// prepare email body text
$Body = "";
// $Body .= "Name: ";
// $Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $email_message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body,$headers);

// redirect to success page

?>