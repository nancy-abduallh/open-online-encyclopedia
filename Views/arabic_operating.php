
<?php session_start();
 require_once'../controls/dbcon.php'; 
//  require_once 'index.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }

    
$sql = "SELECT article_id FROM article";
$articleId=11;

$sql = "SELECT page_id FROM page";
$pageId=6;
$sql = "SELECT page_url FROM page";
$page_url="arabic_operating.php";



 ?>
<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-select.min.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/font-size/css/rvfs.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/video/video-js.min.css">
    <link rel="stylesheet" href="assets/tooltipster/css/tooltipster.bundle.css">
    <link rel="stylesheet" href="assets/prism/prism.css">
    <link rel="stylesheet" href="assets/prism/prism-coy.css">
    <link rel="stylesheet" href="assets/magnify-pop/magnific-popup.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>الموسوعة</title>
    <style>
        .bookmark-btn  {
    background: black;
    border: 1 groove black;
    color: white;
    cursor: pointer;
}

    </style>
</head>

<body class="doc full-width-doc sticky-nav-doc onepage-doc" data-spy="scroll" data-target=".navbar" data-offset="-120" dir="rtl">
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

    <div class="body_wrapper sticky_menu">
        <nav class="navbar navbar-expand-lg menu_one dark_menu sticky-nav">
            <div class="container-fluid pl-60 pr-60">
                
                <div class="search-input">
                    <ion-icon class="search-icon" name="search-outline"></ion-icon>
                    <input type="text" placeholder="ابحث..." value="" class="">
                </div>
                <div class="px-2 js-darkmode-btn d-lg-none" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something"></label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher">
                </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a href="arabic.php" class="nav-link dropdown-toggle" style="left: 50px;">الصفحة الرئيسية</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            
                        </li>
                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                الصفحات
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                            <!-- <li class="nav-item"><a href="editor page.php" class="nav-link">Editor Page</a></li> -->
                            <!-- <li class="nav-item"><a href="advertisements.php" class="nav-link">Advertisements</a></li>                                 -->
                                <li class="nav-item"><a href="contact.php" class="nav-link">تواصل معنا</a></li>
                                
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
                                <!-- <li class="nav-item"><a href="software engineering.php" class="nav-link">Software engineering</a></li> -->
                                <li class="nav-item"><a href="arabic_software.php" class="nav-link">هندسة البرمجيات</a>
                                <li class="nav-item"><a href="programming.php" class="nav-link">البرمجة</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">الأمن الالكترونى</a></li>
                                </li>
                                <!-- <li class="nav-item"><a href="programming.php" class="nav-link">Programming</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">Cypersecurity</a></li> -->
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-btn">
                <div class="nav-link dropdown" style="margin-bottom: 30px; "  onchange="set-language()" name="language">
                    <button class="btn btn-outline-light dropdown-toggle" style="background-color: black;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        العربية
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="operating system.php">English</a>
                        
                    </div>
                </div>
            </li>
            <li>
            <form id="bookmarkForm" method="post" action="bookmarkarabic.php">
            <input type="hidden" id="page_url" name="page_url" value="<?php echo $page_url ?>">
            <input type="text" style="margin-bottom: 30px;" id="page_title" name="page_title" placeholder="Page Title" required><button class="bookmark-btn" >حفظ </button>

            
            </form>

            </li>
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

        <section class="doc_documentation_area onepage_doc_area" id="sticky_doc">
            <div class="overlay_bg"></div>
            <div class="container-fluid pl-60 pr-60">
                <div class="row doc-container">
                    <div class="col-lg-2 doc_mobile_menu doc-sidebar display_none">
                        <aside class="doc_left_sidebarlist">
                            <!-- <h3 class="nav_title">Doc Navigation</h3> -->
                            <div class="scroll" style="width: 220px;">
                                <ul class="list-unstyled nav-sidebar doc-nav">
                                    <li class="nav-item active">
                                        <a href="#shortcodes" class="nav-link"><img src="img/onepage-icon/smiles-icon.png" alt="">التاريخ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#article" class="nav-link" style="width: 300px;"><img src="img/side-nav/briefcase.png" alt="briefcase" >أنواع<br> نظم التشغيل</a>
                                        <ul class="list-unstyled dropdown_nav" style="width:300px;">
                                            <li class="nav-item"><a href="#tabs" class="nav-link" style="width: 250px; margin-left:5px;">مهمة واحدة<br>ومتعددة المهام</a></li>
                                            <li class="nav-item"><a href="#accordian" class="nav-link" style="width: 450px; margin-left:20px;">مستخدم واحد<br>ومتعدد المستخدم</a></li>
                                            <li class="nav-item"><a href="#notice" class="nav-link">التوزيع</a></li>
                                            <li class="nav-item"><a href="#tooltip" class="nav-link">المدمجة</a></li>
                                            <li class="nav-item"><a href="#table" class="nav-link">المكتبة</a></li>
                                            <li class="nav-item"><a href="#lightbox" class="nav-link">الوقت الحقيقي</a></li>
                                            
                                        </ul>
                                        <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#typography" class="nav-link"><img src="img/side-nav/document.png" alt="">العناصر</a>
                                        <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#code" class="nav-link">النواة</a></li>
                                            <li class="nav-item"><a href="#img" class="nav-link">تنفيذ البرنامج</a></li>
                                            <li class="nav-item"><a href="#video" class="nav-link">مقاطعة البرمجيات</a></li>
                                            <li class="nav-item"><a href="#software" class="nav-link">مقاطعة الأجهزة</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#changelog" class="nav-link"><img src="img/side-nav/clock.png" alt="">تنمية نظم التشغيل <br> كهواية</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#comment" class="nav-link" style="margin-bottom: 30px;"><img src="img/side-nav/chat.png" alt="">التعليقات</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="#cheatsheet" class="nav-link"><img src="img/side-nav/book.png" alt="">Cheatsheet</a>
                                    </li> -->
                                    <!-- <li class="nav-item">
                                        <a href="#ex1" class="nav-link"><img src="img/side-nav/chat.png" alt="">Example Item</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ex2" class="nav-link"><img src="img/side-nav/layout.png" alt="">Example Item 02</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#ex3" class="nav-link"><img src="img/side-nav/support.png" alt="">Example Item 03</a>
                                    </li>
                                </ul> -->
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-8"  id="articleContent" contenteditable="false">
                        <div class="documentation_info" id="post">
                            <!--doc-->
                            <article class="documentation_body doc-section pt-0" id="doc">
                                <div class="shortcode_title" style="margin-left: 600px;">
                                    <h2><u>نظم التشغيل</u></h2>
                                    <p style="margin-left: 50px; font-size:larger;">أمثلة لنظم التشغيل:</p>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/topic-icon-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style="margin-left: 20px;"><u>مايكروسوفت ويندوز</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:190px;    text-align: justify;  font-size:larger;">مايكروسوفت ويندوز عبارة عن عائلة من أنظمة التشغيل الخاصة التي صممتها شركة Microsoft Corporation وتستهدف في المقام الأول نظام التشغيل x86
                                                    أجهزة الكمبيوتر القائمة على الهندسة المعمارية. اعتبارًا من عام 2022، بلغت حصتها في السوق العالمية على جميع الأنظمة الأساسية حوالي 30%، وعلى منصات سطح المكتب/الكمبيوتر المحمول،
                                                    بلغت حصتها في السوق حوالي 75٪. وأحدث إصدار هو Windows 11. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/coding.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style="margin-left: 100px;"><u>لينكس</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;  width:180px;   text-align: justify;  font-size:larger;">نشأت نواة لينكس في عام 1991، كمشروع للينوس تورفالدس، عندما كان طالبًا جامعيًا في فنلندا.
                                                    قام بنشر معلومات حول مشروعه في مجموعة أخبار لطلاب الكمبيوتر والمبرمجين، وتلقى الدعم والتشجيع
                                                    مساعدة من المتطوعين الذين نجحوا في إنشاء نواة كاملة وعملية.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style=" word-wrap: break-word; display: inline-block;     text-align: justify;  "><u>خدمات نظام z/OS UNIX</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:160px;     text-align: justify;  font-size:larger;">تم تقديمه لأول مرة كترقية OpenEdition إلى الإصدار 4 من منتج نظام MVS/ESA، وتم الإعلان عنه في فبراير 1993 مع دعم POSIX ومعايير أخرى. تم إنشاء خدمات نظام z/OS UNIX بناءً على خدمات MVS ولا يمكن تشغيلها بشكل مستقل.
                                                    في حين قدمت شركة IBM في البداية OpenEdition لتلبية متطلبات FIPS، فإن العديد من مكونات z/OS تتطلب الآن خدمات UNIX، على سبيل المثال، TCP/IP.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/newspaper.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5  style="margin-left: 160px;"><u>ماك </u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify;  font-size:larger;">نظام التشغيل macOS (المعروف سابقًا باسم "Mac OS X" ولاحقًا "OS X") عبارة عن مجموعة من أنظمة التشغيل الرسومية مفتوحة النواة التي تم تطويرها وتسويقها وبيعها بواسطة شركة Apple Inc.، ويتم تحميل أحدثها مسبقًا على جميع أجهزة كمبيوتر Macintosh التي يتم شحنها حاليًا.
                                                    macOS هو خليفة نظام التشغيل Mac OS الكلاسيكي الأصلي، والذي كان نظام التشغيل الأساسي لشركة Apple منذ عام 1984.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style=" word-wrap: break-word; display: inline-block;     text-align: justify;  "><u>أنظمة التشغيل Unix و Unix المشابهة</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify;  font-size:larger;">تمت كتابة Unix في الأصل بلغة التجميع. كتب كين طومسون لغة B، استنادًا بشكل أساسي إلى BCPL، استنادًا إلى خبرته في مشروع MULTICS.
                                                    تم استبدال B بـ C، وتم تطوير Unix، الذي أعيد كتابته بلغة C، إلى عائلة كبيرة ومعقدة من أنظمة التشغيل المترابطة والتي كان لها تأثير في كل نظام تشغيل حديث (انظر التاريخ).</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/management.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style="margin-left: 100px;"><u>BSD وأحفاده</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:200px;    text-align: justify;  font-size:larger;">حدى المجموعات الفرعية لعائلة Unix هي عائلة Berkeley Software Distribution، والتي تتضمن FreeBSD وNetBSD وOpenBSD. أنظمة التشغيل هذه هي
                                                     الأكثر شيوعًا على خوادم الويب، على الرغم من أنها يمكن أن تعمل أيضًا كنظام تشغيل للكمبيوتر الشخصي.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/newspaper.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style="margin-left: 239px;"><u> z/OS</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;  text-align: justify;  font-size:larger; width:290px;">لا يزال نظام التشغيل z/OS لأجهزة الكمبيوتر المركزية IBM z/Architecture قيد الاستخدام والتطوير، ولا يزال OpenVMS، الذي كان سابقًا من DEC، قيد التطوير النشط بواسطة VMS Software Inc.
                                                    لا يزال نظام التشغيل IBM i لأجهزة الكمبيوتر متوسطة المدى IBM AS/400 وIBM Power Systems قيد الاستخدام والتطوير.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/side-nav/chat.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5><u>Social software engineering</u></h5>
                                                </a>
                                                <p>Social software engineering (SSE) is a branch of software engineering that is concerned with the social aspects of 
                                                    software development and the developed software</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <!-- <div class="icon">
                                                <img src="img/home_one/icon/color-palette.png" alt="">
                                            </div> -->
                                            <!-- <div class="media-body">
                                                <a href="#">
                                                    <h5>Introduction</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <!-- <div class="icon">
                                                <img src="img/home_one/icon/android.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Getting Started</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <!-- <div class="icon">
                                                <img src="img/home_one/icon/lock.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>This Document</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="border_bottom"></div>
                            </article>
                            <!--shortcode-->
                            <article class="documentation_body shortcode_text doc-section" id="shortcodes">
                                <div class="shortcode_title">
                                    <h2 style="margin-left: 700px;"><u>التاريخ</u></h2>
                                    <p style=" word-wrap: break-word; display: inline-block;     text-align: justify;"><span>تم تصميم أجهزة الكمبيوتر المبكرة لأداء سلسلة من المهام الفردية، مثل الآلة الحاسبة.</span> تم تطوير ميزات نظام التشغيل الأساسية في الخمسينيات من القرن العشرين، مثل وظائف المراقبة المقيمة التي يمكنها تشغيل برامج مختلفة تلقائيًا على التوالي لتسريع المعالجة.</p>
                                </div>
                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify; font-size:larger; ">لم تكن أنظمة التشغيل موجودة بأشكالها الحديثة والأكثر تعقيدًا حتى أوائل الستينيات. تمت إضافة ميزات الأجهزة التي مكنت من استخدام مكتبات وقت التشغيل والمقاطعات والمعالجة المتوازية. عندما أصبحت أجهزة الكمبيوتر الشخصية شائعة في الثمانينيات، تم تصنيع أنظمة تشغيل لها مماثلة من حيث المفهوم لتلك المستخدمة في أجهزة الكمبيوتر الأكبر حجمًا.
                                في أربعينيات القرن العشرين، لم يكن للأنظمة الرقمية الإلكترونية الأولى أنظمة تشغيل. تمت برمجة الأنظمة الإلكترونية في ذلك الوقت على صفوف من المفاتيح الميكانيكية أو عن طريق أسلاك توصيل على لوحات التوصيل.
                                  كانت هذه أنظمة ذات أغراض خاصة، على سبيل المثال، قامت بإنشاء جداول المقذوفات للجيش أو التحكم في طباعة شيكات الرواتب من البيانات الموجودة على البطاقات الورقية المثقوبة.
                                  بعد اختراع أجهزة الكمبيوتر ذات الأغراض العامة القابلة للبرمجة،<b> لغات الآلة</b>(التي تتكون من سلاسل من الأرقام الثنائية 0 و 1 على شريط ورقي مثقوب) تم تقديمها مما أدى إلى تسريع عملية البرمجة (ستيرن، 1981).
                                  في أوائل الخمسينيات من القرن العشرين، كان الكمبيوتر قادرًا على تنفيذ برنامج واحد فقط في كل مرة. كان لكل مستخدم استخدام الكمبيوتر بمفرده لفترة محدودة وسيصل في الوقت المحدد مع برنامجه وبياناته على بطاقات ورقية مثقوبة أو شريط مثقوب.</b>.
                                    </p>
                                <ul class="ul" dir="rtl">
                                    <li style="margin-left: 630px;">ما هي لغات الآلة؟&nbsp;<strong><a href="https://ar.wikipedia.org/wiki/%D9%84%D8%BA%D8%A9_%D8%A7%D9%84%D8%A2%D9%84%D8%A9" target="_blank" rel="noopener noreferrer"><u>لغات الآلة</u></a></strong> </li>
                                    <!-- <li>Who is Margaret Hamilton?&nbsp;<strong><a href="https://en.wikipedia.org/wiki/Margaret_Hamilton_(software_engineer)" target="_blank" rel="noopener noreferrer"><u>Margaret Hamilton</u></a></strong></li> -->
                                    <!-- <li>WordPress Lessons&nbsp;<strong><a href="https://codex.wordpress.org/WordPress_Lessons" target="_blank" rel="noopener noreferrer">Visit Articles</a></strong></li> -->
                                </ul>
                                <h4 class="c_head" id="article" style="margin-left: 609px;"><u>أنواع أنظمة التشغيل</u></h4>
                                <ul class="list-unstyled article_list tag_list">
                                    <li><a href="tab.html"><i class="icon_document_alt"></i>مهمة واحدة ومتعددة المهام</a></li>
                                    <li><a href="accordion.html"><i class="icon_document_alt"></i>مستخدم واحد ومتعدد المستخدمين</a></li>
                                    <li><a href="notice.html"><i class="icon_document_alt"></i>التوزيع</a></li>
                                    <li><a href="doc-content-tables.html"><i class="icon_document_alt"></i>المدمجة</a></li>
                                    <li><a href="doc-element-lightbox.html"><i class="icon_document_alt"></i>المكتبة</a></li>
                                    <li><a href="tooltip.html"><i class="icon_document_alt"></i>الوقت الحقيقى</a></li>
                                    
                                </ul>
                                <div class="border_bottom"></div>
                                <div class="shortcode_info" id="tabs">
                                    <div class="tab_shortcode">
                                        <h2 class="s_title" id="tab" style="margin-left: 450px;"><u> مهمة واحدة ومتعددة المهام</u></h2>
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify; font-size:larger; "><code class="highlighter-rouge">نظام المهام الواحدة</code> يمكنه تشغيل برنامج واحد فقط في كل مرة، بينما <code class="highlighter-rouge"> نظام تشغيل متعدد المهام</code> يتم تحقيق ذلك بواسطة <b>وقت المشاركة
                                              </b>,
                                              حيث يتم تقسيم وقت المعالج المتاح بين عمليات متعددة. تتم مقاطعة كل هذه العمليات بشكل متكرر<b>شرائح الوقت</b> بواسطة نظام فرعي لجدولة المهام في نظام التشغيل. قد يكون تعدد المهام
                                         وتتميز بأنواع استباقية وتعاونية. في <b>تعدد المهام وقائية</b>, يقوم نظام التشغيل بتقطيع وقت وحدة المعالجة المركزية وتخصيص فتحة لكل برنامج. أنظمة التشغيل المشابهة لـ Unix، مثل Linux — أيضًا
                                         على أنها غير شبيهة بنظام Unix، مثل AmigaOS — تدعم المهام المتعددة الوقائية. يتم تحقيق تعدد المهام التعاوني من خلال الاعتماد على كل عملية لتوفير الوقت للعمليات الأخرى بطريقة محددة. إصدارات 16 بت من مايكروسوفت
                                         يستخدم Windows تعدد المهام التعاونية؛ تستخدم إصدارات 32 بت من كل من Windows NT وWin9x تعدد المهام الوقائي.</p>
                                        
                                    </div>
                                    <div class="process_tab_shortcode">
                                        <ul class="nav nav-tabs v_menu" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true"><span>1</span>وقت المشاركة</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false"><span>2</span>تعدد المهام وقائية</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab" aria-controls="charge" aria-selected="false"><span>3</span>شرائح الوقت</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="card-tab">
                                                <div class="version"> 
                                             <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">في الحوسبة،  <span class="blue"> وقت المشاركة </span>  هي مشاركة مورد الحوسبة بين العديد من المهام أو المستخدمين. فهو يتيح تعدد المهام بواسطة مستخدم واحد أو يتيح جلسات متعددة المستخدمين. </p>

                                                    <!-- <div class="v_head">
                                                    <u>Activities of Requirements engineering :</u>
                                                    </div> -->
                                                    <!-- <div class="v_middle">
                                                        <p><span class="red">1) Requirements inception or requirements elicitation :</span> Developers and stakeholders meet; the latter are inquired concerning their needs and wants regarding the software product.</p>
                                                        <p> <span class="green">2) Requirements analysis and negotiation :</span>Requirements are identified (including new ones if the development is iterative), and conflicts with stakeholders are solved. Both written and graphical tools (the latter commonly used in the design phase, but some find them helpful at this stage, too) are successfully used as aids. Examples of written analysis tools: use cases and user stories. Examples of graphical tools: UML and LML.</p>
                                                        <p><span class="blue">3) System modeling :</span>Some engineering fields (or specific situations) require the product to be completely designed and modeled before its construction or fabrication starts. Therefore, the design phase must be performed in advance. For instance, blueprints for a building must be elaborated before any contract can be approved and signed. Many fields might derive models of the system with the Lifecycle Modeling Language, whereas others, might use UML. Note: In many fields, such as software engineering, most modeling activities are classified as design activities and not as requirement engineering activities.</p>
                                                        <p><span class="red">4) Requirements specification :</span>Requirements are documented in a formal artifact called a Requirements Specification (RS), which will become official only after validation. A RS can contain both written and graphical (models) information if necessary. Example: Software requirements specification (SRS).</p>
                                                    </div> -->
                                                    
                                                </div>
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                                                <!-- <p>Twit brilliant he legged it he nicked it amongst hotpot chinwag spend a penny lemon squeezy he lost his bottle porkies, Why it's your round happy days.</p> -->
                                                <div class="version">
                                                   
                                                    <div class="v_middle">
                                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">المصطلح <span class="red">تعدد المهام وقائية :</span> يستخدم للتمييز بين نظام التشغيل متعدد المهام، والذي يسمح باستباق المهام، من نظام متعدد المهام التعاوني حيث يجب برمجة العمليات أو المهام بشكل صريح لتحقيق نتائج عندما لا تحتاج إلى موارد النظام.
                                                       بعبارات بسيطة: يتضمن تعدد المهام الوقائي استخدام آلية المقاطعة التي تعلق عملية التنفيذ الحالية وتستدعي برنامج جدولة لتحديد العملية التي يجب تنفيذها بعد ذلك. ولذلك، فإن كافة العمليات سوف تحصل على قدر معين من وقت وحدة المعالجة المركزية في أي وقت معين.</p>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="charge" role="tabpanel" aria-labelledby="charge-tab">
                                                <div class="version">
                                                    <div class="v_head">
                                                    </div>
                                                    <div class="v_middle">
                                                    <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">تسمى عمومًا الفترة الزمنية التي يُسمح خلالها بتشغيل العملية في نظام متعدد المهام الوقائي <span class="red">شريحة الوقت أو الكم</span>.يتم تشغيل المجدول مرة واحدة في كل شريحة مرة لاختيار العملية التالية التي سيتم تشغيلها.
                                                        يمكن أن يكون طول كل شريحة زمنية أمرًا بالغ الأهمية لتحقيق التوازن بين أداء النظام واستجابة العملية - إذا كانت الشريحة الزمنية قصيرة جدًا، فسيستهلك المجدول الكثير من وقت المعالجة، ولكن إذا كانت الشريحة الزمنية طويلة جدًا، فستستغرق العمليات وقتًا أطول للاستجابة لها مدخل.</p>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                           
                                            <button class="btn btn-info btn-lg previous"><i class="arrow_carrot-left"></i></button>
                                            <button class="btn btn-info btn-lg next"><i class="arrow_carrot-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="border_bottom"></div>
                                </div>
                                <!--accordian-->
                                <div class="shortcode_info" id="accordian">
                                    <div class="shortcode_title">
                                    <h2 style="margin-left: 350px;"><u>مستخدم واحد ومتعدد المستخدمين</u></h2>
                                         <div class="v-middle">
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">أنظمة التشغيل ذات المستخدم الواحد</code>لا تحتوي على تسهيلات لتمييز المستخدمين ولكنها قد تسمح بتشغيل برامج متعددة جنبًا إلى جنب.
                                        <code class="highlighter-rouge">نظام تشغيل متعدد المستخدمين</code> يمتد المفهوم الأساسي لتعدد المهام بمرافق تحدد العمليات والموارد، مثل مساحة القرص، التي تخص مستخدمين متعددين، ويسمح النظام لعدة مستخدمين بالتفاعل مع النظام في نفس الوقت. تقوم أنظمة تشغيل مشاركة الوقت بجدولة المهام من أجل الاستخدام الفعال للنظام وقد تتضمن أيضًا برامج محاسبة لتخصيص تكلفة وقت المعالج،

                                    </p>
                                         </div>
                                    </div>
                                    
                                </div>
                                <!--accordian-->
                                <!--notice-->
                                <div class="shortcode_info" id="notice">
                                    <div class="shortcode_title">
                                    <h2 style="margin-left: 750px;"><u>التوزيع</u></h2>
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">نظام تشغيل موزع</code> يدير مجموعة من أجهزة الكمبيوتر المتميزة والمتصلة بالشبكة ويجعلها تبدو وكأنها جهاز كمبيوتر واحد، حيث يتم توزيع جميع الحسابات (مقسمة بين أجهزة الكمبيوتر المكونة).</p>
                                    </div>
                                    
                                    <h4 class="s_title" id="notice" style="margin-left: 600px;">نماذج الحوسبة الموزعة</h4>
                                    <blockquote class="media notice notice-success" style="background-color:cadetblue;">
                                        <i class="icon_menu-square_alt2"></i>
                                        <div class="media-body">
                                            <h5 style="margin-left: 650px;">منظمة</h5>
                                            <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "> <span> النظام مركزي</span> لديه مستوى واحد من الهيكل، حيث تعتمد جميع العناصر المكونة بشكل مباشر على عنصر تحكم واحد.
                                    <span>النظام اللامركزي</span> هو هرمي. يوحد المستوى السفلي مجموعات فرعية من كيانات النظام. تتحد مجموعات الكيانات الفرعية هذه بدورها في مستويات أعلى، وتبلغ ذروتها في النهاية عند عنصر رئيسي مركزي. النظام الموزع عبارة عن مجموعة من العناصر المستقلة بدون مفهوم المستويات.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-warning" style="background-color:bisque;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5 style="margin-left: 650px;">الاتصال</h5>
                                            <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">تربط الأنظمة المركزية المكونات مباشرة بكيان رئيسي مركزي بطريقة محورية ومتحدثة. النظام اللامركزي (ويعرف أيضا باسم<span>نظام الشبكة</span>) يدمج المسارات المباشرة وغير المباشرة بين العناصر المكونة والكيان المركزي. عادةً ما يتم تكوين هذا كتسلسل هرمي مع مسار واحد أقصر بين أي عنصرين. وأخيرًا، لا يتطلب نظام التشغيل الموزع أي نمط؛ الاتصالات المباشرة وغير المباشرة ممكنة بين أي عنصرين. خذ بعين الاعتبار ظاهرة السبعينيات
                                            <span>"فن السلسلة" أو مخطط التنفس</span>الرسم كنظام متصل بالكامل، وشبكة العنكبوت أو نظام الطريق السريع بين الولايات بين المدن الأمريكية كأمثلة على
                                         <i> نظام متصل جزئيا</i>.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-danger" style="background-color:darksalmon;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5 style="margin-left: 650px;">التحكم</h5>
                                            <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">وقد وجهت الأنظمة المركزية واللامركزية<span> تدفقات الاتصال
                                 </span>من وإلى الكيان المركزي، بينما تتواصل الأنظمة الموزعة عبر مسارات عشوائية. وهذه هي الفكرة المحورية للاعتبار الثالث. يتضمن التحكم تخصيص المهام والبيانات لعناصر النظام لتحقيق التوازن بين الكفاءة والاستجابة والتعقيد.
                                             <span>الأنظمة المركزية واللامركزية</span> تقديم المزيد من التحكم، وربما تخفيف الإدارة عن طريق الحد من الخيارات. من الصعب التحكم بشكل صريح في الأنظمة الموزعة، ولكنها تتوسع بشكل أفضل أفقيًا وتوفر نقاطًا أقل للفشل على مستوى النظام. تتوافق الجمعيات مع الاحتياجات التي يفرضها تصميمها ولكن ليس بسبب الفوضى التنظيمية</p>
                                        </div>
                                    </blockquote>
                                    <!-- <h4 class="s_title" id="explanation">Construction design</h4>
                                    <p class="explanation expn-left">In order to account for the unanticipated gaps in the software design, during software construction some design modifications must be made on a smaller or larger scale to flesh out details of the software design.</p> -->
                                </div>
                                <!--notice-->
                                <!--tooltip-->
                                <div class="shortcode_info" id="tooltip">
                                    <h2 class="s_title" id="tooltip-t" style="margin-left: 750px;"><u>المدمجة</u></h2>
                                    <div class="tooltip_content">
                                        <h6 style="margin-left: 580px;">ما هي أنظمة التشغيل المدمجة ؟</h6>
                                        <p><code class="highlighter-rouge" dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">أنظمة التشغيل المدمجة
                   </code> تم تصميمها لاستخدامها في أنظمة الكمبيوتر المدمجة. وهي مصممة للعمل على أجهزة صغيرة ذات استقلالية أقل (مثل أجهزة المساعد الرقمي الشخصي). فهي مدمجة للغاية وفعالة للغاية من حيث التصميم وقادرة على العمل بكمية محدودة من الموارد. يعد Windows CE وMinix 3 بعض الأمثلة على أنظمة التشغيل المضمنة.
 </p>
                                        <!-- <h5>Categorization of Testing</h5>
                                        <p><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">Automated testing :</a> In software testing, test automation is the use of software separate from the software being tested to control the execution of tests and the comparison of actual outcomes with predicted outcomes.Test automation can automate some repetitive but necessary tasks in a formalized testing process already in place, or perform additional testing that would be difficult to do manually. Test automation is critical for continuous delivery and continuous testing.</p>
                                        <p><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">Unit testing :</a> Unit testing refers to verifying the behavior of a relatively small portion of the code, a unit, in isolation from the rest of the codebase. A unit is often a function, module, method or class.  To isolate the unit, a test substitutes dependences with test doubles.</p>
                                        <p><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">Integration testing :</a> Integration testing verifies the behavior of multiple units interacting, but is less than whole system. Often an integration test validates the interface between components against a software design.</p> -->
                                    </div>
                                    <div class="border_bottom"></div>
                                </div>
                                <!--tooltip-->
                                <!--table-->
                                <div class="shortcode_info">
                                    <h2 class="s_title" id="table" style="margin-left: 750px;"><u>المكتبة</u></h2>
                                    <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">نظام تشغيل المكتبة</code> هي الخدمة التي يتم فيها توفير الخدمات التي يوفرها نظام التشغيل النموذجي، مثل الشبكات، في شكل مكتبات ويتم تجميعها مع رمز التطبيق والتكوين لإنشاء Unikernel: مساحة عنوان واحدة متخصصة وصورة آلة يمكن نشرها إلى البيئات السحابية أو المدمجة.</p>
                                    <div class="table-responsive">
                                        <table class="table table_shortcode">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>أنواع المكتبات :</th>
                                                    <th>المكتبات الثابتة</th>
                                                    <th>المكتبات المشتركة</th>
                                                    <th>مكتبات الصف</th>



                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>تعريفاتهم :</th>
                                                    <td>
                                            <pdir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">عندما يتم إجراء الارتباط أثناء إنشاء ملف قابل للتنفيذ أو ملف كائن آخر، فإنه يُعرف باسم<b> الارتباط الثابت أو الربط المبكر</b>.<br> في هذه الحالة، يتم الارتباط عادة بواسطة رابط، ولكن يمكن أيضًا أن يتم بواسطة المترجم.<br> </p>
                                                        </td>
                                                    <td>
                                            <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "> <b>مكتبة مشتركة أو كائن مشترك</b> هو ملف مخصص لمشاركته بواسطة الملفات القابلة للتنفيذ وملفات الكائنات المشتركة الأخرى. يتم تحميل الوحدات التي يستخدمها البرنامج من كائنات فردية مشتركة إلى الذاكرة في وقت التحميل أو وقت التشغيل، بدلاً من نسخها بواسطة رابط عندما يقوم بإنشاء ملف واحد قابل للتنفيذ متجانس للبرنامج.</p>
                                                    </td>
                                                    <td>
                                    <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><b>مكتبات الصف</b> هي المكافئ التقريبي لـ OOP للأنواع القديمة من مكتبات التعليمات البرمجية. أنها تحتوي على فئات تصف الخصائص وتحدد الإجراءات (الطرق) التي تتضمن الكائنات. تُستخدم مكتبات الفئات لإنشاء مثيلات أو كائنات يتم تعيين خصائصها على قيم محددة. في بعض لغات OOP، مثل Java، يكون التمييز واضحًا، حيث غالبًا ما توجد الفئات في ملفات المكتبة (مثل تنسيق ملف JAR الخاص بـ Java) والكائنات التي تم إنشاء مثيل لها الموجودة في الذاكرة فقط (على الرغم من إمكانية جعلها ثابتة في ملفات منفصلة). </p>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    
                                <!--table-->
                                <!--lightbox-->
                                <div class="shortcode_info" id="lightbox">
                                    <div class="shortcode_title">
                                        <h2 class="s_title" style="margin-top: 40px; margin-left: 635px;"><u>الوقت الحقيقى</u></h2>
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">نظام التشغيل في الوقت الحقيقي</code> هو نظام تشغيل يضمن معالجة الأحداث أو البيانات في لحظة زمنية محددة. قد يكون نظام التشغيل في الوقت الحقيقي أحاديًا أو متعدد المهام، ولكن عند تعدد المهام،
                                        ويستخدم خوارزميات جدولة متخصصة لتحقيق الطبيعة الحتمية للسلوك. يقوم هذا النظام القائم على الأحداث بالتبديل بين المهام بناءً على أولوياتها أو الأحداث الخارجية، في حين تقوم أنظمة تشغيل مشاركة الوقت بتبديل المهام بناءً على مقاطعة الساعة.</p>
                                    </div>
                                    
                                </div>
                                <!--lightbox-->
                                <!--footnote-->
                                
                                    
                                </div>
                                
                            </article>
                            
                            <!--typography-->
                            <article class="shortcode_info documentation_body typography_content doc-section" id="typography">
                                <div class="shortcode_title">
                                    <h2 style="margin-left: 750px;"><u>العناصر</u></h2>
                                    <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; margin-left:270px;  ">جميع مكونات نظام التشغيل موجودة من أجل جعل الأجزاء المختلفة للكمبيوتر تعمل معًا. </p>
                                </div>
                                
                                <div class="code_item">
                                    <h4 class="c_head load-order-2" id="code" style="margin-left: 750px;"><u>النواة</u></h4>
                                    <div class="unorderlist">
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">بمساعدة البرامج الثابتة وبرامج تشغيل الأجهزة، توفر النواة المستوى الأساسي للتحكم في كافة أجهزة الكمبيوتر. فهو يدير الوصول إلى الذاكرة للبرامج الموجودة في ذاكرة الوصول العشوائي (RAM)، ويحدد البرامج التي يمكنها الوصول إلى موارد الأجهزة، ويقوم بإعداد أو إعادة ضبط حالات تشغيل وحدة المعالجة المركزية لتحقيق التشغيل الأمثل في جميع الأوقات،

                                        </p>
                                    </div>
                                    
                                </div>
                                <div class="img_item">
                                    <h4 class="c_head load-order-2" id="img" style="margin-left: 690px;"><u>تنفيذ البرنامج</u></h4>
                                    <div class="unorderlist">
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">يوفر نظام التشغيل واجهة بين البرنامج التطبيقي وأجهزة الكمبيوتر، بحيث لا يمكن لبرنامج التطبيق التفاعل مع الأجهزة إلا من خلال إطاعة القواعد والإجراءات المبرمجة في نظام التشغيل.
                                        نظام التشغيل هو أيضًا مجموعة من الخدمات التي تعمل على تبسيط تطوير وتنفيذ برامج التطبيقات. يتضمن تنفيذ برنامج تطبيقي عادةً إنشاء عملية بواسطة نواة نظام التشغيل، والتي تقوم بتعيين مساحة الذاكرة والموارد الأخرى،
                                        يحدد أولوية للعملية في الأنظمة متعددة المهام، ويحمل الكود الثنائي للبرنامج في الذاكرة، ويبدأ تنفيذ البرنامج التطبيقي، الذي يتفاعل بعد ذلك مع المستخدم ومع الأجهزة. .</p>
                                    </div>
                                    
                                </div>

                                
                                <div class="documentation_body typography_content" id="video">
                                    <div class="shortcode_title">
                                    <h4 style="margin-left: 654px;"><u>مقاطعة البرمجيات</u></h4>
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><span class="blue">مقاطعة البرمجيات</span> هي رسالة إلى العملية تفيد بحدوث حدث ما. ويتناقض هذا مع مقاطعة الأجهزة — وهي رسالة إلى وحدة المعالجة المركزية (CPU) بحدوث حدث ما. تشبه مقاطعات البرامج مقاطعات الأجهزة
                                            - هناك تغيير بعيدًا عن العملية الجارية حاليًا. وبالمثل، تقوم مقاطعات الأجهزة والبرامج بتنفيذ روتين خدمة المقاطعة
                                            </p>
                                    
                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">
                               <span class="blue"> مقاطعة البرنامج</span> قد تكون أحداثًا تحدث بشكل طبيعي. من المتوقع أن تحدث شريحة زمنية، لذلك سيتعين على النواة إجراء تبديل السياق. قد يقوم برنامج الكمبيوتر بتعيين مؤقت لينطلق بعد بضع ثوانٍ في حالة تسبب كثرة البيانات في استغراق الخوارزمية وقتًا طويلاً.

                                </p>
                                        </div>                             
                                </div>
                                  
                                <div class="documentation_body typography_content" id="software">
                                    <div class="shortcode_title">
                                    <h4 style="margin-left: 670px;"><u>مقاطعة الأجهزة</u></h4>
                                        <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><span class="blue">أجهزة الإدخال والإخراج (I/O).</span> بطأ من وحدة المعالجة المركزية. لذلك، قد يؤدي ذلك إلى إبطاء جهاز الكمبيوتر إذا اضطرت وحدة المعالجة المركزية إلى الانتظار حتى انتهاء كل عملية إدخال/إخراج. بدلاً من،
                                        قد يقوم الكمبيوتر بتنفيذ المقاطعات لإكمال الإدخال/الإخراج، مما يتجنب الحاجة إلى الاستقصاء أو الانتظار المزدحم.</p>
                                    
                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">تتطلب بعض أجهزة الكمبيوتر مقاطعة لكل حرف أو كلمة، مما يكلف قدرًا كبيرًا من وقت وحدة المعالجة المركزية.
                               <span class="blue">  الوصول المباشر للذاكرة (DMA)</span> إنها ميزة معمارية تسمح للأجهزة بتجاوز وحدة المعالجة المركزية والوصول إلى الذاكرة الرئيسية مباشرة.

                                </p>
                                        </div>                             
                                </div>


                            </article>
                            <article class="shortcode_info doc-section" id="changelog" style="margin-bottom: 100px;">
                                <div class="shortcode_title" >
                                    <h2 style="margin-left: 450px;" ><u>تطوير نظام التشغيل كهواية</u></h2>
                                    <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">
                                    يمكن تصنيف نظام تشغيل الهوايات على أنه نظام لم يتم اشتقاق كوده مباشرة من نظام تشغيل موجود، ولديه عدد قليل من المستخدمين والمطورين النشطين.
                                    </p>
                                    <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">
                                    في بعض الحالات، يكون تطوير الهواية داعمًا لـ <span class="blue">"homebrew"</span> جهاز الحوسبة، على سبيل المثال، <span class="blue"> كمبيوتر لوحي واحد</span> مدعوم من<span class="blue"> 6502 معالج دقيق</span>. أو قد يكون التطوير مخصصًا لهندسة معمارية مستخدمة على نطاق واسع بالفعل. قد يأتي تطوير نظام التشغيل من مفاهيم جديدة تمامًا، أو قد يبدأ من خلال نمذجة نظام تشغيل موجود.
                                         في كلتا الحالتين، الهاوي هو المطور الخاص به، أو قد يتفاعل مع مجموعة صغيرة وغير منظمة في بعض الأحيان من الأفراد الذين لديهم اهتمامات مماثلة.</p>
                                    </div>
                                
                                <div class="border_bottom"></div>
                                <div class="row feedback_link">
                                    <div class="col-lg-6">
                                        <h6><i class="icon_mail_alt"></i>لا تزال عالقا؟<a href="#" data-toggle="modal" data-target="#exampleModal2">كيف يمكن أن نساعد؟</a></h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>هل كان المقال مفيدا؟ <a href="#" class="h_btn">نعم</a><a href="#" class="h_btn">لا</a></p>
                                    </div>
                                </div>


                                <div id="comment" class="comment_inner">
                                <h2 class="c_head" style="margin-left: 750px; margin-top:40px; "><u>التعليقات</u></h2>
                                <br>
                                <?php
                                
                                include_once "article_comments2.php";
                                  ?>
                                
                            </div>
                            <div class="blog_comment_box topic_comment">
                                <h2 class="c_head" style="margin-left: 720px; ">اترك تعليقاً</h2>
                                <!-- <p>Your email address will not be published. Required fields are marked *</p> -->
                                <form class="get_quote_form row" action="process_comment.php ?>" method="post">
                                <input type="hidden" name="article_id" value="<?php echo $articleId; ?>">    
                                <input type="hidden" name="page_id" value="<?php echo $pageId; ?>">    

                               
                                    <div class="col-md-12 form-group">
                                    <input type="hidden" name="article_id" value="<?php echo $articleId; ?>">   
                                    <input type="hidden" name="page_id" value="<?php echo $pageId; ?>">     
                                        <textarea class="form-control message " name="comment_text" required></textarea>
                                        <label class="floating-label" style="margin-left: 720px; " >اكتب تعليق...</label>
                                    </div>
                                    <div class="col-md-12 form-group check_input">
                                        <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                        <!-- <label for="fruit1">Save my name, email, and website in this browser for the
                                            next time I comment.</label> -->
                                    </div>
                                    <div class="col-md-12 form-group"><button class="btn action_btn thm_btn" type="submit" name="submit" >نشر التعليق</button></div>
                                </form>
                            </div>
                        </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 doc_right_mobile_menu">
                        <div class="open_icon" id="right">
                            <i class="arrow_carrot-left"></i>
                            <i class="arrow_carrot-right"></i>
                        </div>
                        <div class="doc_rightsidebar"  style="right: 1100px; display:block;">
                            <ul class="list-unstyled doc_right_link">
                            <li><a href="#" ><i class=" icon_pencil"></i>تعديل هذه الصفحة</a></li>
                            <li><a href="#"><i class=" icon_text"></i>حفظ التعدلات</a></li>
                                    </ul>
                            <select id="mySelect">
                                <option data-content="<i class='fab fa-windows'></i> Windows">ويندوز</option>
                                <option data-content="<i class='fab fa-apple'></i> Ios">Ios</option>
                            </select>
                            <div id="font-switcher" class="d-flex justify-content-between align-items-center">
                                <div id="rvfs-controllers" class="fontsize-controllers group"></div>
                                <a href="javascript:window.print()" class="print"><i class="icon_printer"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="simple_footer">
            <img class="leaf_right" src="img/home_one/leaf_footter.png" alt="">
            <div class="container ">
                <div class="row">
                <div class="col-lg-6">
                        <p style="font-size: x-large;">© 2024 كل الحقوق محفوظة ل <a href="index.html" style="font-size: x-large;">نانسى عبدالله</a></p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="list-unstyled f_social_icon">
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_vimeo"></i></a></li>
                            <li><a href="#"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Tooltip content -->
    
    
    
    
    

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script>
        function enableEditing() {
            var articleContentDiv = document.getElementById('articleContent');
            articleContentDiv.contentEditable = true;
            articleContentDiv.focus(); // Set focus to enable editing
        }

        function saveChanges() {
            var editedContent = document.getElementById('articleContent').innerHTML;
            
            // Send the edited content to the server for saving to database
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "save_article.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert("Changes saved successfully!");
                    } else {
                        alert("Failed to save changes. Please try again.");
                    }
                }
            };
            xhr.send("content=" + encodeURIComponent(editedContent));
        }

        // Load previously edited content from server/database on page load
        window.onload = function() {
            // You can make a request to load the article content from the database here
            // Example:
            // var xhr = new XMLHttpRequest();
            // xhr.open("GET", "load_article.php", true);
            // xhr.onreadystatechange = function() {
            //     if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            //         document.getElementById('articleContent').innerHTML = xhr.responseText;
            //     }
            // };
            // xhr.send();
        };
    </script>




    <script src="scripts.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap-select.min.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/anchor.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/prism/prism.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="assets/tooltipster/js/tooltipster.bundle.min.js"></script>
    <script src="assets/font-size/js/rv-jquery-fontsize-2.0.3.js"></script>
    <script src="assets/video/video.min.js"></script>
    <script src="assets/video/wistia.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="js/onpage-menu.js"></script>
    <script src="js/main.js"></script>

</body>
</html>