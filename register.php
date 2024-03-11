<?php
// Connect to your database (assuming MySQL)
$mysqli = new mysqli("localhost", "username", "password", "database");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["password"];

    // Perform data validation and sanitization

    // Insert data into the database
    $sql = "INSERT INTO users (username,phonenumber,password) VALUES ('$username', '$phonenumber', '$password')";
    if ($mysqli->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Close database connection
    $mysqli->close();
}
?>
