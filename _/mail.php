<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Course: $course Message: $message";
$recipient = "manigandan@dotlinedesigns.com";
$subject = "Contact Us form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo 'Thank You For Your Request We ll get back to you Shortly !   <br><br><a href="index.html" style="text-decoration:none;color:white;background:green;padding:10px;">CLICK HERE TO GO TO THE HOME PAGE</a>';


?>