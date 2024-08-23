<?php session_start();
 require_once'../controls/dbcon.php'; 
//  require_once 'index.php';
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
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Encyclopedia</title>
</head>

<body data-spy="scroll" data-target="#navbar-example3" data-offset="86" data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <!-- <img src="img/spinner_logo.png" alt=""> -->
                    <h4><span>Encyclo</span>pedia</h4>
                </div>
            </div>
            <h2 class="head">Find What You Need?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one dark_menu sticky-nav">
            <div class="container">
                
                
                <span class="menu_toggle">
                    <span class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <!-- <span class="hamburger-cross">
                        <span></span>
                        <span></span>
                    </span> -->
                </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ml-auto">
                        <li class="nav-item dropdown submenu">
                            <a href="index.php" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            
                        </li>
                        
                        <li class="nav-item dropdown submenu active">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                            <li class="nav-item"><a href="editorpage.php" class="nav-link">Editor Page</a></li>
                            <li class="nav-item"><a href="advertisements.php" class="nav-link">Advertisements</a></li>                                
                                <!-- <li class="nav-item"><a href="contact.php" class="nav-link">Contact Page</a></li> -->
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="forums.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Articles
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                               data-toggle="dropdown"></i>
                               <ul class="dropdown-menu">
                                <li class="nav-item"><a href="software engineering.php" class="nav-link">Software engineering</a></li>
                                <li class="nav-item"><a href="operating system.php" class="nav-link">Operating System</a>
                                </li>
                                <li class="nav-item"><a href="programming.php" class="nav-link">Programming</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">Cypersecurity</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <div class="nav-link dropdown" style="margin-top: 10px; " >
                    <button class="btn btn-outline-light dropdown-toggle" style="background-color: black;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="arabic_software.php">Arabic</a>
                        
                    </div>
                </div>
                    <div class="right-nav">
                        <!-- <a class="nav_btn tp_btn" href="https://is.gd/nDvqm2" target="_blank">Get Docy</a> -->
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

        <div class="breadcrumb_area_three">
            <div class="container">
                <div class="breadcrumb_text">
                    <h2>Get a touch with <span>Contact Us</span></h2>
                    <p>Encyclopedia is here to help. Discover different ways to contact us so that we can provide you with the support you need.</p>
                </div>
            </div>
        </div>

        <section class="contact_area sec_pad">
            <div class="container">
                <div class="contact_info">
                    <div class="section_title text-left">
                        <h2 class="h_title wow fadeInUp">Let’s start the conversation</h2>
                        <p>Please email us, we’ll happy to assist you.</p>
                    </div>
                    <form action="#" class="contact_form">
                        
                        <div class="row contact_fill">
                            <div class="col-lg-4 form-group">
                                <h6>Full Name</h6>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name here">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Email</h6>
                                <input type="email" class="form-control" name="email" id="email" placeholder="info@Docy.com">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Phone no</h6>
                                <input type="tel" class="form-control" name="tel" id="phone" placeholder="+462">
                            </div>
                            <div class="col-lg-12 form-group">
                                <h6>Message</h6>
                                <textarea class="form-control message" id="message" placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="btn action_btn thm_btn">Send Message</button>
                            </div>
                        </div>
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
                    <p class="wow fadeInUp" data-wow-delay="0.3s">© 2024 All Rights Reserved Design by
                        <span>Nancy</span>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.wavify.js"></script>
    <script src="js/anchor.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>

</body>

</html>