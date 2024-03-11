<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
    // User is not logged in, redirect to login page
    header("Location: login.html");
    exit;
}

// User is logged in, allow access to website content

// Display website content here
echo "Welcome, " . $_SESSION["username"] . "! You are logged in.";

// Add your website's content below this line
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION["username"]; ?>! You are logged in.</h1>
    
    <!-- Link/button to access the dashboard -->
    <a href="dashboard.php">Go to Dashboard</a>
</body>
</html>