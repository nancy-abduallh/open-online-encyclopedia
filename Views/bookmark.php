<?php session_start();
 require_once'../controls/dbcon.php'; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_id = $_SESSION['user_id'];
        $page_url = $_POST['page_url'];
        $page_title = $_POST['page_title'];
    
        // Insert bookmark into database (without using bindParam)
        $sql = "INSERT INTO bookmark (userid, page_url, page_title) VALUES ('$user_id', '$page_url', '$page_title')";
    
        if ($con->query($sql) === TRUE) {
            echo "Page bookmarked successfully!";
            header("Location: software engineering.php");
        } else {
            echo "Error bookmarking page: " . $con->error;
        }
    }








    ?>