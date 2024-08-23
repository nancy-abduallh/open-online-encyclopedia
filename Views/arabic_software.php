
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
$articleId=1;

$sql = "SELECT page_id FROM page";
$pageId=5;
$sql = "SELECT page_url FROM page";
$page_url="arabic_software.php";

 ?>
<!doctype html>
<html lang="ar" dir="rtl">

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

<body class="doc full-width-doc sticky-nav-doc onepage-doc" data-spy="scroll" data-target=".navbar" data-offset="-120" lang="ar" dir="rtl">
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
                
                <div class="search-input" >
                    <ion-icon class="search-icon" name="search-outline" style="left: 500px;"></ion-icon>
                    <input type="text" placeholder="Search..." value="" class="">
                </div>
                <div class="px-2 js-darkmode-btn d-lg-none" title="Toggle dark mode">
                    <label for="something" class="tab-btn tab-btns">
                        <ion-icon name="moon"></ion-icon>
                    </label>
                    <label for="something" class="tab-btn">
                        <ion-icon name="sunny"></ion-icon>
                    </label>
                    <label class=" ball" for="something"></label>
                    <input type="checkbox" name="something" id="something" class="dark_mode_switcher" >
                </div>
                <button style="margin-left: 500px;"   class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <ul class="navbar-nav menu ml-auto" >
                        <li class="nav-item dropdown submenu">
                            <a href="arabic.php" class="nav-link dropdown-toggle" style="left: 50px;" >الصفحة الرئيسية</a>
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
                            <li class="nav-item"><a href="advertisements.php" class="nav-link">الاعلانات</a></li>                                
                                <li class="nav-item"><a href="contact.php" class="nav-link">صفحة التواصل</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown submenu" >
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false">
                                المقالات
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                                <!-- <li class="nav-item"><a href="software engineering.php" class="nav-link">Software engineering</a></li> -->
                                <li class="nav-item"><a href="arabic_operating.php" class="nav-link">نظم التشغيل</a>
                                </li>
                                <li class="nav-item"><a href="programming.php" class="nav-link">البرمجة</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">الأمن الالكترونى</a></li>
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-btn">
                <div class="nav-link dropdown" style="margin-bottom: 30px; "  onchange="set-language()" name="language">
                    <button class="btn btn-outline-light dropdown-toggle" style="background-color: black;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        العربية
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="software engineering.php">English</a>
                        
                    </div>
                </div>
            </li>
            <li>
            <form id="bookmarkForm" method="post" action="bookmarkarabic.php">
            <input type="hidden" id="page_url" name="page_url" value="<?php echo $page_url ?>">
            <input style="margin-bottom: 30px;"  type="text" id="page_title" name="page_title" placeholder="عنوان الصفحة" required><button class="bookmark-btn" >حفظ </button>

            
            </form>

            </li>
                    <div class="right-nav" style="margin-right: 40px;">
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
                            <div class="scroll">
                                <ul class="list-unstyled nav-sidebar doc-nav">
                                    <li class="nav-item active">
                                        <a href="#shortcodes" class="nav-link"><img src="img/onepage-icon/smiles-icon.png" alt="">التاريخ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#article" class="nav-link"><img src="img/side-nav/briefcase.png" alt="briefcase">مراحل بناء النظام البرمجي</a>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#tabs" class="nav-link">تحليل المتطلبات</a></li>
                                            <li class="nav-item"><a href="#accordian" class="nav-link">التصميم</a></li>
                                            <li class="nav-item"><a href="#notice" class="nav-link">البناء </a></li>
                                            <li class="nav-item"><a href="#tooltip" class="nav-link">الاختبار والتكاملية</a></li>
                                            <li class="nav-item"><a href="#table" class="nav-link">التوثيق </a></li>
                                            <li class="nav-item"><a href="#lightbox" class="nav-link">الصيانة والتطوير</a></li>
                                            
                                        </ul>
                                        <!-- <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span> -->
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#typography" class="nav-link"><img src="img/side-nav/document.png" alt="">مفهوم
                                         هندسة البرمجيات</a>
                                        <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#code" class="nav-link">التعريف</a></li>
                                            <!-- <li class="nav-item"><a href="#img" class="nav-link">Image</a></li> -->
                                            <li class="nav-item"><a href="#video" class="nav-link">فيديو عن هندسة البرمجيات</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#changelog" class="nav-link"><img src="img/side-nav/clock.png" alt="">التعليم</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#comment" class="nav-link" style="margin-bottom: 30px;"><img src="img/side-nav/chat.png" alt="">التعليقات</a>
                                    </li>
                                    
                                </ul> 
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-8" id="articleContent" contenteditable="false">
                        <div class="documentation_info" id="post">
                            <!--doc-->
                            <article class="documentation_body doc-section pt-0" id="doc">
                                <div class="shortcode_title" style="margin-left: 600px;">
                                    <h2 ><u>هندسة البرمجيات</u></h2>
                                    <p style="margin-left: 90px;">اساسيات! هندسة الرمجيات</p>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/topic-icon-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 style="text-align:left; margin-left: 70px;" dir="rtl"><u>تحليل المتطلبات</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:215px;    text-align: justify; font-size:larger; ">تحليل المتطلبات يدور حول الاستنباط وتحليل
                                                المواصفات والتحقق من متطلبات البرمجيات. </p>
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
                                                    <h5><u style="margin-left: 100px;">التصميم</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify;  font-size:larger;">تصميم البرمجيات هو عملية وضع خطط عالية المستوى للبرنامج</p>
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
                                                    <h5><u style="margin-left: 150px;">البناء</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:210px; word-spacing:1px;   text-align: justify;  font-size:larger;">يتضمن بناء البرمجيات عادةً البرمجة (المعروفة أيضًا باسم الترميز)، واختبار الوحدات، واختبار التكامل،
                                                    وتصحيح الأخطاء لتنفيذ التصميم</p>
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
                                                    <h5><u style="margin-left: 30px;">الاختبار و التكاملية</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify;  font-size:larger;">ختبار البرمجيات هو تحقيق تقني تجريبي يتم إجراؤه لتزويد أصحاب المصلحة به
                                        معلومات حول جودة البرنامج قيد الاختبار</p>
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
                                                    <h5><u style="margin-left: 140px;">التوثيق</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:200px;    text-align: justify;  font-size:larger;">التوثيق هو عملية تحليل برامج الكمبيوتر فيما يتعلق بجانب ما
                                                    مثل الأداء والمتانة والأمان.</p>
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
                                                    <h5><u style="margin-left: 40px;">الصيانة و التطوير</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify;  font-size:larger;">تشير صيانة البرامج إلى دعم البرنامج بعد إصداره</p>
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
                                                    <h5><u style="margin-left: 90px;">نشر البرامج</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; width:200px;     text-align: justify; font-size:larger; ">نشر البرمجيات هو كل الأنشطة التي تجعل بها
                                                    النظام برمجي متاح للاستخدام</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/side-nav/chat.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5 ><u style="margin-left:130px; width:500px;">هندسة البرمجيات الاجتماعية</u></h5>
                                                </a>
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block; text-align: justify; font-size:larger; width:350px;  ">هندسة البرمجيات الاجتماعية (SSE) هي فرع من فروع هندسة البرمجيات التي تهتم بالجوانب الاجتماعية للبرمجيات
                                                    تطوير البرمجيات والبرمجيات المطورة</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="border_bottom"></div>
                            </article>
                            <!--shortcode-->
                            <article class="documentation_body shortcode_text doc-section" id="shortcodes">
                                <div class="shortcode_title">
                                    <h2 style="margin-left: 800px;"><u>التاريخ</u></h2>
                                    <p style="margin-left: 400px;"><span>ابتداءً من الستينيات،</span> تم الاعتراف بهندسة البرمجيات كمجال منفصل للهندسة.</p>
                                </div>
                                <p  dir="auto" style=" word-wrap: break-word; display: inline-block;     text-align: justify; font-size:larger; ">كان يُنظر إلى تطوير هندسة البرمجيات على أنه صراع. كان من الصعب مواكبة الأجهزة مما سبب العديد من المشاكل لمهندسي البرمجيات.
                                    وشملت المشاكل البرامج التي تجاوزت الميزانية المحددة، وتجاوزت المواعيد النهائية، وتطلبت عمليات تصحيح أخطاء وصيانة واسعة النطاق، ولم تنجح في تلبية احتياجات المستهلكين أو
                                     لم يكتمل أبدًا.
                                     ترجع أصول مصطلح هندسة البرمجيات إلى مصادر مختلفة.
                                     ظهر هذا المصطلح في قائمة الخدمات التي تقدمها الشركات في عدد يونيو 1965 من مجلة "أجهزة الكمبيوتر والأتمتة".
                                      وتم استخدامه بشكل رسمي أكثر في عدد أغسطس 1966 من اتصالات ACM (المجلد 9، العدد 8) "رسالة إلى عضوية ACM" بواسطة
                                      رئيس ACM أنتوني أ. أوتينجر.
                                       ويرتبط أيضًا بعنوان <b>حلف الناتو</b> مؤتمر في عام 1968 من قبل البروفيسور فريدريش ل. باور.
                                        وصفت مارغريت هاميلتون نظام "هندسة البرمجيات" خلال مهمات أبولو لإضفاء الشرعية على ما كانوا يفعلونه.
                                         في ذلك الوقت كان يُنظر إلى وجود "أزمة برمجيات". يحتفل المؤتمر الدولي الأربعون لهندسة البرمجيات (ICSE 2018).
                                         50 عامًا من "هندسة البرمجيات" مع الكلمات الرئيسية للجلسات العامة لفريدريك بروكس و <b>مارجريت هاميلتون</b>.
                                    </p>
                                <ul class="ul" dir="rtl">
                                    <li style="margin-left: 670px;">ما هو الناتو؟&nbsp;<strong><a href="https://ar.wikipedia.org/wiki/%D8%AD%D9%84%D9%81_%D8%B4%D9%85%D8%A7%D9%84_%D8%A7%D9%84%D8%A3%D8%B7%D9%84%D8%B3%D9%8A" target="_blank" rel="noopener noreferrer"><u>الناتو</u></a></strong> </li>
                                    <li style="margin-left: 530px;">من هي مارغريت هاميلتون؟&nbsp;<strong><a href="https://ar.wikipedia.org/wiki/%D9%85%D8%A7%D8%B1%D8%AC%D8%B1%D9%8A%D8%AA_%D9%87%D8%A7%D9%85%D9%84%D8%AA%D9%88%D9%86" target="_blank" rel="noopener noreferrer"><u>
                                        مارجريت هاملتون</u></a></strong></li>
                                    <!-- <li>WordPress Lessons&nbsp;<strong><a href="https://codex.wordpress.org/WordPress_Lessons" target="_blank" rel="noopener noreferrer">Visit Articles</a></strong></li> -->
                                </ul>
                                <h4 class="c_head" id="article" style="margin-left: 550px;"><u>مراحل بناء النظام البرمجى</u></h4>
                                <ul class="list-unstyled article_list tag_list">
                                    <li><a href="tab.html"><i class="icon_document_alt"></i>تحليل المتطلبات</a></li>
                                    <li><a href="accordion.html"><i class="icon_document_alt"></i>التصميم</a></li>
                                    <li><a href="notice.html"><i class="icon_document_alt"></i>البناء</a></li>
                                    <li><a href="doc-content-tables.html"><i class="icon_document_alt"></i>الاختبار و التكاملية</a></li>
                                    <li><a href="doc-element-lightbox.html"><i class="icon_document_alt"></i>التوثيق</a></li>
                                    <li><a href="tooltip.html"><i class="icon_document_alt"></i>الصيانة و التطوير</a></li>
                                    
                                </ul>
                                <div class="border_bottom"></div>
                                <div class="shortcode_info" id="tabs">
                                    <div class="tab_shortcode">
                                        <h2 class="s_title" id="tab" style="margin-left: 580px;"><u> تحليل المتطلبات</u></h2>
                                        <span dir="auto" style="width: 800px; word-wrap: break-word; display: inline-block;     text-align: justify; font-size:larger; "><code class="highlighter-rouge">تحليل المتطلبات</code>
                                         حول الاستنباط والتحليل والمواصفات والتحقق من صحة متطلبات البرامج. يمكن أن تكون متطلبات البرمجيات <strong>وظيفية وغير وظيفية</strong> أو المجال.
                                          تصف المتطلبات الوظيفية السلوكيات المتوقعة (أي المخرجات). تحدد المتطلبات غير الوظيفية مشكلات مثل قابلية النقل، والأمان، وقابلية الصيانة، والموثوقية، وقابلية التوسع، والأداء،
                                          قابلية إعادة الاستخدام، والمرونة. ويتم تصنيفها إلى الأنواع التالية: قيود الواجهة، وقيود الأداء (مثل وقت الاستجابة، والأمان، ومساحة التخزين، وما إلى ذلك)، وقيود التشغيل،
                                          قيود دورة الحياة (قابلية الصيانة، وقابلية النقل، وما إلى ذلك)، والقيود الاقتصادية. هناك حاجة إلى معرفة كيفية عمل النظام أو البرنامج عندما يتعلق الأمر بتحديد المتطلبات غير الوظيفية. متطلبات المجال
                                          لها علاقة بخاصية فئة أو مجال معين من المشاريع.</span>
                                        
                                    </div>
                                    <div class="process_tab_shortcode">
                                        <ul class="nav nav-tabs v_menu" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true"><span>1</span>هندسة المتطلبات</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false"><span>2</span>المتطلبات الوظيفية</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab" aria-controls="charge" aria-selected="false"><span>3</span>المتطلبات الغير وظيفية</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" id="sub-tab" data-toggle="tab" href="#sub" role="tab" aria-controls="sub" aria-selected="false"><span>4</span>Subscription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="success-tab" data-toggle="tab" href="#success" role="tab" aria-controls="success" aria-selected="false"><span>5</span>Success!</a>
                                            </li> -->
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="card-tab">
                                                <p dir="auto" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">هندسة المتطلبات (RE) هي عملية تحديد وتوثيق والحفاظ على المتطلبات في عملية التصميم الهندسي. وهو دور شائع في هندسة النظم وهندسة البرمجيات.

                            ربما كان أول استخدام لمصطلح هندسة المتطلبات في عام 1964 في ورقة المؤتمر "الصيانة وقابلية الصيانة وهندسة متطلبات النظام"، لكنه لم يدخل حيز الاستخدام العام حتى أواخر التسعينيات مع نشر برنامج تعليمي لجمعية الكمبيوتر IEEE في مارس. 1997 وإنشاء سلسلة مؤتمرات حول هندسة المتطلبات والتي تطورت إلى المؤتمر الدولي لهندسة المتطلبات.

                        في نموذج الشلال، يتم تقديم هندسة المتطلبات باعتبارها المرحلة الأولى من عملية التطوير. تفترض طرق التطوير اللاحقة، بما في ذلك العملية الموحدة العقلانية (RUP) للبرمجيات، أن هندسة المتطلبات تستمر طوال عمر النظام.

                                        إدارة المتطلبات، وهي وظيفة فرعية من ممارسات هندسة النظم، تمت فهرستها أيضًا في أدلة المجلس الدولي لهندسة النظم (INCOSE).</p>
                                                <div class="version">
                                                    <div class="v_head">
                                                    <u style="margin-left: 550px; font-size:x-large">أنشطة هندسة المتطلبات: </u>
                                                    </div>
                                                    <div class="v_middle">
                                                        <p style="font-size: larger; word-wrap: break-word; display: inline-block;text-align: justify;"><span class="red">1) نشأة المتطلبات أو استنباط المتطلبات :</span> يلتقي المطورون وأصحاب المصلحة؛ يتم سؤال الأخير عن احتياجاتهم ورغباتهم فيما يتعلق بمنتج البرنامج.</p>
                                                        <p style="font-size: larger; word-wrap: break-word; display: inline-block;text-align: justify;"> <span class="green">2) تحليل المتطلبات والتفاوض:</span>يتم تحديد المتطلبات (بما في ذلك المتطلبات الجديدة إذا كان التطوير متكررًا)، ويتم حل النزاعات مع أصحاب المصلحة. يتم استخدام كل من الأدوات المكتوبة والرسومية (الأخيرة شائعة الاستخدام في مرحلة التصميم، ولكن البعض يجدها مفيدة في هذه المرحلة أيضًا) بنجاح كمساعدات. أمثلة على أدوات التحليل المكتوبة: حالات الاستخدام وقصص المستخدم. أمثلة على الأدوات الرسومية: UML وLML.</p>
                                                        <p style="font-size: larger; word-wrap: break-word; display: inline-block;text-align: justify;"><span class="green">3) نمذجة النظام :</span>تتطلب بعض المجالات الهندسية (أو مواقف محددة) أن يتم تصميم المنتج وتصميمه بالكامل قبل البدء في بنائه أو تصنيعه. ولذلك، يجب أن يتم تنفيذ مرحلة التصميم مقدما. على سبيل المثال، يجب وضع مخططات للمبنى قبل الموافقة على أي عقد وتوقيعه. قد تشتق العديد من المجالات نماذج للنظام باستخدام لغة نمذجة دورة الحياة، بينما قد يستخدم البعض الآخر UML. ملاحظة: في العديد من المجالات، مثل هندسة البرمجيات، يتم تصنيف معظم أنشطة النمذجة على أنها أنشطة تصميمية وليست أنشطة هندسة المتطلبات.</p>
                                                        <p style="font-size: larger; word-wrap: break-word; display: inline-block;text-align: justify;"><span class="red">4) مواصفات المتطلبات :</span>يتم توثيق المتطلبات في وثيقة رسمية تسمى مواصفات المتطلبات (RS)، والتي ستصبح رسمية فقط بعد التحقق من صحتها. يمكن أن يحتوي RS على معلومات (نماذج) مكتوبة ورسومية إذا لزم الأمر. مثال: مواصفات متطلبات البرمجيات (SRS).</p>
                                                    </div>
                                                    
                                                </div>
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                                                <!-- <p>Twit brilliant he legged it he nicked it amongst hotpot chinwag spend a penny lemon squeezy he lost his bottle porkies, Why it's your round happy days.</p> -->
                                                <div class="version">
                                                    <div class="v_head">
                                                    <u style="margin-left:650px; font-size:larger;">المتطلبات الوظيفية :</u>
                                                    </div>
                                                    <div class="v_middle">
                                                        <p style="font-size: larger; word-wrap: break-word; display: inline-block;text-align: justify;"><span class="red">المتطلبات الوظيفية :</span> تعرف وظيفة النظام أو مكونه، حيث يتم وصف الوظيفة على أنها ملخص (أو مواصفات أو بيان) للسلوك بين المدخلات والمخرجات</p>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="charge" role="tabpanel" aria-labelledby="charge-tab">
                                                <div class="version">
                                                    <div class="v_head">
                                                      <u style="margin-left:580px; font-size:larger;"> المتطلبات غير الوظيفية:</u>
                                                    </div>
                                                    <div class="v_middle">
                                                    <p style="font-size: larger; word-wrap: break-word; display: inline-block;text-align: justify;"><span class="red" >المتطلبات غير الوظيفية :</span> هو متطلب يحدد المعايير التي يمكن استخدامها للحكم على تشغيل النظام، بدلاً من سلوكيات محددة.</p>

                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                            <!--  -->
                                            <button class="btn btn-info btn-lg previous"><i class="arrow_carrot-left"></i></button>
                                            <button class="btn btn-info btn-lg next"><i class="arrow_carrot-right"></i></button>
                                        </div>
                                    </div>
                                    <div class="border_bottom"></div>
                                </div>
                                <!--accordian-->
                                <div class="shortcode_info" id="accordian" >
                                    <div class="shortcode_title">
                                    <h2 style="margin-left: 700px;"><u>التصميم</u></h2>
                                         <div class="v-middle">
                                        <p style="margin-left: 350px; font-size:larger;"><code class="highlighter-rouge">تصميم البرمجيات</code> هي عملية وضع خطط عالية المستوى للبرنامج.</p>
                                         </div>
                                    </div>
                                    <div class="toggle_shortcode">
                                        <h4 class="s_title load-order-2" id="toggle" style="margin-left: 620px;">مستويات التصميم</h4>
                                        <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" > <span style="margin-left:650px; font-size:larger;"> تصميم الواجهة</span></a>
                                        <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                            <div class="card card-body toggle_body">
                                            <span style="margin-left:310px; font-size:larger; word-wrap: break-word; display: inline-block;text-align: justify;">يخطط تصميم الواجهة للتفاعل بين النظام وبيئته بالإضافة إلى الأعمال الداخلية للنظام.</span>
                                            </div>
                                        </div>
                                        <a class="toggle_btn mt-1 collapsed" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"  ><span style="margin-left:630px; font-size:larger;">التصميم المعمارى</span> </a>
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card card-body toggle_body">
                                            <span style="margin-left:220px; font-size:larger; word-wrap: break-word; display: inline-block;text-align: justify;"> يخطط التصميم المعماري للمكونات الرئيسية للنظام؛ بما في ذلك مسؤولياتهم وخصائصهم والواجهات بينهم.</span>
                                       
                                             </div>
                                        </div>
                                        <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><span style="margin-left:650px; font-size:larger;">التصميم المفصل</span> </a>
                                        <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                            <div class="card card-body toggle_body">
                                                <span style="margin-left:190px; font-size:larger; word-wrap: break-word; display: inline-block;text-align: justify;"> يخطط التصميم المفصل للعناصر الداخلية؛ بما في ذلك خصائصها وعلاقاتها وخوارزمياتها وهياكل البيانات.  </span>
                                         </div>
                                        </div>
                                    </div>
                                    <div class="accordion_shortcode">
                                        <h4 class="s_title load-order-2" id="accordions" style="margin-left: 640px;">مبادئ التصميم</h4>
                                        <div id="accordion">
                                            <div class="card doc_accordion">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="margin-left:190px; word-wrap: break-word; display: inline-block;text-align: justify;"><span >
                                                        يجب ألا تعاني عملية التصميم من "الرؤية النفقية"</span>
                                                        <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body toggle_body"><span style="margin-left:190px; font-size:larger; word-wrap: break-word; display: inline-block;text-align: justify;">
                                                    يجب على المصمم الجيد أن يفكر في طرق بديلة، ويحكم على كل منها بناءً على متطلبات المشكلة، والموارد المتاحة للقيام بالمهمة.
                                                    </span></div>
                                                </div>
                                            </div>
                                            <div class="card doc_accordion">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="margin-left:190px; word-wrap: break-word; display: inline-block;text-align: justify;">
                                                        يجب أن يكون التصميم قابلاً للإرجاع إلى نموذج التحليل.<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body toggle_body"><span style="margin-left:190px; font-size:larger; word-wrap: break-word; display: inline-block;text-align: justify;">
                                                    نظرًا لأن عنصرًا واحدًا في نموذج التصميم يمكن إرجاعه في كثير من الأحيان إلى متطلبات متعددة، فمن الضروري أن يكون لديك وسيلة لتتبع كيفية استيفاء نموذج التصميم للمتطلبات.
                                                            </span> </div>
                                                </div>
                                            </div>
                                            <div class="card doc_accordion">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="margin-left:190px; word-wrap: break-word; display: inline-block;text-align: justify;">
                                                        يجب أن يتم تصميم التصميم لاستيعاب التغيير. <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body toggle_body"><span style="margin-left:190px; font-size:larger; word-wrap: break-word; display: inline-block;text-align: justify;">
                                                    إن مفاهيم التصميم التي تمت مناقشتها في القسم التالي تمكن التصميم من تحقيق هذا المبدأ. 
</span>  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--accordian-->
                                <!--notice-->
                                <div class="shortcode_info" id="notice">
                                    <div class="shortcode_title">
                                    <h2 style="margin-left: 740px; margin-top:30px;"><u>البناء</u></h2>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">بناء البرمجيات, </code> يتضمن عادةً البرمجة (المعروف أيضًا باسم الترميز)، واختبار الوحدة، واختبار التكامل، وتصحيح الأخطاء لتنفيذ التصميم. يتم إجراء الاختبار خلال هذه المرحلة بشكل عام بواسطة المبرمج بغرض التحقق من أن الكود يتصرف حسب التصميم ومعرفة متى يكون الكود جاهزًا لاختبار المستوى التالي.</p>
                                    </div>
                                    
                                    <h4 class="s_title" id="notice" style="margin-left: 590px;">أساسيات بناء البرمجيات</h4>
                                    <blockquote class="media notice notice-success" style="background-color:cadetblue;">
                                        <i class="icon_menu-square_alt2"></i>
                                        <div class="media-body">
                                            <h5 style="margin-left: 530px;">التقليل من التعقيد</h5>
                                            <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">إن الحاجة إلى تقليل التعقيد مدفوعة بشكل أساسي بالقدرة المحدودة لمعظم الناس على الاحتفاظ بهياكل ومعلومات معقدة في ذاكرتهم العاملة. مخفض <span>التعقيد</span>  يتم تحقيق ذلك من خلال التأكيد على إنشاء <span>كود</span> هذا بسيط وسهل القراءة وليس ذكيًا. التقليل <span> التعقيد</span> يتم إنجازه من خلال الاستفادة من <strong>المعايير</strong> ومن خلال العديد من التقنيات المحددة في الترميز. كما أنها مدعومة بتقنيات الجودة التي تركز على البناء.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-warning" style="background-color:bisque;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5 style="margin-left: 590px; ">توقع التغيير</h5>
                                            <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">توقع التغيير يساعد مهندسي البرمجيات <span>بناء برامج قابلة للتوسيع</span> مما يعني أنه يمكنهم تحسين منتج البرنامج دون الإضرار بالبنية الأساسية. أظهرت الأبحاث على مدى 25 عامًا أن تكلفة إعادة العمل يمكن أن تكون
                                <span>10 إلى 100 مرة</span>(5 إلى 10 مرات للمشاريع الصغيرة) أكثر تكلفة من الحصول على المتطلبات الصحيحة في المرة الأولى.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-danger" style="background-color:darksalmon;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5 style="margin-left: 590px;">بناء للتحقق</h5>
                                            <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  ">بناء ل <span>تَحَقّق</span> يعني بناء البرمجيات بطريقة يمكن من خلالها اكتشاف الأخطاء بسهولة بواسطة مهندسي البرمجيات الذين يقومون بكتابة البرمجيات، وكذلك أثناء العمل بشكل مستقل    
                               <span>اختبارات</span> والأنشطة التنفيذية. تتضمن التقنيات المحددة التي تدعم البناء للتحقق اتباع معايير الترميز لدعم مراجعات الكود، واختبار الوحدة، وتنظيم الكود
                               دعم الاختبار الآلي، والاستخدام المقيد للهياكل اللغوية المعقدة أو التي يصعب فهمها، من بين أمور أخرى.</p>
                                        </div>
                                    </blockquote>
                                    <h4 class="s_title" id="explanation" style="margin-left: 690px; ">تصميم البناء</h4>
                                    <p class="explanation expn-left" style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; color:gray;  ">من أجل مراعاة الفجوات غير المتوقعة في تصميم البرنامج، أثناء إنشاء البرنامج، يجب إجراء بعض تعديلات التصميم على نطاق أصغر أو أكبر لتوضيح تفاصيل تصميم البرنامج.</p>
                                </div>
                                <!--notice-->
                                <!--tooltip-->
                                <div class="shortcode_info" id="tooltip">
                                    <h2 class="s_title" id="tooltip-t" style="margin-left: 590px; margin-top:50px;"><u>الاختبار و التكاملية</u></h2>
                                    <div class="tooltip_content">
                                        <h6 style="margin-left: 710px;">ما هو الاختبار؟</h6>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">اختبار البرمجيات</code> هو تحقيق تقني تجريبي يتم إجراؤه لتزويد أصحاب المصلحة بمعلومات حول جودة البرنامج قيد الاختبار. </p>
                                        <h5 style="margin-left: 700px;">تصنيف الاختبار</h5>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">الاختبار الآلي:</a> في اختبار البرمجيات، أتمتة الاختبار هي استخدام برنامج منفصل عن البرنامج الذي يتم اختباره للتحكم في تنفيذ الاختبارات ومقارنة النتائج الفعلية مع النتائج المتوقعة. يمكن لأتمتة الاختبار أتمتة بعض المهام المتكررة ولكنها ضرورية في عملية اختبار رسمية موجودة بالفعل أو قم بإجراء اختبارات إضافية قد يكون من الصعب إجراؤها يدويًا. تعد أتمتة الاختبار أمرًا بالغ الأهمية للتسليم المستمر والاختبار المستمر.</p>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">اختبار الوحدة:</a> يشير اختبار الوحدة إلى التحقق من سلوك جزء صغير نسبيًا من الكود، وهو وحدة، بمعزل عن بقية قاعدة التعليمات البرمجية. غالبًا ما تكون الوحدة وظيفة أو وحدة نمطية أو طريقة أو فئة. لعزل الوحدة، يستبدل الاختبار التبعيات بمضاعفات الاختبار.</p>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">اختبار التكامل:</a> يتحقق اختبار التكامل من سلوك الوحدات المتعددة المتفاعلة، ولكنه أقل من النظام بأكمله. غالبًا ما يتحقق اختبار التكامل من صحة الواجهة بين المكونات مقابل تصميم البرنامج.</p>
                                    </div>
                                    <div class="border_bottom"></div>
                                </div>
                                <!--tooltip-->
                                <!--table-->
                                <div class="shortcode_info">
                                    <h2 class="s_title" id="table" style="margin-left: 740px; margin-top:30px;"><u>التوثيق </u></h2>
                                    <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  margin-left: 260px; "><code class="highlighter-rouge">التوثيق </code> هي عملية تحليل برامج الكمبيوتر فيما يتعلق بجانب مثل الأداء والمتانة والأمن.</p>
                                    <div class="table-responsive">
                                        <table class="table table_shortcode">
                                            <thead>
                                                <tr align="right">
                                                    <th>انواع التوثيق:</th>
                                                    <th >توثيق البرنامج الثابت</th>
                                                    <th >توثيق البرنامج الديناميكي</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody dir="rtl">
                                                <tr align="right">
                                                    <th >مجالاتهم :</th>
                                                    <td align="right">
                                                        <ul>
                                                            <li> <span >التحكم في التدفق</span></li>
                                                            <li >تحليل تدفق البيانات</li>
                                                            <li >تفسير مجردة</li>
                                                            <li >أنظمة النوع</li>
                                                            <li >أنظمة التأثير</li>
                                                            <li >فحص النموذج</li>
                                                        </ul>
                                                        </td>
                                                    <td align="right">
                                                        <ul>
                                                           <li >الاختبارات</li>
                                                            <li >المراقبة</li>
                                                            <li >تقطيع البرنامج</li>
                                                             
                                                        </ul>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="basic_table">
                                        <h4 class="s_title load-order-2" id="basic" style="margin-left: 610px; ">توثيق البرنامج الثابت</h4>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;   "><code class="highlighter-rouge">نوثيق البرنامج الثابت (المعروف أيضًا باسم التحليل الثابت أو المحاكاة الثابتة)</code> هو تحليل برامج الكمبيوتر التي يتم إجراؤها دون تنفيذها، على عكس تحليل البرامج الديناميكي الذي يتم إجراؤه على البرامج أثناء تنفيذها في البيئة المتكاملة.</p>
                                        
                                    </div>
                                    <div class="basic_table">
                                        <h4 class="s_title load-order-2" id="strip" style="margin-left: 580px; ">توثيق البرنامج الديناميكي</h4>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">توثيق البرنامج الديناميكي</code> هو عملية تحليل البرامج التي تتضمن تنفيذ برنامج - على عكس تحليل البرنامج الثابت الذي لا ينفذه. </p>
                                        
                                    </div>
                                    
                                <!--table-->
                                <!--lightbox-->
                                <div class="shortcode_info" id="lightbox">
                                    <div class="shortcode_title">
                                        <h2 class="s_title" style="margin-top: 40px;margin-left: 590px;"><u>الصيانة و التطوير</u></h2>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><code class="highlighter-rouge">صيانة البرمجيات</code> يشير إلى دعم البرنامج بعد الإصدار. وقد يشمل ذلك على سبيل المثال لا الحصر: تصحيح الأخطاء، والتحسين، وحذف الميزات غير المستخدمة والمهملة، وتحسين الميزات الموجودة.</p>
                                    </div>
                                    
                                </div>
                                <!--lightbox-->
                                <!--footnote-->
                                <div class="shortcode_info" id="footnote">
                                    <div class="shortcode_title">
                                    <h4 style="margin-left: 590px;">أهمية صيانة البرمجيات :</h4>
                                        <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger;  "><span><b>صيانة البرمجيات</b></span> هو نشاط واسع يشمل تصحيح الأخطاء، وتحسين القدرات، وإزالة القدرات القديمة، وتحسينها. ولأن التغيير أمر لا مفر منه، فلا بد من تطوير آليات التقييم والرقابة وإجراء التعديلات.</p>
                                    </div>

                                    <div class="footnotes margin-top-xl">
                                        <h4 style="margin-left: 570px;">عمليات صيانة البرمجيات:</h4>
                                        <ol style="font-size:xx-large;">
                                            <li id="note-name-a" class="footnotes_item">
                                                <strong style="margin-left: 700px; font-size:x-large;">تطبيق :</strong>
                                                <br><span style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:x-large;  ">أنشطة إعداد البرامج والانتقال، مثل إنشاء خطة الصيانة؛ التحضير للتعامل مع المشاكل التي تم تحديدها أثناء التطوير؛ ومتابعة إدارة تكوين المنتج.</span>
                                                <a href="#note-link-1" aria-label="Back to article">&uarr;</a>
                                            </li>
                                            <li id="note-name-b" class="footnotes_item">
                                                <strong style="margin-left: 570px; font-size:x-large;">تحليل المشكلة والتعديل:  </strong> 
                                                <br><span style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:x-large;  "> ويتم تأكيد (إعادة إنتاج) المشكلات وتحليلها والتحقيق فيها. يتم اقتراح الحلول وتوثيقها. يتم الحصول على إذن لتطبيق التعديلات.</span>
                                                <a href="#note-link-2" aria-label="Back to article">&uarr;</a>
                                            </li>
                                            <li id="note-name-c" class="footnotes_item">
                                                <strong style="margin-left: 650px; font-size:x-large;">تنفيذ التعديل :</strong>
                                                <br><span style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:x-large; margin-left:180px; ">يتم تحديث كود البرنامج و/أو البيانات و/أو التكوين وتجميعها وإعادة نشرها.</span>
                                                <a href="#note-link-3" aria-label="Back to article">&uarr;</a>
                                            </li>
                                            <li id="note-name-c" class="footnotes_item">
                                                <strong style="margin-left: 650px; font-size:x-large;">قبول التعديل :</strong>
                                                <br><span style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:x-large; margin-left:180px;  ">يقوم الشخص الذي قدم الطلب بتشغيل/اختبار البرنامج للتأكد من حل المشكلة.</span>
                                                <a href="#note-link-3" aria-label="Back to article">&uarr;</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                
                            </article>
                            
                            <!--typography-->
                            <article class="shortcode_info documentation_body typography_content doc-section" id="typography">
                                <div class="shortcode_title">
                                    <h2 style="margin-left: 500px; "><u>مفهوم هندسة البرمجيات</u></h2>
                                    <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; margin-left:500px;  ">تشمل التعريفات البارزة لهندسة البرمجيات ما يلي:</p>
                                </div>
                                
                                <div >
                                    <h4 class="c_head load-order-2" id="code" style="margin-left: 730px; ">التعريفات</h4>
                                    <div  >
                                        <ul   dir="rtl"  style="  border: 2px solid grey; list-style-type:armenian; width:830px;  " >
                                            <li  style="font-size:20px;  word-wrap: break-word;  text-align: justify; list-style-type:disc; ">"التطبيق المنهجي للمعرفة والأساليب والخبرة العلمية والتكنولوجية في تصميم وتنفيذ واختبار وتوثيق البرمجيات" -
                                             <i>مكتب إحصاءات العمل – أنظمة IEEE وهندسة البرمجيات – المفردات"</i>
                                            </li>
                                            <li style="font-size:20px;  word-wrap: break-word;  text-align: justify; list-style-type:disc;">"تطبيق نهج منهجي ومنضبط وقابل للقياس لتطوير البرمجيات وتشغيلها وصيانتها" - <i>معجم IEEE القياسي لمصطلحات هندسة البرمجيات</i></li>
                                            <li style="font-size:20px;  word-wrap: break-word;  text-align: justify; list-style-type:disc; margin-left:250px;">""نظام هندسي يهتم بجميع جوانب إنتاج البرمجيات""- <i>إيان سومرفيل</i></li>
                                            <li style="font-size:20px;  word-wrap: break-word;  text-align: justify; list-style-type:disc;">"إنشاء واستخدام مبادئ الهندسة السليمة من أجل الحصول اقتصاديًا على برمجيات موثوقة وتعمل بكفاءة على الأجهزة الحقيقية" — <i>فريتز باور</i></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                
                                <div class="documentation_body typography_content" id="video">
                                    <div class="shortcode_title">
                                    <h4 style="margin-left: 586px; ">فيديو عن هندسة البرمجيات</h4>
                                        <p style="margin-left: 650px; word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; ">مفهوم هندسة البرمجيات!</p>
                                    </div>
                                    <h4 class="c_head load-order-2" id="about" style="margin-left: 650px; ">محتوي الفيديو</h4>
                                    <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; ">تدور هندسة البرمجيات حول كتابة التعليمات البرمجية بطريقة منظمة ورسمية، بهدف نهائي هو تحقيق قدر أكبر من سهولة القراءة وقابلية الصيانة للتعليمات البرمجية. وللقيام بذلك، يتم عادةً تقسيم دورة حياة المشروع على النحو التالي:

                                        <ol style="font-size: larger;">
                                            <li style="margin-left: 700px; word-wrap: break-word;  text-align: justify;  ">جمع المتطلبات</li>
                                            <li style="margin-left: 750px; ">التخطيط</li>
                                            <li style="margin-left: 750px; ">التطوير</li>
                                            <li style="margin-left: 750px; ">الاختبار</li>
                                        </ol>
                                           </p>
                                    <div class="code_item">
                                        <div class="code-preview">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kz5vMd1Exx4?si=s5etrY-zglcPHely" allowfullscreen></iframe>
                                                    https://youtu.be/kz5vMd1Exx4?si=s5etrY-zglcPHely

                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                    
                                </div>
                            </article>
                            <article class="shortcode_info doc-section" id="changelog" style="margin-bottom: 100px;">
                                <div class="shortcode_title" >
                                    <h2 style="margin-left: 750px; margin-top:40px;" ><u>التعليم</u></h2>
                                    <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; ">تعد المعرفة ببرمجة الكمبيوتر شرطًا أساسيًا لتصبح مهندس برمجيات. في عام 2004، أصدرت جمعية IEEE للكمبيوتر تقرير SWEBOK، والذي تم نشره تحت عنوان التقرير الفني ISO/IEC 1979:2005، والذي يصف مجموعة المعرفة التي يوصون بإتقانها بواسطة مهندس برمجيات خريج لديه أربع سنوات من الخبرة.</p>
                                
                                    <h4 class="c_head load-order-2" id="about" style="margin-left: 570px; ">برامج درجة هندسة البرمجيات</h4>
                                       <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; ">
                                       نصف الممارسين اليوم حاصلون على درجات علمية في علوم الكمبيوتر أو نظم المعلومات أو تكنولوجيا المعلومات. وهناك عدد صغير ولكن متزايد من الممارسين حاصلين على درجات علمية في هندسة البرمجيات. في عام 1987، قدم قسم الحوسبة في إمبريال كوليدج لندن أول درجة بكالوريوس في هندسة البرمجيات مدتها ثلاث سنوات في المملكة المتحدة والعالم؛ وفي العام التالي، أنشأت جامعة شيفيلد برنامجًا مماثلاً. في عام 1996، أنشأ معهد روتشستر للتكنولوجيا أول برنامج لدرجة البكالوريوس في هندسة البرمجيات في الولايات المتحدة، ومع ذلك، لم يحصل على اعتماد ABET حتى عام 2003، وهو نفس الوقت الذي حصلت فيه جامعة رايس، وجامعة كلاركسون، وكلية ميلووكي للهندسة، وجامعة ولاية ميسيسيبي. حصلت عليها. في عام 1997، كانت كلية PSG للتكنولوجيا في كويمباتور بالهند أول من بدأ برنامج ماجستير العلوم المتكامل لمدة خمس سنوات في هندسة البرمجيات.
                                       </p>
                                 <p style=" word-wrap: break-word; display: inline-block;text-align: justify; font-size:larger; ">
                                 منذ ذلك الحين، تم إنشاء درجات جامعية في هندسة البرمجيات في العديد من الجامعات. تم تحديد المنهج الدولي القياسي لدرجات هندسة البرمجيات الجامعية، SE2004، من قبل لجنة توجيهية بين عامي 2001 و2004 بتمويل من جمعية آلات الحوسبة وجمعية الكمبيوتر IEEE. اعتبارًا من عام 2004، في الولايات المتحدة، تقدم حوالي 50 جامعة شهادات في هندسة البرمجيات، والتي تدرس مبادئ وممارسات علوم الكمبيوتر والهندسة. تم إنشاء أول درجة ماجستير في هندسة البرمجيات في جامعة سياتل في عام 1979. ومنذ ذلك الحين أصبحت شهادات هندسة البرمجيات للدراسات العليا متاحة من العديد من الجامعات. وبالمثل في كندا، اعترف مجلس اعتماد الهندسة الكندي (CEAB) التابع للمجلس الكندي للمهندسين المحترفين بالعديد من برامج هندسة البرمجيات.

                                 </p>
                                    </div>
                                
                                <div class="border_bottom"></div>
                                <div class="row feedback_link">
                                    <div class="col-lg-6">
                                        <h6><i class="icon_mail_alt"></i>لا تزال عالقا؟ <a href="#" data-toggle="modal" data-target="#exampleModal2">كيف يمكننا مساعدتك؟</a></h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>هل كان المقال مفيد؟ <a href="#" class="h_btn">نعم</a><a href="#" class="h_btn">لا</a></p>
                                    </div>
                                </div>
                                <div id="comment" class="comment_inner" >
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
    <div class="tooltip_templates d-none">
        <div id="tooltipOne" class="tip_content">
            <div class="text">
                <p>Me old mucker bamboozled horse play fantastic skive off baking cakes knees up lurgy spiffing, Harry bog wind up say are you taking the piss porkies hunky-dory, blower pardon you you mug pear shaped pukka get stuffed mate lavatory.</p>
                <h6>Related Reading:<span>Child Theming for Layers</span></h6>
            </div>
        </div>
    </div>
    <div class="tooltip_templates d-none">
        <div id="tooltipTwo" class="tip_content">
            <img src="img/blog-grid/blog_grid_post1.jpg" alt="">
            <div class="text">
                <p>Me old mucker bamboozled horse play fantastic skive off baking cakes knees up lurgy spiffing, Harry bog wind up say are you taking the piss porkies hunky-dory,</p>
                <h6>Related Reading:<span>Child Theming for Layers</span></h6>
            </div>
        </div>
    </div>
    <div class="tooltip_templates d-none">
        <div id="note-link-a" class="tip_content">
            <div class="text footnotes_item">
                <strong>Footnote Name A</strong>
                <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet voluptas dicta dolor.
            </div>
        </div>
    </div>
    <div class="tooltip_templates d-none">
        <div id="note-link-b" class="tip_content">
            <div class="text footnotes_item">
                <strong>Footnote Name B</strong> <a href="#0">[PDF]</a>
                <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet voluptas dicta dolor.
            </div>
        </div>
    </div>
    <div class="tooltip_templates d-none">
        <div id="note-link-c" class="tip_content">
            <div class="text footnotes_item">
                <strong>Footnote Name C</strong>
                <br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet voluptas dicta dolor.
            </div>
        </div>
    </div>
    <video id="vid2" class="video-js vjs-default-skin mfp-hide" preload="auto">
        <p>Video Playback Not Supported</p>
    </video>







    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>




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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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