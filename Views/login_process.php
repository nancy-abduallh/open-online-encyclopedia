<?php 
session_start();
//  require_once'../Models/users.php'; 
 require_once'../controls/dbcon.php'; 
 
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Encyclopedia</title>
</head>
<body>
<?php


// Database connection parameters
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username=$_POST['username'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check in users table
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = $con->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $_SESSION['user_id'] = $row['user_id']; // Assuming user_id is the primary key
        $_SESSION['username'] = $row['username'];
        $_SESSION['age'] = $row['age'];
        $_SESSION['gender'] = $row['gender'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];


        header('Location: user-profile.php');
        // header('Location: software engineering.php');

        exit();
    }

    // Check in editors table
    $query = "SELECT * FROM editor WHERE email='$email' AND password='$password'";
    $result = $con->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['editor_id'] = $row['editor_id']; // Assuming user_id is the primary key
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header('Location: editor page.php');
        $_SESSION['password'] = $row['password'];

        exit();
    }

    // Invalid credentials
    echo "Invalid email or password. Please try again.";
}

?>







<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>

</body>

</html>