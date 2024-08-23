
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
                    
                <?php
    // Check if user ID is provided via GET parameter
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
    
        // Fetch user details from the database
        $sql = "SELECT  * FROM user WHERE user_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
        } else {
            echo "User not found.";
            exit;
        }
    
        $stmt->close();
    } else {
        echo "User ID not provided.";
        exit;
    }
    ?>
                


                

                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center" style="margin-bottom: 10px;">
                            <h3 style="color: black;">Update User's Detail </h3>
                        </div>
                        
                        <form action="edit-user-req.php" method="post"  class="row login_form">
                        <!-- <div class="col-sm-6 form-group">
                                <div class="small_text">ID</div>
                            </div> -->
                            <div class="col-sm-6 form-group"> 
                                  <input type="hidden" style="color: black;" class="form-control" value='<?php echo $user['user_id']; ?>' name="user_id" id="user_id"  required>

                                <div class="small_text" style="color: black;">user name</div>
                                <input type="text" style="color: black;" class="form-control" value='<?php echo $user['username']; ?>' name="username" id="username"  required>
                            </div>
                        
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Your email</div>
                                <input type="email" style="color: black;" name="email" class="form-control" id="email" value='<?php echo $user['email']; ?>'  required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Age</div>
                                <input id="age" name="age" style="color: black;" type="text" class="form-control" value='<?php echo $user['age']; ?>' placeholder="Type your Age " autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Gender</div>
                                <input id="gender" style="color: black;" name="gender" type="text" class="form-control"  value='<?php echo $user['gender']; ?>' placeholder="Male or Female" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Password</div>
                                <input id="password" style="color: black;" name="password" type="password" class="form-control" value='<?php echo $user['password']; ?>' placeholder="5+ characters required" autocomplete="off" required>
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