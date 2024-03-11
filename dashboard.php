<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - P.C.E.A YOUTH PORTAL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome to Your Dashboard</h1>
        <a href="logout.php">Logout</a>
    </header>
    
    <main>
        <!-- Dashboard content goes here -->
    </main>

    <footer>
        <p>&copy; 2024 khb Portal</p>
    </footer>
</body>
</html>
