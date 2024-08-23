<?php session_start();
 require_once'../controls/dbcon.php'; 
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
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
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

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Prepare and execute SQL query to fetch page URL based on search term
    $stmt = $con->prepare("SELECT page_url FROM search_mapping WHERE search_term = ?");
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $stmt->bind_result($pageUrl);
    $stmt->fetch();

    // Redirect to the corresponding page if URL is found
    if ($pageUrl) {
        header("Location: $pageUrl");
        exit;
    } else {
        echo "No matching page found for '$searchTerm'.";
    }

    $stmt->close();
}

$con->close();
?>

















<script src="js/jquery-3.5.1.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/pre-loader.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
