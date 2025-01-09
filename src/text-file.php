<?php

$config = include("../config.php");

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$firstName = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : "";
$middleInitial = isset($_POST['middle_initial']) ? htmlspecialchars($_POST['middle_initial']) : "";
$lastName = isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : "";

$spouseFirstName = isset($_POST['spouse_first_name']) ? htmlspecialchars($_POST['spouse_first_name']) : "";
$spouseMiddleInitial = isset($_POST['spouse_middle_initial']) ? htmlspecialchars($_POST['spouse_middle_initial']) : "";
$spouseLastName = isset($_POST['spouse_last_name']) ? htmlspecialchars($_POST['spouse_last_name']) : "";

$physicalAddress = isset($_POST['physical_address']) ? htmlspecialchars($_POST['physical_address']) : "";
$city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : "";
$state = isset($_POST['state']) ? htmlspecialchars($_POST['state']) : "";
$zip = isset($_POST['zip']) ? htmlspecialchars($_POST['zip']) : "";

$mailingAddressYesNo = $_POST['yes-no'];

$mailingAddress = isset($_POST['mailing_address-2']) ? htmlspecialchars($_POST['mailing_address-2']) : "";
$city2 = isset($_POST['city-2']) ? htmlspecialchars($_POST['city-2']) : "";
$state2 = isset($_POST['state-2']) ? htmlspecialchars($_POST['state-2']) : "";
$zip2 = isset($_POST['zip-2']) ? htmlspecialchars($_POST['zip-2']) : "";

$phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "";
$cell = isset($_POST['cell']) ? htmlspecialchars($_POST['cell']) : "";
$spousePhone = isset($_POST['spouse_phone']) ? htmlspecialchars($_POST['spouse_phone']) : "";

$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
$employment = isset($_POST['employment']) ? htmlspecialchars($_POST['employment']) : "";
$phone2 = isset($_POST['phone-2']) ? htmlspecialchars($_POST['phone-2']) : "";

$petName = isset($_POST['pet_name']) ? htmlspecialchars($_POST['pet_name']) : "";
$petAge = isset($_POST['pet_age']) ? htmlspecialchars($_POST['pet_age']) : "";
$species = isset($_POST['species']) ? htmlspecialchars($_POST['species']) : "";
$breed = isset($_POST['breed']) ? htmlspecialchars($_POST['breed']) : "";
$color = isset($_POST['pet_color']) ? htmlspecialchars($_POST['pet_color']) : "";

$gender = $_POST['male-female'];
$spayedOrNeutered = $_POST['spayed-neutered'];

$petName2 = isset($_POST['pet_name2']) ? htmlspecialchars($_POST['pet_name2']) : "";
$petAge2 = isset($_POST['pet_age2']) ? htmlspecialchars($_POST['pet_age2']) : "";
$species2 = isset($_POST['species2']) ? htmlspecialchars($_POST['species2']) : "";
$breed2 = isset($_POST['breed2']) ? htmlspecialchars($_POST['breed2']) : "";
$color2 = isset($_POST['pet_color2']) ? htmlspecialchars($_POST['pet_color2']) : "";

$gender2 = $_POST['male-female2'];
$spayedOrNeutered2 = $_POST['spayed-neutered2'];

$petName3 = isset($_POST['pet_name3']) ? htmlspecialchars($_POST['pet_name3']) : "";
$petAge3 = isset($_POST['pet_age3']) ? htmlspecialchars($_POST['pet_age3']) : "";
$species3 = isset($_POST['species3']) ? htmlspecialchars($_POST['species3']) : "";
$breed3 = isset($_POST['breed3']) ? htmlspecialchars($_POST['breed3']) : "";
$color3 = isset($_POST['pet_color3']) ? htmlspecialchars($_POST['pet_color3']) : "";

$gender3 = $_POST['male-female3'];
$spayedOrNeutered3 = $_POST['spayed-neutered3'];

$petName4 = isset($_POST['pet_name4']) ? htmlspecialchars($_POST['pet_name4']) : "";
$petAge4 = isset($_POST['pet_age4']) ? htmlspecialchars($_POST['pet_age4']) : "";
$species4 = isset($_POST['species4']) ? htmlspecialchars($_POST['species4']) : "";
$breed4 = isset($_POST['breed4']) ? htmlspecialchars($_POST['breed4']) : "";
$color4 = isset($_POST['pet_color4']) ? htmlspecialchars($_POST['pet_color4']) : "";

$gender4 = $_POST['male-female4'];
$spayedOrNeutered4 = $_POST['spayed-neutered4'];

$filePath = 'new-client.txt';

$petData = [
    'Pet Name' => $petName,
    'Pet Age' => $petAge,
    'Species' => $species,
    'Breed' => $breed,
    'Color' => $color,
    'Sex' => $gender . " " . $spayedOrNeutered,
];

$data = "Client Info:\n\n";
if (!empty($firstName)) {
    $data .= "First Name: $firstName\n";
}

if (!empty($middleInitial)) {
    $data .= "Middle Initial: $middleInitial\n";
}

if (!empty($lastName)) {
    $data .= "Last Name: $lastName\n";
}

if (!empty($spouseFirstName)) {
    $data .= "Spouse First Name: $spouseFirstName\n";
}

if (!empty($spouseMiddleInitial)) {
    $data .= "Spouse Middle Initial: $spouseMiddleInitial\n";
}

if (!empty($spouseLastName)) {
    $data .= "Spouse Last Name: $spouseLastName\n";
}

if (!empty($physicalAddress)) {
    $data .= "Address: $physicalAddress\n";
}

if (!empty($city)) {
    $data .= "City: $city\n";
}

if (!empty($state)) {
    $data .= "State: $state\n";
}

if (!empty($zip)) {
    $data .= "Zip: $zip\n";
}

if (!empty($mailingAddressYesNo)) {
    $data .= "Mailing Address the same as physical address?: $mailingAddressYesNo\n";
}

if (!empty($mailingAddress)) {
    $data .= "Mailing Address: $mailingAddress\n";
}

if (!empty($city2)) {
    $data .= "Mailing Address City: $city2\n";
}

if (!empty($state2)) {
    $data .= "Mailing Address State: $state2\n";
}

if (!empty($zip2)) {
    $data .= "Mailing Address Zip: $zip2\n";
}

if (!empty($phone)) {
    $data .= "Phone: $phone\n";
}

if (!empty($cell)) {
    $data .= "Cell: $cell\n";
}

if (!empty($spousePhone)) {
    $data .= "Spouse Phone: $spousePhone\n";
}

if (!empty($email)) {
    $data .= "Email: $email\n";
}

if (!empty($employment)) {
    $data .= "Place of Employment: $employment\n";
}

if (!empty($phone2)) {
    $data .= "Place of Employment Phone: $phone2\n";
}

$data .= "\n\n\n\nPet Info:\n\n";
foreach ($petData as $key => $value) {
    $data .= "$key: $value\n";
}

$data .= "\n";

if (!empty($petName2)) {
    $data .= "Second Pet Name: $petName2\n";

    if (!empty($petAge2)) {
        $data .= "Second Pet Age: $petAge2\n";
    }

    if (!empty($species2)) {
        $data .= "Species: $species2\n";
    }

    if (!empty($breed2)) {
        $data .= "Breed: $breed2\n";
    }

    if (!empty($color2)) {
        $data .= "Color: $color2\n";
    }

    if (!empty($gender2)) {
        $data .= "Sex: " . $gender2 . " " . $spayedOrNeutered2 . "\n";
    }
}

$data .= "\n";

if (!empty($petName3)) {
    $data .= "Third Pet Name: $petName3\n";

    if (!empty($petAge3)) {
        $data .= "Third Pet Age: $petAge3\n";
    }

    if (!empty($species3)) {
        $data .= "Species: $species3\n";
    }

    if (!empty($breed3)) {
        $data .= "Breed: $breed3\n";
    }

    if (!empty($color3)) {
        $data .= "Color: $color3\n";
    }

    if (!empty($gender3)) {
        $data .= "Sex: " . $gender3 . " " . $spayedOrNeutered3 . "\n";
    }
}

$data .= "\n";

if (!empty($petName4)) {
    $data .= "Fourth Pet Name: $petName4\n";

    if (!empty($petAge4)) {
        $data .= "Fourth Pet Age: $petAge4\n";
    }

    if (!empty($species4)) {
        $data .= "Species: $species4\n";
    }

    if (!empty($breed4)) {
        $data .= "Breed: $breed4\n";
    }

    if (!empty($color4)) {
        $data .= "Color: $color4\n";
    }

    if (!empty($gender4)) {
        $data .= "Sex: " . $gender4 . " " . $spayedOrNeutered4 . "\n";
    }
}

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