<?php
// Hardcoded username and password (replace these with your actual credentials)
$validUsername = 'admin';
$validPassword = 'admin';

// Retrieve user input
$inputUsername = isset($_POST['username']) ? $_POST['username'] : '';
$inputPassword = isset($_POST['password']) ? $_POST['password'] : '';

// Check if the input credentials match the hardcoded values
if ($inputUsername === $validUsername && $inputPassword === $validPassword) {
    // Successful login
    session_start();
    $_SESSION['username'] = $validUsername; // You can store other user-related information in the session if needed
    header('Location: manageProducts.php'); // Redirect to the admin panel after successful login
    exit();
} else {
    // Failed login
    header('Location: login.php?error=1'); // Redirect back to the login page with an error parameter
    exit();
}
