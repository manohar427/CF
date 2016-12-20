


<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$message = $_POST['message'];
$security_code = $_POST['security_code'];
if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['security_code'] ) || strcasecmp($_SESSION['security_code'], $_POST['security_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";		
	}
}

$formcontent=" From: $name \n Email: $email \n Phone: $number \n Message: $message";
$recipient = "manigandan@dotlinedesigns.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>