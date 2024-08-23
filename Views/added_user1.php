<?php 
// session_start();
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
<style>
    body{
        background-color: antiquewhite;
        text-align: center;
    }
    h3{
        margin-top: 90px;
        font-size:50px;
    }
    p{
        color: brown;
    }
    button{
        background-color:brown;
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


if (isset($_POST['username'])) {
    // Retrieve form data
    $username =  $_POST['username'];
    $email =$_POST['email'];
    $password = $_POST['password'];
    $age =$_POST['age'];
    $gender= $_POST['gender'];


            // $password = md5($password);

                    // include 'dbcon.php';
                    //code after connection is successfull
                    $qry = "insert into user(username,email,gender,age,password) values ('$username','$email','$gender','$age','$password')";
                    $result = mysqli_query($con,$qry); //query executes

                    if(!$result){
                        
                                echo"<h5  >Error Message</h5>";
                                    echo"<h3>Error occured while submitting your details</h3>";
                                    echo"<p>Please Try Again</p>";
                                    echo"<a class='btn btn-warning btn-big'  href='users-entry1.php'><button>Go Back<button></a> </div>";
                                echo"</div>";
                                echo"</div>";
                            echo"</div>";
                            echo"</div>";
                        echo"</div>";
                        }else {
    
                        
                                // echo"<h5 color:red;>Message</h5>";
                                echo"</div>";
                                echo"<div class='widget-content'>";
                                    echo"<div class='error_ex'>";
                                    // echo"<h1>Success</h1>";
                                    echo"<h3>User details has been added!</h3>";
                                    echo"<p>The requested user details are added to database. Please click the button to go back.</p>";
                                    echo"<a class='btn btn-inverse btn-big'  href='editor page arabic.php'><button>Go Back</button></a> </div>";
                                echo"</div>";
                                echo"</div>";
                            echo"</div>";
                            echo"</div>";
                        echo"</div>";
    
                        }
                        }else{
                            echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='users_entry1.php'> DASHBOARD </a></h3>";
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