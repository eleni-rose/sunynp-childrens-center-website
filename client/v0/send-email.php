<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


// Note - need to include the PHPMailer files for things to actually work!

use PHPMailer\PHPMailer\PHPMailer;
require('SMTP.php');
require('PHPMailer.php');
require('Exception.php');

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug  = 1;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "secret";
$mail->Password = "secret";

$mail->setFrom($email, $name);

// Email to be sent to
$mail->addAddress("eloonku@gmail.com");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");

?>