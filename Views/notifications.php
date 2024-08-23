<?php

// session_start();
//  require_once'../Models/users.php'; 
 require_once'../controls/dbcon.php'; 
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$userId = $_SESSION['user_id'];

// Fetch notifications for the current user
$sql = "SELECT message FROM notifications WHERE user_id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($message);

// Display notifications
while ($stmt->fetch()) {
    echo "  <p>$message </p>";
}

$stmt->close();
$con->close();
?>
