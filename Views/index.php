<?php session_start();
 require_once'../Models/users.php'; 
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
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
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
            <h2 class="head">Find What You Need?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <nav class="navbar navbar-expand-lg menu_one menu_purple sticky-nav">
            <div class="container">
                <a class="navbar-brand header_logo" href="index.html">
                    <!-- <img class="first_logo sticky_logo" src="img/logo.png" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="img/logo-w.png" srcset="img/logo-w2x.png 2x" alt="logo"> -->
                </a>
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
                        <li class="nav-item dropdown submenu active">
                            <a href="index.php" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <!-- <ul class="dropdown-menu">
                                
                                
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
                                <li class="nav-item active"><a href="user-profile.php" class="nav-link">User Profile</a></li>
                                <li class="nav-item active"><a href="editor page.php" class="nav-link">Editor Profile</a></li>
                                                          
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
                        <a class="nav_btn" href="signup.php">Sign up</a>
                        <a class="nav_btn" href="signin.php">Log in</a>

                        <li class="nav-btn">
                <div class="nav-link dropdown" style="margin-bottom: 30px;">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="arabic.php">Arabic</a>
                        
                    </div>
                </div>
            </li>






                        



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

        <section class="doc_banner_area banner_creative1">
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
                    <h2 class="wow fadeInUp">Your Helping Encyclopedia</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Search here to get answers to your questions</p>
                    <form action="search.php" method="get" class="header_search_form">
                        <div class="header_search_form_info">
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="icon_search"></i>
                                    <input type='text' id="search" autocomplete="off" name="search"
                                        placeholder="Search the Encyclopedia" />
                                     <button class="button_search" type="submit" >Search </button> 
                                    
                                </div>
                            </div>
                        </div></form>
                        <div class="header_search_keyword">
                            <span class="header-search-form__keywords-label">Suggested Search:</span>
                            <ul class="list-unstyled">
                                <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Cypersecurity</a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Software engineering</a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">programming</a></li>
                            </ul>
                        </div>
                    
                </div>
            </div>
        </section>

        <section class="doc_features_area">
            <img class="doc_features_shap" src="img/new/shap_white.png" alt="">
            <div class="container">
                <div class="doc_features_inner">
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="0.5s">
                        <img src="img/new/icon1.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Knowledge Base</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                        <img src="img/new/icon2.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Community Forums</h4>
                            </a>
                            <p>24 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                        <img src="img/new/icon3.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Documentations</h4>
                            </a>
                            <p>20 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <img src="img/new/icon4.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Working with Docs</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="img/new/icon5.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Special Pages</h4>
                            </a>
                            <p>245 Page</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <img src="img/new/icon6.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Knowledge Management</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                        <img src="img/new/icon7.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Educational Articles</h4>
                            </a>
                            <p>245 Articles</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <img src="img/new/icon8.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Articles in Many Fields</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="img/new/icon9.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Useful Content</h4>
                            </a>
                            <p>245 Posts</p>
                        </div>
                    </div>
                    <div class="see_more_item collapse-wrap">
                        <div class="media doc_features_item">
                            <img src="img/new/icon7.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Multi Advertisements</h4>
                                </a>
                                <p>245 Advertisements</p>
                            </div>
                        </div>
                        <div class="media doc_features_item">
                            <img src="img/new/icon8.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Historical Articles</h4>
                                </a>
                                <p>245 Articles</p>
                            </div>
                        </div>
                        <!-- <div class="media doc_features_item">
                            <img src="img/new/icon9.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Formatting Content</h4>
                                </a>
                                <p>245 Posts</p>
                            </div>
                        </div> -->
                    </div>
                    <a href="#more-features" class="collapse-btn see_btn">
                        <i class="arrow_carrot-down_alt2"></i>
                        <span class="text">Show More</span>
                    </a>
                </div>
            </div>
        </section>
        <section class="recommended_topic_area">
            <div class="container">
                <div class="recommended_topic_inner">
                    <img class="doc_shap_one" src="img/new/shap.png" alt="">
                    <div class="doc_round one" data-parallax='{"x": -80, "y": -100, "rotateY":0}'></div>
                    <div class="doc_round two" data-parallax='{"x": -10, "y": 70, "rotateY":0}'></div>
                    <div class="doc_title text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Recommended Articles</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">Loaded with awesome features like Documentation,
                            Knowledgebase,<br> Forum & more!</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/new/smile.png" alt="">
                                <a href="#">
                                    <h3>Software Engineering</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Introduction to Software Engineering</a></li>
                                     <li><a href="#">Learning Types of System Requirements </a></li>
                                    <li><a href="#">Types of UML Diagrams</a></li>
                                    <li><a href="#">Types of Design Patterns </a></li>
                                    <li><a href="#">Learning Software Architectural Design</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                                <img src="img/new/house.png" alt="">
                                <a href="#">
                                    <h3>Operating System</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">Introduction to Operating System </a></li>
                                    <li><a href="#">OS Technology Concepts</a></li>
                                    <li><a href="#">Processes</a></li>
                                    <li><a href="#">Threads & Concurrency</a></li>
                                    <li><a href="#">Scheduling Terminologies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/new/doc.png" alt="">
                                <a href="#">
                                    <h3>Programming</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">What is Dynamic Programming? </a></li>
                                    <li><a href="#">What is Linear Programming?</a></li>
                                    <li><a href="#">What is Assembly Language?</a></li>
                                    <li><a href="#">Differences between Software Developing & Software Engineering</a></li>
                                    <li><a href="#">Differences between Machine Language & Assembly Language</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/new/bag.png" alt="">
                                <a href="#">
                                    <h3>Computer Security</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">What is Cybersecurity?</a></li>
                                    <li><a href="#">Introduction to IOT Security </a></li>
                                    <li><a href="#">Introduction to Phishing</a></li>
                                    <li><a href="#">Introduction in Computer Network</a></li>
                                    <li><a href="#">How to Apply Security & Privacy?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="question_text">Want to know more or have a<br> Question?
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="doc_community_area">
            <img class="shap_one" src="img/new/community_bg_shap_one.png" alt="">
            <img class="shap_two" src="img/new/community_bg_shap_two.png" alt="">
            <div class="container">
                <div class="doc_title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s">How Website works</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">Read Articles online & offline with the world's best authors
                    </p>
                </div>
                <div class="doc_community_info">
                    <div class="doc_community_item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="doc_community_icon">
                            <i class="icon_folder-alt"></i>
                        </div>
                        <div class="doc_entry_content">
                            <a href="#">
                                <h4>Writing Articles</h4>
                            </a>
                            <p>Setting up and customizing your Knowledge to start Writing Articles</p>
                            <div class="doc_entry_info">
                                <ul class="list-unstyled author_avatar">
                                    <li><img src="img/new/download1.jpeg" alt=""></li>
                                    <li><img src="img/new/Articles2.png" alt=""></li>
                                    <li><img src="img/new/articles3.jpeg" alt=""></li>
                                    <li>+2</li>
                                </ul>
                                <div class="text">
                                    76 articles in this collection<br> Written by Ruairí Galavan, Jack Jenkins, DJ and 7
                                    others
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doc_community_item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="doc_community_icon">
                            <i class="icon_comment_alt"></i>
                        </div>
                        <div class="doc_entry_content">
                            <a href="#">
                                <h4>Find Multi-information Articles</h4>
                            </a>
                            <p>Search about your Questions and You will definitely find the answer </p>
                            <div class="doc_entry_info">
                                <ul class="list-unstyled author_avatar">
                                    <li><img src="img/new/Articles2.png" alt=""></li>
                                    <li><img src="img/new/articles3.jpeg" alt=""></li>
                                    <li><img src="img/new/download1.jpeg" alt=""></li>
                                    <li>+2</li>
                                </ul>
                                <div class="text">
                                    76 articles in this collection<br> Written by Ruairí Galavan, Jack Jenkins, DJ and 7
                                    others
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doc_community_item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="doc_community_icon">
                            <i class=" icon_lightbulb_alt"></i>
                        </div>
                        <div class="doc_entry_content">
                            <a href="#">
                                <h4>Improve Your Knowledge</h4>
                            </a>
                            <p>Gain experience and information from reading articles</p>
                            <div class="doc_entry_info">
                                <ul class="list-unstyled author_avatar">
                                    <li><img src="img/new/Articles2.png" alt=""></li>
                                    <li><img src="img/new/articles3.jpeg" alt=""></li>
                                    <li><img src="img/new/download1.jpeg" alt=""></li>
                                    <li>+2</li>
                                </ul>
                                <div class="text">
                                    76 articles in this collection<br> Written by Ruairí Galavan, Jack Jenkins, DJ and 7
                                    others
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="question_text">Contact us and we’ll get back to you<br>
                            as soon as we can.
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="doc_testimonial_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="doc_testimonial_slider">
                            <div class="item">
                                <h3>"J.K. Rowling receives numerous awards and accolades for Harry Potter only. 
                                    Her book Prisoner of Azkaban won the Book of the year award in 2000 against someone who had won a Nobel prize."</h3>
                                <div class="name"> 
                                    <h5>J.K. Rowling,</h5>
                                    <span> The most famous British novelists</span>
                                </div>
                                <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                            </div>
                            <div class="item">
                                <h3>Stephen King has received several awards for his contributions to the writing industry and his books. 
                                    He presented a unique writing approach and was rewarded in 2004 for his contribution to the literature world.”</h3>
                                <div class="name">
                                    <h5>Stephen King,</h5>
                                    <span>An American fiction writer</span>
                                </div>
                                <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                            </div>
                            <div class="item">
                                <h3>John Green has won several awards for his novels and also for his notable other works. He received four awards for his three novels.”</h3>
                                <div class="name">
                                    <h5>John Green,</h5>
                                    <span>a young American author</span>
                                </div>
                                <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="doc_img_slider">
                            <div class="item">
                                <img class="dot" src="img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="img/new/J.K.-Rowling.jpg" width="400px" height="400px" alt="">
                            </div>
                            <div class="item">
                                <img class="dot" src="img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="img/new/stephen.jpeg"  width="300px" height="400px" alt="">
                            </div>
                            <div class="item">
                                <img class="dot" src="img/new/dot.png" alt="">
                                <div class="round one"></div>
                                <div class="round two"></div>
                                <img src="img/new/john green.jpg" width="300px" height="400px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/pre-loader.js"></script>
    <script src="assets/slick/slick.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/main.js"></script>
</body>
</html>