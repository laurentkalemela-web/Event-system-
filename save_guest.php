<?php

$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$eventname = $_POST['eventname'];
$status = $_POST['status'];

$data =
$fullname . "|" .
$phone . "|" .
$email . "|" .
$eventname . "|" .
$status . "\n";

file_put_contents(
"data/guests.txt",
$data,
FILE_APPEND
);

echo "Guest Added Successfully";

?>