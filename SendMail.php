<?php
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsMail();

$mail->AddAddress("email@example.com");
$mail->Subject = "Test 1";
$mail->Body = "Test 1 of PHPMailer.";

if(!$mail->Send())
{
   echo "Error sending: " . $mail->ErrorInfo;;
}
else
{
   echo "Letter sent";
}
?>
