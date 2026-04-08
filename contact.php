<?php
   include("PHPMailerAutoload.php");
$to      = 'anur@mailinator.com';
$subject = 'the subject';
$message = 'hemendra';
$headers = 'From: anu@mailinator.com';

$sent = mail($to, $subject, $message, $headers);

//print_r($sent);
//exit;

if($sent!=''){
echo "msg was sent successfully";
	
}else{
 echo "not sent";
}
?>