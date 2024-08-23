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
    <link rel="stylesheet" href="assets/slick/slick.css">
    <link rel="stylesheet" href="assets/slick/slick-theme.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
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
                            <a href="arabic.html" class="nav-link dropdown-toggle">الصفحة الرئيسية</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <!-- <li class="nav-item active"><a href="index.html" class="nav-link">Creative Helpdesk</a></li>
                                <li class="nav-item"><a href="index-multi.html" class="nav-link">Multi Helpdesk</a></li>
                                <li class="nav-item"><a href="index-classic.html" class="nav-link">Classic Helpdesk</a></li> -->
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                الصفحات
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                            <li class="nav-item"><a href="editor page arabic.php" class="nav-link">صفحة الكاتب</a></li>
                            <li class="nav-item"><a href="user-profile-arabic.php" class="nav-link">صقحة المستخدم</a></li>                                
                                <li class="nav-item"><a href="contact.php" class="nav-link">صفحة التواصل</a></li>
                                
                                
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                المقالات
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="arabic_software.php" class="nav-link">هندسة البرمجيات</a></li>
                                <li class="nav-item"><a href="blog-grid-two.html" class="nav-link">نظام التشغيل</a>
                                </li>
                                <li class="nav-item"><a href="blog-list.html" class="nav-link">البرمجة</a></li>
                                <li class="nav-item"><a href="blog-single.html" class="nav-link">الأمن الإلكتروني</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="right-nav">
                        <a class="nav_btn" href="signuparabic.php">انشاء حساب</a>
                        <a class="nav_btn" href="signinarabic.php"> دخول</a>

                        <li class="nav-btn">
                <div class="nav-link dropdown" style="margin-bottom: 30px;">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        العربية
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="index.php">English</a>
                        
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
                    <h2 class="wow fadeInUp">الموسوعة المساعدة الخاصة بك</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">ابحث هنا للحصول على إجابات لأسئلتك</p>
                    <form action="search.php" method="get" class="header_search_form">
                        <div class="header_search_form_info">
                            <div class="form-group">
                                <div class="input-wrapper">
                                    <i class="icon_search"></i>
                                    <input type='search' id="searchbox" autocomplete="off" name="search"
                                        placeholder="ابحث في الموقع" />
                                        <button class="button_search" type="submit" >ابحث </button> 
                                    <div class="header_search_form_panel">
                                      <?php
                                      $sql = "SELECT * From article";
                                      $result= mysqli_query($con,$sql);
                                      $queryResults= mysqli_num_rows($result);
                                      if($queryResults > 0){
                                         while($row = mysqli_fetch_assoc($result)){
                                              echo " <div class ='container'>
                                              <h3>".$row['title']."</h3>
                                              <p>".$row['content']."</p>
                                              <p>".$row['creation_date']."</p>
                                              <h3>".$row['editorid']."</h3>

                                              </div>";                                   
                                         }
                                      }

                                      ?>
                                        <ul class="list-unstyled">
                                            
                                            <li>هندسة البرمجيات<a href="software engineering.php">
                                                <!-- <ul class="list-unstyled search_item">
                                                    <li><span>Configuration</span><a href="#">How to edit host and
                                                            port?</a></li>
                                                    <li><span>Configuration</span><a href="#">The dev Property</a></li>
                                                </ul>   -->
                                            
                                        </a>
                                    </li>
                                            <li>Support
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Pages</span><a href="#">The asyncData Method</a></li>
                                                </ul>
                                            </li>
                                            <li>Documentation
                                                <ul class="list-unstyled search_item">
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                    <li><span>Getting Started</span><a href="#">The asyncData Method</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <select class="search-expand-types custom-select" name="post_type"
                                        id="search_post_type">
                                        <option value="">All Docs </option>
                                        <option value="manual_kb">Knowledge Base</option>
                                        <option value="manual_documentation">Documentation</option>
                                        <option value="manual_faq">FAQs</option>
                                        <option value="forum">Forums</option>
                                        <option value="manual_portfolio">Portfolio</option>
                                        <option value="product">Products</option>
                                    </select> -->
                                </div>
                            </div>

                        </div>
                        <div class="header_search_keyword">
                            <span class="header-search-form__keywords-label">البحث المقترح:</span>
                            <ul class="list-unstyled">
                                <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="onepage.html">الامن الالكتروني</a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">البرمجة</a></li>
                                <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">نظم التشغيل</a></li>
                            </ul>
                        </div>
                    </form>
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
                                <h4>قاعدة المعرفة</h4>
                            </a>
                            <p>245 منشور</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                        <img src="img/new/icon2.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>وسائل تواصل</h4>
                            </a>
                            <p>24 منشور</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.7s">
                        <img src="img/new/icon3.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>الوثائق</h4>
                            </a>
                            <p>20 منشور</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.8s">
                        <img src="img/new/icon4.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>التعامل مع المستندات</h4>
                            </a>
                            <p>245 منشور</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="img/new/icon5.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>صفحات مميزة</h4>
                            </a>
                            <p>245 صفحة</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">
                        <img src="img/new/icon6.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>إدارة المعرفة</h4>
                            </a>
                            <p>245 منشور</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.7s">
                        <img src="img/new/icon7.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>مقالات تعليمية</h4>
                            </a>
                            <p>245 مقال</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.8s">
                        <img src="img/new/icon8.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>مقالات في العديد من المجالات</h4>
                            </a>
                            <p>245 مقال</p>
                        </div>
                    </div>
                    <div class="media doc_features_item wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.9s">
                        <img src="img/new/icon9.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>محتوى هادف و مفيد</h4>
                            </a>
                            <p>245 مقال</p>
                        </div>
                    </div>
                    <div class="see_more_item collapse-wrap">
                        <div class="media doc_features_item">
                            <img src="img/new/icon7.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>اعلانات متعددة</h4>
                                </a>
                                <p>245 اعلان</p>
                            </div>
                        </div>
                        <div class="media doc_features_item">
                            <img src="img/new/icon8.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>مقالات تاريخية</h4>
                                </a>
                                <p>245 مقال</p>
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
                        <span class="text">اظهر المزيد</span>
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
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">مقالات مقترحة</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">  محمل بمميزات رائعة مثل الكتابة, المعرفة<br>! التصفح و أكثر</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/new/smile.png" alt="">
                                <a href="#">
                                    <h3>هندسة البرمجيات</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">مقدمة في هندسة البرمجيات</a></li>
                                     <li><a href="#">أنواع التعلم لمتطلبات النظام </a></li>
                                    <li><a href="#">أنواع مخططات UML</a></li>
                                    <li><a href="#">أنواع أنماط التصميم </a></li>
                                    <li><a href="#">تعلم برامج التصميم المعماري</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.3s">
                                <img src="img/new/house.png" alt="">
                                <a href="#">
                                    <h3>نظم التشغيل</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">مقدمة في نظم التشغيل </a></li>
                                    <li><a href="#">مفاهيم تكنولوجيا نظام التشغيل</a></li>
                                    <li><a href="#">العمليات</a></li>
                                    <li><a href="#">المواضيع والتزامن في نظم التشغيل</a></li>
                                    <li><a href="#">مصطلحات التخطيط</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/new/doc.png" alt="">
                                <a href="#">
                                    <h3>البرمجة</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">ما هي البرمجة الديناميكية؟ </a></li>
                                    <li><a href="#">ما هي البرمجة الخطية؟</a></li>
                                    <li><a href="#">ما هي لغة التجميع؟</a></li>
                                    <li><a href="#">الاختلافات بين تطوير البرمجيات وهندسة البرمجيات</a></li>
                                    <li><a href="#">الاختلافات بين لغة الآلة ولغة التجميع</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="recommended_item wow fadeInUp" data-wow-delay="0.5s">
                                <img src="img/new/bag.png" alt="">
                                <a href="#">
                                    <h3>حماية الحاسوب</h3>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="#">ما هو الأمن السيبراني؟</a></li>
                                    <li><a href="#">مقدمة لأمن إنترنت الأشياء </a></li>
                                    <li><a href="#">مقدمة إلى التصيد الاحتيالي</a></li>
                                    <li><a href="#">مقدمة في شبكات الحاسوب</a></li>
                                    <li><a href="#">كيفية تطبيق الأمن والخصوصية؟</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="question_text">تريد معرفة المزيد أو لديك<br> أسئلة?
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
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s">كيف يعمل الموقع</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.4s">اقرأ المقالات عبر الإنترنت وفي وضع عدم الاتصال مع أفضل المؤلفين في العالم
                    </p>
                </div>
                <div class="doc_community_info">
                    <div class="doc_community_item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="doc_community_icon">
                            <i class="icon_folder-alt"></i>
                        </div>
                        <div class="doc_entry_content">
                            <a href="#">
                                <h4>كتابة المقالات</h4>
                            </a>
                            <p>قم بإعداد وتخصيص معرفتك لبدء كتابة المقالات</p>
                            <div class="doc_entry_info">
                                <ul class="list-unstyled author_avatar">
                                    <li><img src="img/new/download1.jpeg" alt=""></li>
                                    <li><img src="img/new/Articles2.png" alt=""></li>
                                    <li><img src="img/new/articles3.jpeg" alt=""></li>
                                    <li>+2</li>
                                </ul>
                                <div class="text">
                                76 مقالة في هذه المجموعة<br> كتب بواسطة Ruairí Galavan، جاك جينكينز، DJ و7 آخرين
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
                                <h4>البحث عن مقالات متعددة المعلومات</h4>
                            </a>
                            <p>ابحث عن أسئلتك وستجد الإجابة بالتأكيد </p>
                            <div class="doc_entry_info">
                                <ul class="list-unstyled author_avatar">
                                    <li><img src="img/new/Articles2.png" alt=""></li>
                                    <li><img src="img/new/articles3.jpeg" alt=""></li>
                                    <li><img src="img/new/download1.jpeg" alt=""></li>
                                    <li>+2</li>
                                </ul>
                                <div class="text">
                                76 مقالة في هذه المجموعة<br> كتب بواسطة Ruairí Galavan، جاك جينكينز، DJ و7 آخرين
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
                                <h4>قوى معرفتك</h4>
                            </a>
                            <p>اكتساب الخبرة والمعلومات من قراءة المقالات</p>
                            <div class="doc_entry_info">
                                <ul class="list-unstyled author_avatar">
                                    <li><img src="img/new/Articles2.png" alt=""></li>
                                    <li><img src="img/new/articles3.jpeg" alt=""></li>
                                    <li><img src="img/new/download1.jpeg" alt=""></li>
                                    <li>+2</li>
                                </ul>
                                <div class="text">
                                76 مقالة في هذه المجموعة<br> كتب بواسطة Ruairí Galavan، جاك جينكينز، DJ و7 آخرين
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="question_text">اتصل بنا وسنرد عليك<br>
                        بأسرع ما يمكن.
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
                            <h3>ج.ك.رولينج حصلت  على العديد من الجوائز والأوسمة لهاري بوتر فقط.
                                    فاز كتابها "سجين أزكابان" بجائزة كتاب العام عام 2000 ضد شخص فاز بجائزة نوبل.</h3>
                                <div class="name"> 
                                    <h5>ج.ك. رولينج</h5>
                                    <span> أشهر الروائيين البريطانيين</span>
                                </div>
                                <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                            </div>
                            <div class="item">
                                <h3>حصل ستيفن كينغ على العديد من الجوائز لإسهاماته في صناعة الكتابة وكتبه.
                                    قدم أسلوبًا فريدًا في الكتابة وحصل على جائزة عام 2004 لمساهمته في عالم الأدب.</h3>
                                <div class="name">
                                    <h5>ستيفن كينغ</h5>
                                    <span>كاتب خيال أمريكي</span>
                                </div>
                                <a href="#" class="sign"><img src="img/new/sign.png" alt=""></a>
                            </div>
                            <div class="item">
                                <h3>فاز جون جرين بالعديد من الجوائز عن رواياته وأيضًا عن أعماله البارزة الأخرى. حصل على أربع جوائز عن رواياته الثلاث</h3>
                                <div class="name">
                                    <h5>جون جرين</h5>
                                    <span>كاتب أمريكي شاب</span>
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
                        <h2>الانسان المثقف و المحب للمعرفة يبدأ من هنا </h2>
                    </div>
                    <form action="#" class="doc_subscribe_form wow fadeInRight mailchimp" data-wow-delay="0.4s"
                        method="post">
                        <div class="form-group">
                            <div class="input-fill">
                                <input type="email" name="EMAIL" id="email" class="memail"
                                    placeholder="حسابك الشخصئ">
                            </div>
                            <button type="submit" class="submit_btn">ابدأ</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </div>
                        <ul class="list-unstyled">
                            <!-- <li><a href="#">Messenger</a></li>
                            <li><a href="#">Product Tours</a></li>
                            <li><a href="#">Inbox and more</a></li> -->
                        </ul>

                    </form>
                </div>
            </div>
        </section>
        <footer class="doc_footer_area">
            <div class="doc_footer_top bg-transparent">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="f_widget doc_about_widget wow fadeInUp" data-wow-delay="0.2s">
                                <a href="#">
                                    <!-- <img src="img/logo.png" class="logo-light" srcset="img/logo-2x.png 2x" alt="">
                                    <img src="img/logo-w.png" class="logo-dark" srcset="img/logo-2x.png 2x" alt=""> -->
                                </a>
                                <p>الموقع متاح للجميع حتي يزيدوا من معرفتهم و ثقافتهم و حتي يظهروا مهاراتهم في الكتابة،نحن متحمسون لنرى مقالاتكم القادمة</p>
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="social_facebook"></i></a></li>
                                    <li><a href="#"><i class="social_twitter"></i></a></li>
                                    <li><a href="#"><i class="social_vimeo"></i></a></li>
                                    <li><a href="#"><i class="social_linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-30 wow fadeInUp" data-wow-delay="0.3s">
                                <!-- <h3 class="f_title_two">Solutions</h3> -->
                                <!-- <ul class="list-unstyled">
                                    <li><a href="#"><img src="img/new/smile2.png" alt="">Help Docs</a></li>
                                    <li><a href="#"><img src="img/new/doc2.png" alt="">Docbuzz</a></li>
                                    <li><a href="#"><img src="img/new/house2.png" alt="">User Frontend</a></li>
                                    <li><a href="#"><img src="img/new/bag2.png" alt="">Lightbox</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-100 wow fadeInUp" data-wow-delay="0.4s">
                                <h3 class="f_title_two">الدعم</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#"><img src="img/new/house2.png" alt="">المساعدة</a></li>
                                    <li><a href="#"><img src="img/new/smile2.png" alt="">تواصل معنا</a></li>
                                    <li><a href="#"><img src="img/new/smile2.png" alt="">وسائل التواصل الاجتماععى</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="f_widget doc_service_list_widget pl-70 wow fadeInUp" data-wow-delay="0.5s">
                                <h3 class="f_title_two">الموسوعة</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#"><img src="img/new/smile2.png" alt="">من نحن؟</a></li>
                                    <li><a href="#"><img src="img/new/house2.png" alt="">اعلانات</a></li>
                                    <li><a href="#"><img src="img/new/doc2.png" alt="">موسوعة للمعلومات</a></li>
                                    <li><a href="#"><img src="img/new/bag2.png" alt="">الكُتاب</a></li>
                                    <li><a href="#"><img src="img/new/doc2.png" alt="">المقالات</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="doc_footer_bottom">
                <div class="container d-flex justify-content-between">
                    <ul class="doc_footer_menu list-unstyled wow fadeInUp" data-wow-delay="0.2s">
                        <!-- <li><a href="#">Blog</a></li>
                        <li><a href="#">Latest Projects</a></li> -->

                    </ul>
                    <p style="font-size: x-large; margin-left: 600px;">© 2024 كل الحقوق محفوظة ل <a href="arabic.php" style="font-size: x-large;">نانسى عبدالله</a></p>

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