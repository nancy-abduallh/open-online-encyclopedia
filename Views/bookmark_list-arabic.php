<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>encyclopedia</title>
    
</head>
<style>
    #bookmark{
           margin-left:650px;
           

    }
</style>
<body>
    <?php
//  session_start();
 require_once'../controls/dbcon.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }





// Fetch bookmarks created by the current user from the database
$user_id = $_SESSION['user_id'];

$user_id = $_SESSION['user_id']; // Assuming user ID is stored in session after login

// SQL query to retrieve bookmarks for the logged-in user
$sql = "SELECT bookmarkid, page_title, page_url FROM bookmark WHERE userid = $user_id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<li ><a  id='bookmark' href='" . $row["page_url"] . "'>" . $row["page_title"] . "</a></li>";
    }
} else {
    echo"<div class='bookmark'>";
    echo "<li id='bookmark'> <span>لا يوجد محفوظات حتي الان</span></li>";
    echo "</div>";
}









    ?>
</body>
</html>



    