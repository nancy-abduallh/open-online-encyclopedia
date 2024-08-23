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
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Encyclopedia</title>
</head>
<body>
<?php

$sql = "SELECT username, email, gender,age FROM user";
$stmt = $con->prepare($sql);

// Check if the SQL query is valid
if ($stmt === false) {
    die('Error preparing statement.');
}

// Execute the prepared statement
$stmt->execute();

// Bind result variables
$stmt->bind_result($username, $email,$gender,$age);

    // Output data in a table format
    echo "<table border='1' width='785' height='400'>";
    echo "<tr><th>Name</th><th>Email</th><th>Gender</th><th>Age</th></tr>";
    
    // Loop through each row of data
    while ($stmt->fetch()) {
        echo "<tr>";
        echo "<td>".$username."</td>";
        echo "<td>".$email."</td>";
        echo "<td>".$gender."</td>";
    echo "<td>".$age."</td>";

        echo "</tr>";
    }
    
    echo "</table>";
    echo "</table>";

    // Close statement and database connection
    $stmt->close();
    $con->close();
?>


























<script src="js/jquery-3.5.1.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/pre-loader.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>
    <script src="js/theme.js"></script>

</body>

</html>

