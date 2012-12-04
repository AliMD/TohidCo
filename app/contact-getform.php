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
			$recipient = "commercial@tohidkhorasan.com";
		break;
		case 'ma':
			$recipient = "finance@tohidkhorasan.com";
		break;
		case 'pl':
			$recipient = "planing@tohidkhorasan.com";
		break;
		case 'ed':
			$recipient = "office@tohidkhorasan.com";
		break;
		case 'qc':
			$recipient = "quality_control@tohidkhorasan.com";
		break;
		case 'tc':
			$recipient = "quality_assurance@tohidkhorasan.com";
		break;
		case 'en':
			$recipient = "engineering@tohidkhorasan.com";
		break;
		case 'ne':
			$recipient = "maintenance@tohidkhorasan.com";
		break;
		case 'to':
			$recipient = "produce@tohidkhorasan.com";
		break;
		case 'mn':
			$recipient = "managment@tohidkhorasan.com";
		break;
		case 'it':
			$recipient = "it@tohidkhorasan.com";
		break;
		default:
			$recipient = "info@tohidkhorasan.com";
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

?>