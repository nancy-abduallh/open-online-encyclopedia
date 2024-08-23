<?php
session_start();
require_once'../controls/dbcon.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }
    if (isset($_GET['id'])) {
        $article_id = $_GET['id'];
    
        // Delete the article from the database
        $sql = "DELETE FROM article WHERE article_id = '$article_id'";
        if ($con->query($sql) === TRUE) {
            echo "Article deleted successfully";
        } else {
            echo "Error deleting article: " . $con->error;
        }
    } else {
        echo "Article ID not specified";
    }
    
    $con->close();
    
    // Redirect back to the editor dashboard
    header("Location: editor page.php");
    exit();
    ?>