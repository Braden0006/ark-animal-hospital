<?php

$config = include("../config.php");

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = $config["smtp_host"];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $config["smtp_port"];

    $mail->Username = $config["smtp_username"];
    $mail->Password = $config["smtp_password"];

    $mail->setFrom($email, $name);
    $mail->addAddress($config["smtp_username"], "Braden");

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();

    echo "Email sent.";
} catch (Exception) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}