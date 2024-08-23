
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
$pageId=4;
$sql = "SELECT page_url FROM page";
$page_url="operating system.php";



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
    <title>Encyclopedia</title>
    <style>
        .bookmark-btn  {
    background: black;
    border: 1 groove black;
    color: white;
    cursor: pointer;
}

    </style>
</head>

<body class="doc full-width-doc sticky-nav-doc onepage-doc" data-spy="scroll" data-target=".navbar" data-offset="-120">
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

    <div class="body_wrapper sticky_menu">
        <nav class="navbar navbar-expand-lg menu_one dark_menu sticky-nav">
            <div class="container-fluid pl-60 pr-60">
                
                <div class="search-input">
                    <ion-icon class="search-icon" name="search-outline"></ion-icon>
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
                            <a href="index.php" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false" data-toggle="dropdown"></i>
                            
                        </li>
                        
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-toggle="dropdown"></i>
                            <ul class="dropdown-menu">
                            <!-- <li class="nav-item"><a href="editor page.php" class="nav-link">Editor Page</a></li> -->
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
                                <!-- <li class="nav-item"><a href="software engineering.php" class="nav-link">Software engineering</a></li> -->
                                <li class="nav-item"><a href="software engineering.php" class="nav-link">Software engineering</a>
                                </li>
                                <!-- <li class="nav-item"><a href="programming.php" class="nav-link">Programming</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">Cypersecurity</a></li> -->
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-btn">
                <div class="nav-link dropdown" style="margin-bottom: 30px; "  onchange="set-language()" name="language">
                    <button class="btn btn-outline-light dropdown-toggle" style="background-color: black;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="arabic_operating.php">Arabic</a>
                        
                    </div>
                </div>
            </li>
            <li>
            <form id="bookmarkForm" method="post" action="bookmark.php">
            <input type="hidden" id="page_url" name="page_url" value="<?php echo $page_url ?>">
            <input type="text" id="page_title" name="page_title" placeholder="Page Title" required><button class="bookmark-btn" >Bookmark </button>

            
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
                            <div class="scroll">
                                <ul class="list-unstyled nav-sidebar doc-nav">
                                    <li class="nav-item active">
                                        <a href="#shortcodes" class="nav-link"><img src="img/onepage-icon/smiles-icon.png" alt="">History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#article" class="nav-link" style="width: 300px;"><img src="img/side-nav/briefcase.png" alt="briefcase" >Types of<br> operating systems</a>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#tabs" class="nav-link">Single-tasking and multi-tasking</a></li>
                                            <li class="nav-item"><a href="#accordian" class="nav-link">Single- and multi-user</a></li>
                                            <li class="nav-item"><a href="#notice" class="nav-link">Distributed</a></li>
                                            <li class="nav-item"><a href="#tooltip" class="nav-link">Embedded</a></li>
                                            <li class="nav-item"><a href="#table" class="nav-link">Library</a></li>
                                            <li class="nav-item"><a href="#lightbox" class="nav-link">Real-time</a></li>
                                            
                                        </ul>
                                        <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#typography" class="nav-link"><img src="img/side-nav/document.png" alt="">Components</a>
                                        <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#code" class="nav-link">Kernel<</a></li>
                                            <li class="nav-item"><a href="#img" class="nav-link">Program execution</a></li>
                                            <li class="nav-item"><a href="#video" class="nav-link">Software interrupt</a></li>
                                            <li class="nav-item"><a href="#software" class="nav-link">Hardware interrupt</a></li>

                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#changelog" class="nav-link"><img src="img/side-nav/clock.png" alt="">Operating system development<br> as a hobby</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#comment" class="nav-link" style="margin-bottom: 30px;"><img src="img/side-nav/chat.png" alt="">Comments</a>
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
                                <div class="shortcode_title">
                                    <h2><u>Operating System</u></h2>
                                    <p><span>Examples!</span> of Operating System: :</p>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/topic-icon-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5><u>Microsoft Windows</u></h5>
                                                </a>
                                                <p>Microsoft Windows is a family of proprietary operating systems designed by Microsoft Corporation and primarily targeted to x86 
                                                    architecture based computers. As of 2022, its worldwide market share on all platforms was approximately 30%,and on the desktop/laptop platforms, 
                                                    its market share was approximately 75%.The latest version is Windows 11. </p>
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
                                                    <h5><u>Linux</u></h5>
                                                </a>
                                                <p>The Linux kernel originated in 1991, as a project of Linus Torvalds, while a university student in Finland. 
                                                    He posted information about his project on a newsgroup for computer students and programmers, and received support and 
                                                    assistance from volunteers who succeeded in creating a complete and functional kernel.</p>
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
                                                    <h5><u>z/OS UNIX System Services</u></h5>
                                                </a>
                                                <p>First introduced as the OpenEdition upgrade to MVS/ESA System Product Version 4 Release 3, announced February 1993 with support for POSIX and other standards. z/OS UNIX System Services is built on top of MVS services and cannot run independently. 
                                                    While IBM initially introduced OpenEdition to satisfy FIPS requirements, several z/OS component now require UNIX services, e.g., TCP/IP.</p>
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
                                                    <h5><u>macOS</u></h5>
                                                </a>
                                                <p>macOS (formerly "Mac OS X" and later "OS X") is a line of open core graphical operating systems developed, marketed, and sold by Apple Inc., the latest of which is pre-loaded on all currently shipping Macintosh computers. 
                                                    macOS is the successor to the original classic Mac OS, which had been Apple's primary operating system since 1984.</p>
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
                                                    <h5><u>Unix and Unix-like operating systems</u></h5>
                                                </a>
                                                <p>Unix was originally written in assembly language.Ken Thompson wrote B, mainly based on BCPL, based on his experience in the MULTICS project. 
                                                    B was replaced by C, and Unix, rewritten in C, developed into a large, complex family of inter-related operating systems which have been influential in every modern operating system (see History).</p>
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
                                                    <h5><u>BSD and its descendants</u></h5>
                                                </a>
                                                <p>A subgroup of the Unix family is the Berkeley Software Distribution family, which includes FreeBSD, NetBSD, and OpenBSD. These operating systems are
                                                     most commonly found on webservers, although they can also function as a personal computer OS.</p>
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
                                                    <h5><u> z/OS</u></h5>
                                                </a>
                                                <p>The z/OS operating system for IBM z/Architecture mainframe computers is still being used and developed, and OpenVMS, formerly from DEC, is still under active development by VMS Software Inc. 
                                                    The IBM i operating system for IBM AS/400 and IBM Power Systems midrange computers is also still being used and developed.</p>
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
                                    <h2><u>History</u></h2>
                                    <p><span>Early computers were built to perform a series of single tasks, like a calculator.,</span> Basic operating system features were developed in the 1950s, such as resident monitor functions that could automatically run different programs in succession to speed up processing.</p>
                                </div>
                                <p>Operating systems did not exist in their modern and more complex forms until the early 1960s. Hardware features were added, that enabled use of runtime libraries, interrupts, and parallel processing. When personal computers became popular in the 1980s, operating systems were made for them similar in concept to those used on larger computers.
                                In the 1940s, the earliest electronic digital systems had no operating systems. Electronic systems of this time were programmed on rows of mechanical switches or by jumper wires on plugboards. 
                                  These were special-purpose systems that, for example, generated ballistics tables for the military or controlled the printing of payroll checks from data on punched paper cards. 
                                  After programmable general-purpose computers were invented,<b> machine languages</b>(consisting of strings of the binary digits 0 and 1 on punched paper tape) were introduced that sped up the programming process (Stern, 1981).
                                  In the early 1950s, a computer could execute only one program at a time. Each user had sole use of the computer for a limited period and would arrive at a scheduled time with their program and data on punched paper cards or punched tape.</b>.
                                    </p>
                                <ul class="ul">
                                    <li>What is machine languages?&nbsp;<strong><a href="https://en.wikipedia.org/wiki/Machine_code" target="_blank" rel="noopener noreferrer"><u>machine languages</u></a></strong> </li>
                                    <!-- <li>Who is Margaret Hamilton?&nbsp;<strong><a href="https://en.wikipedia.org/wiki/Margaret_Hamilton_(software_engineer)" target="_blank" rel="noopener noreferrer"><u>Margaret Hamilton</u></a></strong></li> -->
                                    <!-- <li>WordPress Lessons&nbsp;<strong><a href="https://codex.wordpress.org/WordPress_Lessons" target="_blank" rel="noopener noreferrer">Visit Articles</a></strong></li> -->
                                </ul>
                                <h4 class="c_head" id="article"><u>Types of operating systems</u></h4>
                                <ul class="list-unstyled article_list tag_list">
                                    <li><a href="tab.html"><i class="icon_document_alt"></i>Single-tasking and multi-tasking</a></li>
                                    <li><a href="accordion.html"><i class="icon_document_alt"></i>Single- and multi-user</a></li>
                                    <li><a href="notice.html"><i class="icon_document_alt"></i>Distributed</a></li>
                                    <li><a href="doc-content-tables.html"><i class="icon_document_alt"></i>Embedded</a></li>
                                    <li><a href="doc-element-lightbox.html"><i class="icon_document_alt"></i>Library</a></li>
                                    <li><a href="tooltip.html"><i class="icon_document_alt"></i>Real-time</a></li>
                                    
                                </ul>
                                <div class="border_bottom"></div>
                                <div class="shortcode_info" id="tabs">
                                    <div class="tab_shortcode">
                                        <h2 class="s_title" id="tab"><u> Single-tasking and multi-tasking</u></h2>
                                        <p><code class="highlighter-rouge">A single-tasking system</code> can only run one program at a time,while a <code class="highlighter-rouge"> multi-tasking operating system</code> This is achieved by <b>time-sharing</b>,
                                         where the available processor time is divided between multiple processes. These processes are each interrupted repeatedly in <b>time slices</b> by a task-scheduling subsystem of the operating system. Multi-tasking may be 
                                         characterized in preemptive and cooperative types. In <b>preemptive multitasking</b>, the operating system slices the CPU time and dedicates a slot to each of the programs. Unix-like operating systems, such as Linux—as well 
                                         as non-Unix-like, such as AmigaOS—support preemptive multitasking. Cooperative multitasking is achieved by relying on each process to provide time to the other processes in a defined manner. 16-bit versions of Microsoft 
                                         Windows used cooperative multi-tasking; 32-bit versions of both Windows NT and Win9x used preemptive multi-tasking.</p>
                                        
                                    </div>
                                    <div class="process_tab_shortcode">
                                        <ul class="nav nav-tabs v_menu" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true"><span>1</span>Time-sharing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false"><span>2</span>Preemptive Multitasking</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab" aria-controls="charge" aria-selected="false"><span>3</span>Time slices</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="card" role="tabpanel" aria-labelledby="card-tab">
                                                <p>In computing, <span class="blue"> time-sharing</span> is the sharing of a computing resource among many tasks or users. It enables multi-tasking by a single user or enables multiple-user sessions.</p>
                                                <!-- <div class="version">
                                                    <div class="v_head">
                                                    <u>Activities of Requirements engineering :</u>
                                                    </div>
                                                    <div class="v_middle">
                                                        <p><span class="red">1) Requirements inception or requirements elicitation :</span> Developers and stakeholders meet; the latter are inquired concerning their needs and wants regarding the software product.</p>
                                                        <p> <span class="green">2) Requirements analysis and negotiation :</span>Requirements are identified (including new ones if the development is iterative), and conflicts with stakeholders are solved. Both written and graphical tools (the latter commonly used in the design phase, but some find them helpful at this stage, too) are successfully used as aids. Examples of written analysis tools: use cases and user stories. Examples of graphical tools: UML and LML.</p>
                                                        <p><span class="blue">3) System modeling :</span>Some engineering fields (or specific situations) require the product to be completely designed and modeled before its construction or fabrication starts. Therefore, the design phase must be performed in advance. For instance, blueprints for a building must be elaborated before any contract can be approved and signed. Many fields might derive models of the system with the Lifecycle Modeling Language, whereas others, might use UML. Note: In many fields, such as software engineering, most modeling activities are classified as design activities and not as requirement engineering activities.</p>
                                                        <p><span class="red">4) Requirements specification :</span>Requirements are documented in a formal artifact called a Requirements Specification (RS), which will become official only after validation. A RS can contain both written and graphical (models) information if necessary. Example: Software requirements specification (SRS).</p>
                                                    </div>
                                                    
                                                </div> -->
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                                                <!-- <p>Twit brilliant he legged it he nicked it amongst hotpot chinwag spend a penny lemon squeezy he lost his bottle porkies, Why it's your round happy days.</p> -->
                                                <div class="version">
                                                    <div class="v_head">
                                            
                                                    </div>
                                                    <div class="v_middle">
                                                        <p>The term <span class="red">preemptive multitasking :</span> is used to distinguish a multitasking operating system, which permits preemption of tasks, from a cooperative multitasking system wherein processes or tasks must be explicitly programmed to yield when they do not need system resources.
                                                       In simple terms: Preemptive multitasking involves the use of an interrupt mechanism which suspends the currently executing process and invokes a scheduler to determine which process should execute next. Therefore, all processes will get some amount of CPU time at any given time.</p>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="charge" role="tabpanel" aria-labelledby="charge-tab">
                                                <div class="version">
                                                    <div class="v_head">
                                                    </div>
                                                    <div class="v_middle">
                                                    <p>The period of time for which a process is allowed to run in a preemptive multitasking system is generally called <span class="red">the time slice or quantum</span>.The scheduler is run once every time slice to choose the next process to run. 
                                                        The length of each time slice can be critical to balancing system performance vs process responsiveness - if the time slice is too short then the scheduler will consume too much processing time, but if the time slice is too long, processes will take longer to respond to input.</p>

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
                                <div class="shortcode_info" id="accordian">
                                    <div class="shortcode_title">
                                    <h2><u>Single- and multi-user</u></h2>
                                         <div class="v-middle">
                                        <p><code class="highlighter-rouge">Single-user operating systems</code> have no facilities to distinguish users but may allow multiple programs to run in tandem.
                                        <code class="highlighter-rouge">A multi-user operating system</code> extends the basic concept of multi-tasking with facilities that identify processes and resources, such as disk space, belonging to multiple users, and the system permits multiple users to interact with the system at the same time. Time-sharing operating systems schedule tasks for efficient use of the system and may also include accounting software for cost allocation of processor time, 
                                          mass storage, printing, and other resources to multiple users.
                                    </p>
                                         </div>
                                    </div>
                                    
                                </div>
                                <!--accordian-->
                                <!--notice-->
                                <div class="shortcode_info" id="notice">
                                    <div class="shortcode_title">
                                    <h2><u>Distributed</u></h2>
                                        <p><code class="highlighter-rouge">A distributed operating system </code> manages a group of distinct, networked computers and makes them appear to be a single computer, as all computations are distributed (divided amongst the constituent computers).</p>
                                    </div>
                                    
                                    <h4 class="s_title" id="notice">Distributed computing models</h4>
                                    <blockquote class="media notice notice-success" style="background-color:cadetblue;">
                                        <i class="icon_menu-square_alt2"></i>
                                        <div class="media-body">
                                            <h5>Organization</h5>
                                            <p>A <span> centralized system</span> has one level of structure, where all constituent elements directly depend upon a single control element. A <span>decentralized system</span> is hierarchical. The bottom level unites subsets of a system's entities. These entity subsets in turn combine at higher levels, ultimately culminating at a central master element. A distributed system is a collection of autonomous elements with no concept of levels.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-warning" style="background-color:bisque;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5>Connection</h5>
                                            <p>Centralized systems connect constituents directly to a central master entity in a hub and spoke fashion. A decentralized system (aka<span>network system</span>) ncorporates direct and indirect paths between constituent elements and the central entity. Typically this is configured as a hierarchy with only one shortest path between any two elements. Finally, the distributed operating system requires no pattern; direct and indirect connections are possible between any two elements. Consider the 1970s phenomena of  <span>“string art” or a spirograph</span>drawing as a fully connected system, and the spider's web or the Interstate Highway System between U.S. cities as examples of a<i> partially connected system</i>.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-danger" style="background-color:darksalmon;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5>Control</h5>
                                            <p>Centralized and decentralized systems have directed<span> flows of connection</span>to and from the central entity, while distributed systems communicate along arbitrary paths. This is the pivotal notion of the third consideration. Control involves allocating tasks and data to system elements balancing efficiency, responsiveness, and complexity.
                                             <span>Centralized and decentralized systems</span> offer more control, potentially easing administration by limiting options. Distributed systems are more difficult to explicitly control, but scale better horizontally and offer fewer points of system-wide failure. The associations conform to the needs imposed by its design but not by organizational chaos</p>
                                        </div>
                                    </blockquote>
                                    <!-- <h4 class="s_title" id="explanation">Construction design</h4>
                                    <p class="explanation expn-left">In order to account for the unanticipated gaps in the software design, during software construction some design modifications must be made on a smaller or larger scale to flesh out details of the software design.</p> -->
                                </div>
                                <!--notice-->
                                <!--tooltip-->
                                <div class="shortcode_info" id="tooltip">
                                    <h2 class="s_title" id="tooltip-t"><u>Embedded</u></h2>
                                    <div class="tooltip_content">
                                        <h6>What are Embedded operating systems?</h6>
                                        <p><code class="highlighter-rouge">Embedded operating systems</code> are designed to be used in embedded computer systems. They are designed to operate on small machines with less autonomy (e.g. PDAs). They are very compact and extremely efficient by design and are able to operate with a limited amount of resources. Windows CE and Minix 3 are some examples of embedded operating systems. </p>
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
                                    <h2 class="s_title" id="table"><u>Library</u></h2>
                                    <p><code class="highlighter-rouge">A library operating system</code> s one in which the services that a typical operating system provides, such as networking, are provided in the form of libraries and composed with the application and configuration code to construct a unikernel: a specialized, single address space, machine image that can be deployed to cloud or embedded environments.</p>
                                    <div class="table-responsive">
                                        <table class="table table_shortcode">
                                            <thead>
                                                <tr>
                                                    <th>Types of libraries :</th>
                                                    <th>Static libraries</th>
                                                    <th>Shared libraries</th>
                                                    <th>Class libraries</th>



                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Their Definitions :</th>
                                                    <td>
                                            <p>When linking is performed during the creation of an executable or another object file, it is known as<b> static linking or early binding</b>.<br> In this case, the linking is usually done by a linker, but may also be done by the compiler.<br> </p>
                                                        </td>
                                                    <td>
                                            <p>A <b>shared library or shared object</b> is a file that is intended to be shared by executable files and further shared object files. Modules used by a program are loaded from individual shared objects into memory at load time or runtime, rather than being copied by a linker when it creates a single monolithic executable file for the program.</p>
                                                    </td>
                                                    <td>
                                    <p><b>Class libraries</b> are the rough OOP equivalent of older types of code libraries. They contain classes, which describe characteristics and define actions (methods) that involve objects. Class libraries are used to create instances, or objects with their characteristics set to specific values. In some OOP languages, like Java, the distinction is clear, with the classes often contained in library files (like Java's JAR file format) and the instantiated objects residing only in memory (although potentially able to be made persistent in separate files). </p>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="basic_table">
                                        <h4 class="s_title load-order-2" id="basic">Static program analysis</h4>
                                        <p><code class="highlighter-rouge">Static program analysis (also known as static analysis or static simulation)</code> is the analysis of computer programs performed without executing them, in contrast with dynamic program analysis, which is performed on programs during their execution in the integrated environment.</p>
                                        
                                    </div>
                                    <div class="basic_table">
                                        <h4 class="s_title load-order-2" id="strip">Dynamic program analysis</h4>
                                        <p><code class="highlighter-rouge">Dynamic program analysis</code> is the act of analyzing software that involves executing a program – as opposed to static program analysis, which does not execute it. </p>
                                        
                                    </div> -->
                                    
                                <!--table-->
                                <!--lightbox-->
                                <div class="shortcode_info" id="lightbox">
                                    <div class="shortcode_title">
                                        <h2 class="s_title" style="margin-top: 40px;"><u>Real-time</u></h2>
                                        <p><code class="highlighter-rouge">A real-time operating system</code> is an operating system that guarantees to process events or data by a specific moment in time. A real-time operating system may be single- or multi-tasking, but when multitasking, 
                                        it uses specialized scheduling algorithms so that a deterministic nature of behavior is achieved. Such an event-driven system switches between tasks based on their priorities or external events, whereas time-sharing operating systems switch tasks based on clock interrupts.</p>
                                    </div>
                                    
                                </div>
                                <!--lightbox-->
                                <!--footnote-->
                                
                                    
                                </div>
                                
                            </article>
                            
                            <!--typography-->
                            <article class="shortcode_info documentation_body typography_content doc-section" id="typography">
                                <div class="shortcode_title">
                                    <h2><u>Components</u></h2>
                                    <p>The components of an operating system all exist in order to make the different parts of a computer work together. </p>
                                </div>
                                
                                <div class="code_item">
                                    <h4 class="c_head load-order-2" id="code"><u>Kernel</u></h4>
                                    <div class="unorderlist">
                                        <p>With the aid of firmware and device drivers, the kernel provides the most basic level of control over all of the computer's hardware devices. It manages memory access for programs in the RAM, it determines which programs get access to which hardware resources, it sets up or resets the CPU's operating states for optimal operation at all times, 
                                            and it organizes the data for long-term non-volatile storage with file systems on such media as disks, tapes, flash memory, etc.</p>
                                    </div>
                                    
                                </div>
                                <div class="img_item">
                                    <h4 class="c_head load-order-2" id="img"><u>Program execution</u></h4>
                                    <div class="unorderlist">
                                        <p>The operating system provides an interface between an application program and the computer hardware, so that an application program can interact with the hardware only by obeying rules and procedures programmed into the operating system. 
                                        The operating system is also a set of services which simplify development and execution of application programs. Executing an application program typically involves the creation of a process by the operating system kernel, which assigns memory space and other resources, 
                                        establishes a priority for the process in multi-tasking systems, loads program binary code into memory, and initiates execution of the application program, which then interacts with the user and with hardware devices. .</p>
                                    </div>
                                    
                                </div>

                                
                                <div class="documentation_body typography_content" id="video">
                                    <div class="shortcode_title">
                                    <h4><u>Software interrupt</u></h4>
                                        <p><span class="blue">A software interrupt</span> is a message to a process that an event has occurred.This contrasts with a hardware interrupt — which is a message to the central processing unit (CPU) that an event has occurred.Software interrupts are similar to hardware interrupts 
                                            — there is a change away from the currently running process.Similarly, both hardware and software interrupts execute an interrupt service routine</p>
                                    
                                <p>
                               <span class="blue"> Software interrupts</span> may be normally occurring events. It is expected that a time slice will occur, so the kernel will have to perform a context switch.A computer program may set a timer to go off after a few seconds in case too much data causes an algorithm to take too long.
                                </p>
                                        </div>                             
                                </div>
                                  
                                <div class="documentation_body typography_content" id="software">
                                    <div class="shortcode_title">
                                    <h4><u>Hardware interrupt</u></h4>
                                        <p><span class="blue">Input/Output (I/O) devices</span> are slower than the CPU. Therefore, it would slow down the computer if the CPU had to wait for each I/O to finish. Instead, 
                                        a computer may implement interrupts for I/O completion, avoiding the need for polling or busy waiting.</p>
                                    
                                <p>Some computers require an interrupt for each character or word, costing a significant amount of CPU time.
                               <span class="blue">  Direct memory access (DMA)</span> s an architecture feature to allow devices to bypass the CPU and access main memory directly.
                                </p>
                                        </div>                             
                                </div>


                            </article>
                            <article class="shortcode_info doc-section" id="changelog" style="margin-bottom: 100px;">
                                <div class="shortcode_title" >
                                    <h2 ><u>Operating system development as a hobby</u></h2>
                                    <p>A hobby operating system may be classified as one whose code has not been directly derived from an existing operating system, and has few users and active developers.</p>
                                    <p>In some cases, hobby development is in support of a <span class="blue">"homebrew"</span> computing device, for example, a <span class="blue"> single-board computer</span> powered by a<span class="blue"> 6502 microprocessor</span>. Or, development may be for an architecture already in widespread use. Operating system development may come from entirely new concepts, or may commence by modeling an existing operating system.
                                         In either case, the hobbyist is her/his own developer, or may interact with a small and sometimes unstructured group of individuals who have like interests.</p>
                                    </div>
                                
                                <div class="border_bottom"></div>
                                <div class="row feedback_link">
                                    <div class="col-lg-6">
                                        <h6><i class="icon_mail_alt"></i>Still stuck? <a href="#" data-toggle="modal" data-target="#exampleModal2">How can we help?</a></h6>
                                    </div>
                                    <div class="col-lg-6">
                                        <p>Was this page helpful? <a href="#" class="h_btn">Yes</a><a href="#" class="h_btn">No</a></p>
                                    </div>
                                </div>


                                <div id="comment" class="comment_inner">
                                <h2 class="c_head"><u>Comments</u></h2>
                                <br>
                                <?php
                        //   $pageId = $_GET['page_id']; 

                            include_once "article_comments.php";
                              ?>
                                
                            </div>
                            <div class="blog_comment_box topic_comment">
                                <h2 class="c_head">Leave a Reply</h2>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form class="get_quote_form row" action="process_comment.php ?>" method="post">
                                <input type="hidden" name="article_id" value="<?php echo $articleId; ?>">    
                                <input type="hidden" name="page_id" value="<?php echo $pageId; ?>">  
                                                                
                                    <div class="col-md-12 form-group">
                                    <input type="hidden" name="page_id" value="<?php echo $pageId; ?>">    
                                        <textarea class="form-control message " name="comment_text" required></textarea>
                                        <label class="floating-label">Comment type...</label>
                                    </div>
                                    <div class="col-md-12 form-group check_input">
                                        <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                        <label for="fruit1">Save my name, email, and website in this browser for the
                                            next time I comment.</label>
                                    </div>
                                    <div class="col-md-12 form-group"><button class="btn action_btn thm_btn" type="submit" name="submit" >Post Comment</button></div>
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
                        <div class="doc_rightsidebar">
                            <ul class="list-unstyled doc_right_link">   
                            <li><a href="#" onclick="enableEditing()"><i class=" icon_pencil"></i>Edit this page</a></li>
                            <li><a href="#" onclick="saveChanges()"><i class=" icon_text"></i>Save changes</a></li>

                            </ul>
                            <select id="mySelect">
                                <option data-content="<i class='fab fa-windows'></i> Windows">Windows</option>
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
                    <p class="wow fadeInUp" data-wow-delay="0.3s" style="font-size: larger;" >© 2024 All Rights Reserved Design by
                        <span>Nancy Abduallh</span>
                    </p>
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