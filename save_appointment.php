<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$number = $_POST['number'] ?? '';
$message = $_POST['message'] ?? '';

$date = date("Y-m-d H:i:s");

$data  = "-----------------------------\n";
$data .= "Date: $date\n";
$data .= "Name: $name\n";
$data .= "Email: $email\n";
$data .= "Subject: $subject\n";
$data .= "Phone: $number\n";
$data .= "Message: $message\n";

file_put_contents("appointment.txt", $data, FILE_APPEND);

echo "Message Saved Successfully";
?>