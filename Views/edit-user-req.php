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


if (isset($_POST['submit'])) {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];


    
    // Prepare and execute SQL query to update user information
    $sql = "UPDATE user SET  username = ?, email = ? , age= ?, gender= ?, password=? WHERE user_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("sssssi", $username, $email,$age,$gender,$password ,$user_id);

    if ($stmt->execute()) {
        // Redirect back to editor dashboard after successful update
        header("Location: editor page.php?message=User updated successfully.");
        exit;
    } else {
        echo "Error updating user: " . $con->error;
    }

    $stmt->close();
    $con->close();
 }
  else {
    header("Location: editor page.php"); // Redirect back to editor dashboard if form was not submitted
    exit;
}
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