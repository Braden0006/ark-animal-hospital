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

$petName2 = $_POST['pet_name2'];
$petAge2 = $_POST['pet_age2'];
$species2 = $_POST['species2'];
$breed2 = $_POST['breed2'];
$color2 = $_POST['pet_color2'];

$male2 = $_POST['male-female2'];
$female2 = $_POST['male-female2'];
$spayed2 = $_POST['spayed-neutered2'];
$neutered2 = $_POST['spayed-neutered2'];

$petName3 = $_POST['pet_name3'];
$petAge3 = $_POST['pet_age3'];
$species3 = $_POST['species3'];
$breed3 = $_POST['breed3'];
$color3 = $_POST['pet_color3'];

$male3 = $_POST['male-female3'];
$female3 = $_POST['male-female3'];
$spayed3 = $_POST['spayed-neutered3'];
$neutered3 = $_POST['spayed-neutered3'];

$petName4 = $_POST['pet_name4'];
$petAge4 = $_POST['pet_age4'];
$species4 = $_POST['species4'];
$breed4 = $_POST['breed4'];
$color4 = $_POST['pet_color4'];

$male4 = $_POST['male-female4'];
$female4 = $_POST['male-female4'];
$spayed4 = $_POST['spayed-neutered4'];
$neutered4 = $_POST['spayed-neutered4'];

$filePath = 'new-client.txt';

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

Email Address: $email
Place of Employment: $employment
Phone: $phone2

Pet Name: $petName
Pet Age: $petAge
Species: $species
Breed: $breed
Color: $color
Sex:
$male
$female
$spayed
$neutered

Pet Name 2: $petName2
Pet Age 2: $petAge2
Species 2: $species2
Breed 2: $breed2
Color 2: $color2
Sex:
$male2
$female2
$spayed2
$neutered2

Pet Name 3: $petName3
Pet Age 3: $petAge3
Species 3: $species3
Breed 3: $breed3
Color 3: $color3
Sex:
$male3
$female3
$spayed3
$neutered3

Pet Name 4: $petName4
Pet Age 4: $petAge4
Species 4: $species4
Breed 4: $breed4
Color 4: $color4
Sex:
$male4
$female4
$spayed4
$neutered4";

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

    $mail->addAttachment('new-client.txt');

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