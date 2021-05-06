<?php
//include('msg.php');

if(isset($_POST['sendMessage'])) {
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$message = $_POST['message'];

	// Create the email and send the message
	$to = 'support@hullvillagehall.co.uk'; // Add your email address
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n Email: $email_address\n\nMessage:\n$message";
	$headers = "From: noreply@hullvillagehall.co.uk\n"; // This is the email address the generated message will be from.
	$headers .= "Reply-To: $email_address";
	$result = mail($to,$email_subject,$email_body,$headers);

	if(!$result){
		//echo mysqli_error($result) ;
		dangerMsg('There was an error.');
	}
	else{
		successMsg('Message Sent!');

	}

}
?>
