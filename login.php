<?php
// login.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example: Perform validation and authentication
    if ($username === 'your_username' && $password === 'your_password') {
        // Successful login, redirect to a welcome page or perform desired actions
        header("Location: dashboard.html");
        exit;
    } else {
        // Login failed, show error message
        echo "Invalid username or password, Please try again or register down here if you have never registered";
    }
}
?>
