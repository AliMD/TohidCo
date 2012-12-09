<?php

if ( isset($_REQUEST['submit']) ) {
	
	$department = $_REQUEST['department'];
	$fullName = $_REQUEST['fullname'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	
	$header = "From: $fullName &#60;$email&#62;";
	$messageBody = 
"Name: $fullName<br />
Phone: $phone<br />
<br />
$message";
	
	switch ( $department ) {
		case 'ac':
			$recipient = "commercial@tohid.co";
		break;
		case 'ma':
			$recipient = "finance@tohid.co";
		break;
		case 'pl':
			$recipient = "planing@tohid.co";
		break;
		case 'ed':
			$recipient = "office@tohid.co";
		break;
		case 'qc':
			$recipient = "quality_control@tohid.co";
		break;
		case 'tc':
			$recipient = "quality_assurance@tohid.co";
		break;
		case 'en':
			$recipient = "engineering@tohid.co";
		break;
		case 'ne':
			$recipient = "maintenance@tohid.co";
		break;
		case 'to':
			$recipient = "produce@tohid.co";
		break;
		case 'mn':
			$recipient = "managment@tohid.co";
		break;
		case 'it':
			$recipient = "it@tohid.co";
		break;
		case 'web':
			$recipient = "support@1dws.com";
		break;
		default:
			$recipient = "info@tohid.co";
	}
	
	@mail( $recipient ,$subject, $messageBody, $header );
	
	if ( $_REQUEST['submit'] != 'ارسال فرم' ) {
		header( "Location: contact-us.php?sent" );
	} else {
		header( "Location: contact-us_fa.php?sent" );
	}
	
} else {
	if ( $_REQUEST['submit'] != 'ارسال فرم' ) {
		header( "Location: contact-us.php?conterr" );
	} else {
		header( "Location: contact-us_fa.php?conterr" );
	}
}
