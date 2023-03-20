<?php

// Global variables obtained from input in contact.html
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Note - need to include the PHPMailer files for things to actually work!
use PHPMailer\PHPMailer\PHPMailer;
require('SMTP.php');
require('Exception.php');
require('PHPMailer.php');

$mail = new PHPMailer(true);

try {

    // SMTP server settings
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug  = 1;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = "hothotspicy69@gmail.com";
    $mail->Password = "flnnkqrwhlgietbv";

    // SMTP recipients
    $mail->setFrom('contact@example.net', $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress("eloonku@gmail.com", 'Eleni');

    // Email content
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    header("Location: sent.html");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}