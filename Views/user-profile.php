<?php 
// session_start();
 require_once'../controls/dbcon.php';
 require_once'../models/users.php';

 require_once'login_process.php';
 require_once'signup_process.php';
if (!isset($_SESSION["username"])) {
    header("Location: signin.php"); // Redirect to login page if not logged in
    exit();
}

// Display the username from session
$username = $_SESSION["username"];
$email = $_SESSION["email"];
$age = $_SESSION["age"];
$gender = $_SESSION["gender"];
$user_id = $_SESSION['user_id'];


 

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
            <h2 class="head">Find What Ypu Need?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <!-- <a class="navbar-brand header_logo" href="index.html">
                    <img class="first_logo sticky_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo">
                </a> -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="menu_toggle">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="hamburger-cross">
                            <span></span>
                            <span></span>
                        </span>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu">
                            <a href="index.php" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <!-- <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index.html" class="nav-link">Creative Helpdesk</a></li>
                                <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                                <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a></li>
                            </ul> -->
                        </li>
                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                               data-toggle="dropdown"></i>
                               <ul class="dropdown-menu">
                            <!-- <li class="nav-item"><a href="editorpage.php" class="nav-link">Editor Page</a></li> -->
                            <!-- <li class="nav-item"><a href="advertisements.php" class="nav-link">Advertisements</a></li>                                 -->
                                <li class="nav-item"><a href="contact.php" class="nav-link">Contact Page</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Articles
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                               data-toggle="dropdown"></i>
                               <ul class="dropdown-menu">
                                <li class="nav-item"><a href="software engineering.php" class="nav-link">Software engineering</a></li>
                                <li class="nav-item"><a href="operating system.php" class="nav-link">Operating System</a>
                                </li>
                                <!-- <li class="nav-item"><a href="programming.php" class="nav-link">Programming</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">Cypersecurity</a></li> -->
                            </ul>
                        </li>
                    </ul>
                    <div class="right-nav">
                          <a href="logout.php" style="color: white; border:3px groove white; border-radius:6px; padding:3px;">Log out</a>
                    </div>
                    <div class="right-nav">
                        <div class="px-2 js-darkmode-btn" title="Toggle dark mode">
                            <label for="something" class="tab-btn tab-btns">
                                <ion-icon name="moon"></ion-icon>
                            </label>
                            <label for="something" class="tab-btn">
                                <ion-icon name="sunny"></ion-icon>
                            </label>
                            <label class=" ball" for="something"></label>
                            <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="doc_banner_area single_breadcrumb">
            <ul class="list-unstyled banner_shap_img">
                <li><img src="img/new/banner_shap1.png" alt=""></li>
                <li><img src="img/new/banner_shap4.png" alt=""></li>
                <li><img src="img/new/banner_shap3.png" alt=""></li>
                <li><img src="img/new/banner_shap2.png" alt=""></li>
                <li><img data-parallax='{"x": -180, "y": 80, "rotateY":2000}' src="img/new/plus1.png" alt=""></li>
                <li><img data-parallax='{"x": -50, "y": -160, "rotateZ":200}' src="img/new/plus2.png" alt=""></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            


            <div class="container">
                <div class="doc_banner_content">
                    <h2  class="text-white"> Welcome <?php echo htmlspecialchars($username);?></h2>
                    <ul class="nav justify-content-center">
                        <li><a href="#">Home</a></li>
                        <li><a class="active" href="#">Profile Member</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!--================Forum Content Area =================-->
        <section class="forum-user-wrapper">
            <div class="container">
                <div class="row forum_main_inner">
                    <div class="col-lg-3">
                        <div class="author_option">
                            <div class="author_img">
                                <img class="img-fluid" src="img/encyclopedia.png" alt="">
                            </div>
                            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">
                                        <i class="icon_profile"></i> Profile
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">
                                        <i class="icon_documents"></i> Bookmarks List
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <i class="icon_chat"></i> Notifications
                                    </a>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="fav-tab" data-toggle="tab" href="#fav" role="tab"
                                        aria-controls="fav" aria-selected="false">
                                        <i class="icon_heart"></i> Favorites
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="forum_body_area">
                            <div class="forum_topic_list">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <div class="profile_info">
                                            <div class="row p_info_item_inner">
                                                <div class="col-sm-4">
                                                    <div class="p_info_item">
                                                        <img src="img/icon/p-icon-1.png" alt="">
                                                        <a href="#">
                                                            <h4>Forum Role</h4>
                                                        </a>
                                                        <a class="info_btn" href="#">User</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="p_info_item">
                                                        <img src="img/icon/p-icon-2.png" alt="">
                                                        <a href="#">
                                                            <h4>Topics Started</h4>
                                                        </a>
                                                        <a class="info_number" href="#">32</a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="p_info_item">
                                                        <img src="img/icon/p-icon-3.png" alt="">
                                                        <a href="#">
                                                            <h4>Replies Created</h4>
                                                        </a>
                                                        <a class="info_number" href="#">76</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="navbar-nav info_list">
                                                <li><span>Name:</span><a href="#"><?php echo  $_SESSION['username'] ; ?></a></li>
                                                <li><span>Age:</span><a href="#"><?php echo  $_SESSION['age'] ; ?></a></li>
                                                <li><span>Gender:</span><a href="#"><?php echo  $_SESSION['gender'] ; ?></a></li>
                                                <li><span>Email:</span><a href="#"><?php echo  $_SESSION['email'] ; ?></a></li>
                                                <!-- <li><span>Location:</span><a href="#">Berlin</a></li> -->
                                                <li><span>Biographical Info:</span><a href="#">Love to gain information and Knowledge</a></li>
                                                <li><span>Website: </span><a
                                                        href="#">https://Encyclopedia.com</a></li>
                                            
                                            </ul>
                                            <ul class="nav p_social">
                                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                                <li><a href="#"><i class="social_pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="input-group search_forum">
                                           
                                            <div class="input-group-append">
                                                
                                            </div>
                                        </div>

                                        <h1 style="margin-bottom: 50px;"><u>My Bookmarks</u></h1>
                                          <div>  
                                        <ul>
                                            <?php
                                
                                      include_once "bookmark_list.php";
                                  ?>
                                            </ul>
                                          </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <div class="input-group search_forum">
                                           
                                            <div class="input-group-append">
                                                
                                            </div>
                                        </div>

                                        <h1 style="margin-bottom: 50px;"><u>Notifications</u></h1>
                                          <div>  
                                        <ul>
                                        <div id="notificationsContainer"></div>

                                        <?php include_once 'notifications.php'; ?>

                                                </div>
                                            
                                            </ul>
                                          </div>
                                       
                                                                                    

                        
                                    </div>



                                   
                            </div>
                        </div>
                    </div>
                </div>

                </div>





                


            </div>
        </section>
        <!--================End Forum Content Area =================-->

        <!--================Doc Subscribe Area =================-->
        <section class="doc_subscribe_area">
            <div class="container">
                <div class="doc_subscribe_inner">
                    <img class="one" src="img/new/subscribe_shap.png" alt="">
                    <img class="two" src="img/new/subscribe_shap_two.png" alt="">
                    <div class="text wow fadeInLeft" data-wow-delay="0.2s">
                        <h2>Great knowledgeable user <br>start here</h2>
                    </div>
                    <form action="#" class="doc_subscribe_form wow fadeInRight mailchimp" data-wow-delay="0.4s"
                        method="post">
                        <div class="form-group">
                            <div class="input-fill">
                                <input type="email" name="EMAIL" id="email" class="memail"
                                    placeholder="Your work email">
                            </div>
                            <button type="submit" class="submit_btn">Get started</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </div>
                        <ul class="list-unstyled">
                            <li><a href="#">Messenger</a></li>
                            <li><a href="#">Product Tours</a></li>
                            <li><a href="#">Inbox and more</a></li>
                        </ul>

                    </form>
                </div>
            </div>
        </section>
        <footer class="doc_footer_area">
            <div class="doc_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget doc_about_widget wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#">
                                    
                                </a>
                                <p>I’m available for helping , and i’m excited to hear from you
                                    about
                                    new Articles.!!</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title_two">Support</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">Help Desk</a></li>
                                    <li><a href="#">Knowledge Base</a></li>
                                    <li><a href="#">Live Chat</a></li>
                                    <li><a href="#">Integrations</a></li>
                                    <li><a href="#">Reports</a></li>
                                    <li><a href="#">Messages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="f_title_two">Website</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                  
                                    <li><a href="contact .php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_footer_bottom">
                <div class="container d-flex justify-content-between">
                    <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                        <!-- <li><a href="#">Blog</a></li> -->
                        <li><a href="index.php">Latest Articles</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                    <p class="wow fadeInUp" data-wow-delay="0.3s" style="font-size: larger;" >© 2024 All Rights Reserved Design by
                        <span>Nancy Abduallh</span>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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