
<?php
session_start();
 require_once'../Models/users.php'; 
require_once '../controls/dbcon.php';

?>
<?php

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



if (isset($_POST['delete_user'])) {
    

    $user_id = $_GET['user_id'];

    // Prepare and execute SQL query to delete user
    $sql = "DELETE FROM user WHERE user_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i",$user_id);

    if ($stmt->execute()) {
        // Redirect back to editor dashboard after successful deletion
        header("Location: editor page.php?message=User deleted successfully.");
        exit;
    } else {
        echo "Error deleting user: " . $con->error;
    }

    $stmt->close();
    $con->close();
} else {
    header("Location: editor page.php"); // Redirect back to editor dashboard if delete button was not clicked
    exit;
}
?>