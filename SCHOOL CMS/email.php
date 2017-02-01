<?php
	require("phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = "sigmaitsolution.ipage.com";
	$mail->From = "info@arunupadhayay.com.np";
	$mail->FromName  =  "Arun Kumar";
	$mail->AddAddress($_POST['email']);
//	$mail->AddAddress("recipient_2@domain.com");
 
	$mail->SMTPAuth = "true";
	$mail->Username = "info@arunupadhayay.com.np";
	$mail->Password =  "my_@12#Arun";
	$mail->Port  =  "25";
 	$mail->Subject = $_POST['subject'];;
	$mail->Body = $_POST['message'];
	$mail->WordWrap = 50;	
//	$mail->AddAttachment("images/1.jpg");   
	if(!$mail->Send())
	{
		echo 'Message was not sent.';
		echo 'Mailer error: ' . $mail->ErrorInfo;
	}
	else
	{
		echo 'Message Send Successfully';
	}
 
?>	