<?php

$config = include("../config.php");

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$firstName = $_POST['first_name'];
$middleInitial = $_POST['middle_initial'];
$lastName = $_POST['last_name'];

$spouseFirstName = $_POST['spouse_first_name'];
$spouseMiddleInitial = $_POST['spouse_middle_initial'];
$spouseLastName = $_POST['spouse_last_name'];

$physicalAddress = $_POST['physical_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];

$mailingAddress = $_POST['mailing_address-2'];
$city2 = $_POST['city-2'];
$state2 = $_POST['state-2'];
$zip2 = $_POST['zip-2'];

$phone = $_POST['phone'];
$cell = $_POST['cell'];
$spousePhone = $_POST['spouse_phone'];

$email = $_POST['email'];
$employment = $_POST['employment'];
$phone2 = $_POST['phone-2'];

$petName = $_POST['pet_name'];
$petAge = $_POST['pet_age'];
$species = $_POST['species'];
$breed = $_POST['breed'];
$color = $_POST['pet_color'];

$male = $_POST['male-female'];
$female = $_POST['male-female'];
$spayed = $_POST['spayed-neutered'];
$neutered = $_POST['spayed-neutered'];

$filePath = 'data.txt';

$data = "First Name: $firstName
Middle Initial: $middleInitial
Last Name: $lastName

Spouse First Name: $spouseFirstName
Spouse Middle Initial: $spouseMiddleInitial
Spouse Last Name: $spouseLastName

Physical Address: $physicalAddress
City: $city
State: $state
Zip: $zip

Mailing Address: $mailingAddress
City2: $city2
State2: $state2
Zip2: $zip2

Phone: $phone
Cell: $cell
Spouses Phone: $spousePhone

Pet Name: $petName
Pet Age: $petAge
Species: $species
Breed: $breed
Color: $color

Sex:
$male
$female
$spayed
$neutered";

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