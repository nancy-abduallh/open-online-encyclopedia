
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
                            <h3 >Articles Entry Form </h3>
                            <!-- <a href="https://mail.google.com/mail/u/0/#inbox" class="btn-google"><img src="img/signup/gmail.png" alt=""><span class="btn-text">Sign up with Google</span></a> -->
                        </div>
                        <!-- <div class="divider">
                            <span class="or-text" style="margin-bottom: 30px;">or</span>
                        </div> -->
                        <form action="added_article.php" method="post"  class="row login_form">
                        <div class="col-lg-12 form-group">
                                <input id="editorid" name="editorid" type="hidden" class="form-control"  autocomplete="off" required>
                            </div>
                            
                            <div class="col-sm-6 form-group">
                                <div class="small_text" style="color: black;">title</div>
                                <input type="text" style="color: black;" class="form-control" name="title" id="title" placeholder="add title" required>
                            </div>
                        
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">language</div>
                                <input type="text" name="language" style="color: black;" class="form-control" id="language" placeholder="add language" required>
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">content</div>
                                <input id="content" name="content" type="text" style="color: black;" class="form-control" placeholder="add content of article " autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">creation_date</div>
                                <input id="creation_date" name="creation_date" style="color: black;" type="date" class="form-control" placeholder="Male or Female" autocomplete="off">
                            </div>
                            <div class="col-lg-12 form-group">
                                <div class="small_text" style="color: black;">page_url</div>
                                <input id="page_url" name="page_url" type="text" class="form-control" style="color: black;" placeholder="add the url of article's page" autocomplete="off" required>
                            </div>
                            
                            
                            <!-- <div class="col-lg-12 form-group">
                                <div class="check_box">
                                    <input type="checkbox" value="None" id="squared2" name="check">
                                    <label class="l_text" for="squared2">I accept the <span>politic of confidentiality</span></label>
                                </div>
                            </div> -->
                            <div class="col-lg-12 text-center">
                            <input type="submit" value="Add Article"   name="add_article" class="btn action_btn thm_btn">

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