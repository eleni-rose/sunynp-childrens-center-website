<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];


// Note - need to include the PHPMailer files for things to actually work!

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-mail.outlook.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "example";
$mail->Password = "secret";

$mail->setFrom($email, $name);
$mail->addAddress("eloonku@gmail.com");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");

?>