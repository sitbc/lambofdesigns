<?php
function isValid() 
{
    try {

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = ['secret'   => '6LfCux0UAAAAAGwyNP9mC_IchBHATuMFQvlkgY-g',
                 'response' => $_POST['g-recaptcha-response'],
                 'remoteip' => $_SERVER['REMOTE_ADDR']];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data) 
            ]
        ];

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result)->success;
    }
    catch (Exception $e) {
        return null;
    }
}

if (isValid()){
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
} elseif (!isValid()) {
	echo 'robot';
} else {
	echo 'error';
}

?>