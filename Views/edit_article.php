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
    
        // Retrieve article from database
        $sql = "SELECT * FROM article WHERE article_id = '$article_id'";
        $result = $con->query($sql);
    
        if ($result->num_rows == 1) {
            $article = $result->fetch_assoc();
        } else {
            echo "Article not found";
            exit();
        }
    } else {
        echo "Article ID not specified";
        exit();
    }
    
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $article_id=$_POST['article_id'];
        $title = $_POST['title'];
        $language = $_POST['language'];
        $content = $_POST['content'];
        $creation_date = $_POST['creation_date'];
        $page_url = $_POST['page_url'];

    
        // Update article in the database
        $sql = "UPDATE article SET title = '$title',language = '$language', content = '$content', creation_date = '$creation_date',page_url = '$page_url' WHERE article_id = '$article_id'";
        if ($con->query($sql) === TRUE) {
            header("Location: editor page.php");
            echo "Article updated successfully";
        } else {
            echo "Error updating article: " . $con->error;
        }
    }
    
    $con->close();
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

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>Encyclo</span>pedia</h4>
                </div>
            </div>
            <h2 class="head">Find What You Need?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="img/signup/instagram-3814082_1280.png" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>

                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center" style="margin-bottom: 10px;">
                            <h3 style="color: black;" >Update Article's Detail </h3>
                        </div>
                        
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $article_id; ?>" method="post"  class="row login_form">
                        <!-- <div class="col-sm-6 form-group">
                                <div class="small_text">ID</div>
                            </div> -->
                            <div class="col-sm-6 form-group"> 
                                  <input type="hidden" class="form-control" value='<?php echo $article['article_id']; ?>' name="user_id" id="user_id"  required>

                                <div class="small_text" style="color: black;">Title</div>
                                <input type="text" style="color: black;" class="form-control" value='<?php echo $article['title']; ?>' name="title" id="title"  required>
                            </div>
                        
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Language</div>
                                <input type="text" style="color: black;" name="language" class="form-control" id="language" value='<?php echo $article['language']; ?>'  required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Content</div>
                                <input id="content" style="color: black;" name="content" type="text" class="form-control" value='<?php echo $article['content']; ?>' placeholder="Type content of article " autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Creation_date</div>
                                <input id="creation_date" style="color: black;" name="creation_date" type="date" class="form-control"  value='<?php echo $article['creation_date']; ?>'  autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Page_url</div>
                                <input id="page_url" style="color: black;" name="page_url" type="text" class="form-control" value='<?php echo $article['page_url'];?>' placeholder="type url of article's page" autocomplete="off" required>
                            </div>
                            
                           
                            <div class="col-lg-12 text-center">
                                <!-- <button type="submit" name="submit" class="btn action_btn thm_btn" value="Update user">Update User Details</button> -->
                                <input type="submit" name="submit" value="Update" class="btn action_btn thm_btn">
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </section>
    </div>


    




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