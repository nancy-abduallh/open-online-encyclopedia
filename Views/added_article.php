<?php
session_start();
require_once '../Models/users.php';
require_once '../controls/dbcon.php';
?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/spinner_logo.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Encyclopedia</title>
</head>
<style>
    body {
        background-color: antiquewhite;
        text-align: center;
    }

    h3 {
        margin-top: 90px;
        font-size: 50px;
    }

    p {
        color: brown;
    }

    button {
        background-color: brown;
        color: beige;
        border-radius: 30px;
        size: 40px;
    }
</style>

<body>

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



    $query = "SELECT * FROM editor ";
    $result = $con->query($query);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['editor_id']  = $row['editor_id'];
        $_SESSION['editor_email']  = $row['email']; // Assuming user_id is the primary key
        // Assuming user_id is the primary key

    }








    $editorEmail = $_SESSION['email'];
    $editor_id = $_SESSION['editor_id'];
    $userId = $_SESSION['user_id'];

    // Retrieve form data
    $title =  $_POST['title'];
    $language = $_POST['language'];
    $content = $_POST['content'];
    $creation_date = $_POST['creation_date'];
    $page_url = $_POST['page_url'];


    $sql = "INSERT INTO article (title,language, content, creation_date,page_url,editorid) VALUES (?, ?, ?,?,?,'$editor_id')";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssss", $title, $language, $content, $creation_date, $page_url);
    $stmt->execute();
    $stmt->close();



    // $stmtUsers = $con->prepare("SELECT user_id FROM user");
    // $stmtUsers->execute();
    // $stmtUsers->bind_result($userId);


    // Prepare notification message
    $notificationMessage = "New article added: '$title'";
    // Insert notification for each user
    $sqlInsertNotification = "INSERT INTO notifications (message,created_at, user_id) VALUES (?,?,'$userId' )";
    $stmtNotification = $con->prepare($sqlInsertNotification);

    $stmtNotification->bind_param("ss", $notificationMessage, $creation_date);
    $stmtNotification->execute();


    // $stmtUsers->close();
    $stmtNotification->close();

    $con->close();

    // Redirect back to editor's page or display a success message
    header("Location: editor page.php");
    exit();


    ?>
























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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