<?php session_start();
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
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left">
                    <h2>We are design changers do what matters.</h2>
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle" src="img/signup/depositphotos_63366419-stock-illustration-sign-in-icon-design.jpg" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3 style="color: black;">Log in to  platform</h3>
                            <p style="color: black;">Don’t have an account yet? <a href="signup.php" style="color: red;">Sign up here</a></p>
                            <a href="" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text" style="color: black;">Sign in with Gmail</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">or</span>
                        </div>
                        <form action="login_process.php" method="POST" class="row login_form">
                        <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">Your email</div>
                                <input type="email" name="email" style="color: black;" class="form-control" id="email" placeholder="info@Docy.com" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;"> password</div>
                                <!-- <div class="password"> -->
                                <input id="password" name="password" style="color: black;" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off" required>
                                    <a href="#" class="forget_btn">Forgotten password?</a>
                                <!-- </div> -->
                            </div>

                            <div class="col-lg-12 text-center">
                            <label for="user_type">Login As:</label>
                                <select id="user_type" name="user_type" class="btn action_btn thm_btn">
                                    <option value="user">User</option>
                                    <option value="editor">Editor</option>
                                </select><br><br>
                                <input type="submit" value="Login"class="btn action_btn thm_btn">
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