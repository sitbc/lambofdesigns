<?php

function post_captcha($user_response) {
	$fields_string = '';
	$fields = array(
		'secret' => '6LfCux0UAAAAAGwyNP9mC_IchBHATuMFQvlkgY-g',
		'response' => $user_response
	);
	foreach($fields as $key=>$value)
	$fields_string .= $key . '=' . $value . '&';
	$fields_string = rtrim($fields_string, '&');

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
	curl_setopt($ch, CURLOPT_POST, count($fields));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

	$result = curl_exec($ch);
	curl_close($ch);

	return json_decode($result, true);
}

// Call the function post_captcha
$res = post_captcha($_POST['g-recaptcha-response']);

if (!$res['success']) {
	// What happens when the CAPTCHA wasn't checked
	echo 'captcha';
} else {
	// If CAPTCHA is successfully completed...
	$subject = $_REQUEST['subject'] . 'Message received through the website'; // Subject of your email
	$to = "peter@lambofdesigns.com";  //Recipient's E-mail
	$charset="UTF-8";
	$ctencoding="8bit";
	$email_title = "Message";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: " . $_REQUEST['emailaddress'] . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	
	$message .= "Content-Type: text/html; charset=$charset\n";
	$message .= "Content-Transfer-Encoding: $ctencoding\n\n";
	$message .= "<h2>$email_title:</h2>";
	$message .= 'Name: ' . $_REQUEST['name'] . "<br>";
	$message .= 'Message: ' . $_REQUEST['message'];
	
	if (@mail($to, $subject, $message, $headers))
	{
		// Transfer the value 'sent' to ajax function for showing success message.
		echo 'sent';
	}
	else
	{
		// Transfer the value 'failed' to ajax function for showing error message.
		echo 'failed';
	}
}




?>