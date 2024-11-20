<?php

$config = include("../config.php");

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$firstName = $_POST['first_name'];
$middleInitial = $_POST['middle_initial'];
$lastName = $_POST['last_name'];

$filePath = 'data.txt';

$data = "First Name: $firstName
Middle Initial: $middleInitial
Last Name: $lastName";

$fileHandle = fopen($filePath, 'a');
ftruncate($fileHandle, 0);
fclose($fileHandle);

$fileHandle = fopen($filePath, 'a');
fwrite($fileHandle, $data);
fclose($fileHandle);

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = $config["smtp_host"];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $config["smtp_port"];

    $mail->Username = $config["smtp_username"];
    $mail->Password = $config["smtp_password"];

    $mail->addAddress($config["smtp_username"], "Braden");

    $mail->addAttachment('data.txt');

    $mail->Subject = 'You have a new Client Form!';
    $mail->Body = 'Here is your newly submitted client form:';

    $mail->send();

    echo "Message has been sent.";
} catch (Exception) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

$fileHandle = fopen($filePath, 'a');
ftruncate($fileHandle, 0);
fclose($fileHandle);