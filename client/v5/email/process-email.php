<?php

// Global variables obtained from input in /views/contact.php 
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Always include the following PHPMailer files
use PHPMailer\PHPMailer\PHPMailer;
require('SMTP.php');
require('Exception.php');
require('PHPMailer.php');

$mail = new PHPMailer(true);

// Check if form input matches a URL pattern via regular expression
function validateInput($input) {
    $pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
    return preg_match($pattern, $input);
}

try {

    // SMTP server settings
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug  = 1;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = "secret";
    $mail->Password = "secret";

    // SMTP recipients
    $mail->setFrom('contact@example.net', $name);
    $mail->addReplyTo($email, $name);
    $mail->addAddress("secret");

    // Email content
    $mail->Subject = $subject;
    $mail->Body = $message;

    // If message contains a link, email will not send
    if (validateInput($name) || validateInput($subject) || validateInput($message)) {
        die("Links are not allowed in the message box!");
    } else {
        $mail->send();
        header("Location: ../contact-success.html");
    }

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
