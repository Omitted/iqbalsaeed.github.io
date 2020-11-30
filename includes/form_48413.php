<?php	
	if (empty($_POST['name_48413']) && strlen($_POST['name_48413']) == 0 || empty($_POST['email_48413']) && strlen($_POST['email_48413']) == 0 || empty($_POST['message_48413']) && strlen($_POST['message_48413']) == 0)
	{
		return false;
	}
	
	$name_48413 = $_POST['name_48413'];
	$email_48413 = $_POST['email_48413'];
	$message_48413 = $_POST['message_48413'];
	$optin_48413 = $_POST['optin_48413'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_48413: $name_48413 \nEmail_48413: $email_48413 \nMessage_48413: $message_48413 \nOptin_48413: $optin_48413 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_48413";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>