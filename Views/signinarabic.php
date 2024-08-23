<?php session_start();
//  require_once'../Models/users.php'; 
 require_once'../controls/dbcon.php'; 
 ?>
<!doctype html>
<html lang="ar">

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
    <title>الموسوعة</title>
</head>

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="img/spinner_logo.png" alt="">
                    <h4><span>المو</span>سوعة</h4>
                </div>
            </div>
            <h2 class="head">ابحث عن ما تحتاجه؟</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <section class="signup_area">
            <div class="row ml-0 mr-0">
                <div class="sign_left signin_left">
                    <!-- <h2>We are design changers do what matters.</h2> -->
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle" src="img/signup/depositphotos_63366419-stock-illustration-sign-in-icon-design.jpg" alt="bottom">
                    <div class="round"></div>
                </div>
                <div class="sign_right signup_right" dir="rtl">
                    <div class="sign_inner signup_inner">
                        <div class="text-center">
                            <h3 style="color:black;">سجل دخول للمنصة</h3>
                            <p style="color:black;">لا تملك حساب؟ <a href="signuparabic.php" style="color: red;">انشئ حساب</a></p>
                            <a href="" class="btn-google" style="color: black;"><img src="img/signup/gmail.png" alt=""><span class="btn-text">سجل بالايميل</span></a>
                        </div>
                        <div class="divider">
                            <span class="or-text">or</span>
                        </div>
                        <form action="login_process arabic.php" method="POST" class="row login_form">
                        <div class="col-lg-12 form-group">
                                <div class="small_text" style="color:black; margin-left:400px;">بريدك الالكترونى</div>
                                <input type="email" name="email" style="color: black;" class="form-control" id="email" placeholder="info@Docy.com" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color:black; margin-left:436px;"> كلمة المرور</div>
                                <!-- <div class="password"> -->
                                <input id="password" name="password" style="color: black;" type="password" class="form-control" placeholder="5+ characters required" autocomplete="off" required>
                                    <!-- <a href="#" class="forget_btn">Forgotten password?</a> -->
                                <!-- </div> -->
                            </div>

                            <div class="col-lg-12 text-center">
                            <label for="user_type" style="color: black;">سجل دخول ك:</label>
                                <select id="user_type" name="user_type" class="btn action_btn thm_btn">
                                    <option value="user">مستخدم</option>
                                    <option value="editor">كاتب</option>
                                </select><br><br>
                                <input type="submit" value="سجل"class="btn action_btn thm_btn" >
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