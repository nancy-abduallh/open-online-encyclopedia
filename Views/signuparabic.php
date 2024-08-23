
<?php 
// session_start();
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
        <section class="signup_area signup_area_height">
            <div class="row ml-0 mr-0">
                <div class="sign_left signup_left">
                    <!-- <h2>نحن مقدمو المعرفة نفعل ما يفيد.</h2> -->
                    <img class="position-absolute top" src="img/signup/top_ornamate.png" alt="top">
                    <img class="position-absolute bottom" src="img/signup/bottom_ornamate.png" alt="bottom">
                    <img class="position-absolute middle wow fadeInRight" src="img/signup/depositphotos_83678144-stock-illustration-sign-up-icon-design.jpg" alt="bottom">
                    <div class="round wow zoomIn" data-wow-delay="0.2s"></div>
                </div>
                <div class="sign_right signup_right">
                    <div class="sign_inner signup_inner">
                        <div class="text-center" style="margin-bottom: 10px; color:black;">
                            <h3  style="color:black;">أنشئ حسابك</h3>
                            <p style="color:black;">هل لديك حساب بالفعل؟ <a href="signinarabic.php" style="color:red;">سجل دخول</a></p>
                            <!-- <a href="https://mail.google.com/mail/u/0/#inbox" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text">Sign up with Google</span></a> -->
                        </div>
                        <!-- <div class="divider">
                            <span class="or-text" style="margin-bottom: 30px;">or</span>
                        </div> -->
                        <form action="signup_process2.php" method="post"  class="row login_form" dir="rtl">
                            <div class="col-sm-6 form-group">
                                <div class="small_text" style="margin-left:126px; color:black;">اسم المستخدم</div>
                                <input type="text" class="form-control" style="color: black;" name="username" id="username" placeholder="اسمك" required>
                            </div>
                        
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="margin-left: 400px; color:black;">بريدك الالكترونى</div>
                                <input type="email" name="email" style="color: black;" class="form-control" id="email" placeholder="" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="margin-left: 500px; color:black;">السن</div>
                                <input id="age" name="age" style="color: black;" type="text" class="form-control" placeholder="اكتب سنك " autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="margin-left: 500px; color:black;">النوع</div>
                                <input id="gender" name="gender" style="color: black;" type="text" class="form-control" placeholder="رجل او امرأة" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="margin-left: 439px; color:black;">كلمة المرور </div>
                                <input id="password" name="password" style="color: black;" type="password" class="form-control" placeholder="مطلوب أكثر من 5 أحرف" autocomplete="off" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="margin-left: 400px; color:black;">تأكيد كلمة المرور</div>
                                <input id="hashed-password" name="hashed-password" style="color: black;" type="password" class="form-control" placeholder="مطلوب أكثر من 5 أحرف" autocomplete="off">
                            </div>
                            
                            <!-- <div class="col-lg-12 form-group">
                                <div class="check_box">
                                    <input type="checkbox" value="None" id="squared2" name="check">
                                    <label class="l_text" for="squared2">I accept the <span>politic of confidentiality</span></label>
                                </div>
                            </div> -->
                            <div class="col-lg-12 text-center">
                                <button type="submit" name="signup" class="btn action_btn thm_btn">انشئ حساب</button>
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