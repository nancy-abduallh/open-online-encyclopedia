
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
$pageId=1;

$sql = "SELECT page_url FROM page";
$page_url="software engineering.php";

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
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 100px;">
                    <ul class="navbar-nav menu ml-auto" style="margin-right: 100px;">
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
                                <li class="nav-item"><a href="operating system.php" class="nav-link">Operating System</a>
                                </li>
                                <!-- <li class="nav-item"><a href="programming.php" class="nav-link">Programming</a></li>
                                <li class="nav-item"><a href="cybersecurity.php" class="nav-link">Cypersecurity</a></li> -->
                            </ul>
                        </li>
                    </ul>
                    <li class="nav-btn">
                <div class="nav-link dropdown" style="margin-bottom: 30px; "  onchange="set-language()" name="language">
                    <button class="btn btn-outline-light dropdown-toggle" style="background-color: black; margin-right: 100px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        English
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="arabic_software.php">Arabic</a>
                        
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
                                        <a href="#article" class="nav-link"><img src="img/side-nav/briefcase.png" alt="briefcase">Workload</a>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#tabs" class="nav-link">Requirements analysis</a></li>
                                            <li class="nav-item"><a href="#accordian" class="nav-link">Design</a></li>
                                            <li class="nav-item"><a href="#notice" class="nav-link">Construction</a></li>
                                            <li class="nav-item"><a href="#tooltip" class="nav-link">Testing</a></li>
                                            <li class="nav-item"><a href="#table" class="nav-link">Program analysis</a></li>
                                            <li class="nav-item"><a href="#lightbox" class="nav-link">Maintenance</a></li>
                                            
                                        </ul>
                                        <!-- <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span> -->
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a href="#typography" class="nav-link"><img src="img/side-nav/document.png" alt="">Terminology</a>
                                        <span class="icon">
                                            <i class="icon_plus"></i>
                                            <i class="icon_minus-06"></i>
                                        </span>
                                        <ul class="list-unstyled dropdown_nav">
                                            <li class="nav-item"><a href="#code" class="nav-link">Definitions</a></li>
                                            <!-- <li class="nav-item"><a href="#img" class="nav-link">Image</a></li> -->
                                            <li class="nav-item"><a href="#video" class="nav-link">Video</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#changelog" class="nav-link"><img src="img/side-nav/clock.png" alt="">Education</a>
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
                    <div class="col-lg-8 col-md-8" id="articleContent" contenteditable="false">
                        <div class="documentation_info" id="post">
                            <!--doc-->
                            <article class="documentation_body doc-section pt-0" id="doc">
                                <div class="shortcode_title">
                                    <h2><u>Software Engineering</u></h2>
                                    <p><span>Outlines!</span> of Software Engineering: :</p>

                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="media documentation_item">
                                            <div class="icon">
                                                <img src="img/home_one/icon/topic-icon-6.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5><u>Requirements analysis</u></h5>
                                                </a>
                                                <p>Requirements engineering is about elicitation, analysis, 
                                                specification, and validation of requirements for software. </p>
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
                                                    <h5><u>Design</u></h5>
                                                </a>
                                                <p>Software design is the process of making high-level plans for the software</p>
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
                                                    <h5><u>Construction</u></h5>
                                                </a>
                                                <p>Software construction, typically involves programming (a.k.a. coding), unit testing, integration testing, 
                                                    and debugging so as to implement the design.</p>
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
                                                    <h5><u>Testing</u></h5>
                                                </a>
                                                <p>Software testing is an empirical, technical investigation conducted to provide stakeholders with 
                                        information about the quality of the software under test.</p>
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
                                                    <h5><u>Program analysis</u></h5>
                                                </a>
                                                <p>Program analysis is the process of analyzing computer programs with respect to an aspect 
                                                    such as performance, robustness, and security.</p>
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
                                                    <h5><u>Maintenance</u></h5>
                                                </a>
                                                <p>Software maintenance refers to supporting the software after release.</p>
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
                                                    <h5><u>Software deployment</u></h5>
                                                </a>
                                                <p>Software deployment is all of the activities that make 
                                                    a software system available for use.</p>
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
                                                    <h5><u>Social software engineering</u></h5>
                                                </a>
                                                <p>Social software engineering (SSE) is a branch of software engineering that is concerned with the social aspects of 
                                                    software development and the developed software</p>
                                            </div>
                                        </div>
                                    </div>
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
                                            <!-- <div class="icon">
                                                <img src="img/side-nav/terminals.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#">
                                                    <h5>Terminal</h5>
                                                </a>
                                                <p>He lost his bottle bubble and squeak knackered.!</p>
                                            </div> -->
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
                                    <p><span>Beginning in the 1960s,</span> software engineering was recognized as a separate field of engineering.</p>
                                </div>
                                <p>The development of software engineering was seen as a struggle. It was difficult to keep up with the hardware which caused many problems for software engineers. 
                                    Problems included software that was over budget, exceeded deadlines, required extensive debugging and maintenance, and unsuccessfully met the needs of consumers or
                                     was never even completed.
                                     The origins of the term software engineering have been attributed to various sources. 
                                     The term appeared in a list of services offered by companies in the June 1965 issue of "Computers and Automation"
                                      and was used more formally in the August 1966 issue of Communications of the ACM (Volume 9, number 8) "letter to the ACM membership" by 
                                      the ACM President Anthony A. Oettinger.
                                       It is also associated with the title of a <b>NATO</b> conference in 1968 by Professor Friedrich L. Bauer.
                                        Margaret Hamilton described the discipline of "software engineering" during the Apollo missions to give what they were doing legitimacy.
                                         At the time there was perceived to be a "software crisis". The 40th International Conference on Software Engineering (ICSE 2018) celebrates 
                                         50 years of "Software Engineering" with the Plenary Sessions' keynotes of Frederick Brooks and <b>Margaret Hamilton</b>.
                                    </p>
                                <ul class="ul">
                                    <li>What is NATO?&nbsp;<strong><a href="https://en.wikipedia.org/wiki/NATO" target="_blank" rel="noopener noreferrer"><u>NATO</u></a></strong> </li>
                                    <li>Who is Margaret Hamilton?&nbsp;<strong><a href="https://en.wikipedia.org/wiki/Margaret_Hamilton_(software_engineer)" target="_blank" rel="noopener noreferrer"><u>Margaret Hamilton</u></a></strong></li>
                                    <!-- <li>WordPress Lessons&nbsp;<strong><a href="https://codex.wordpress.org/WordPress_Lessons" target="_blank" rel="noopener noreferrer">Visit Articles</a></strong></li> -->
                                </ul>
                                <h4 class="c_head" id="article"><u>Workload</u></h4>
                                <ul class="list-unstyled article_list tag_list">
                                    <li><a href="tab.html"><i class="icon_document_alt"></i>Requirements analysis</a></li>
                                    <li><a href="accordion.html"><i class="icon_document_alt"></i>Design</a></li>
                                    <li><a href="notice.html"><i class="icon_document_alt"></i>Construction</a></li>
                                    <li><a href="doc-content-tables.html"><i class="icon_document_alt"></i>Testing</a></li>
                                    <li><a href="doc-element-lightbox.html"><i class="icon_document_alt"></i>Program analysis</a></li>
                                    <li><a href="tooltip.html"><i class="icon_document_alt"></i>Maintenance</a></li>
                                    
                                </ul>
                                <div class="border_bottom"></div>
                                <div class="shortcode_info" id="tabs">
                                    <div class="tab_shortcode">
                                        <h2 class="s_title" id="tab"><u> Requirements analysis</u></h2>
                                        <p><code class="highlighter-rouge">Requirements engineering </code> about elicitation, analysis, specification, and validation of requirements for software. Software requirements can be <strong>functional, non-functional</strong> or domain.
                                          Functional requirements describe expected behaviors (i.e. outputs). Non-functional requirements specify issues like portability, security, maintainability, reliability, scalability, performance, 
                                          reusability, and flexibility. They are classified into the following types: interface constraints, performance constraints (such as response time, security, storage space, etc.), operating constraints, 
                                          life cycle constraints (maintainability, portability, etc.), and economic constraints. Knowledge of how the system or software works is needed when it comes to specifying non-functional requirements. Domain requirements 
                                          have to do with the characteristic of a certain category or domain of projects.</p>
                                        
                                    </div>
                                    <div class="process_tab_shortcode">
                                        <ul class="nav nav-tabs v_menu" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true"><span>1</span>Requirements engineering</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false"><span>2</span>Functional Requirements</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="charge-tab" data-toggle="tab" href="#charge" role="tab" aria-controls="charge" aria-selected="false"><span>3</span>Non-Functional Requirements</a>
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
                                                <p>Requirements engineering (RE) is the process of defining, documenting, and maintaining requirements in the engineering design process. It is a common role in systems engineering and software engineering.

The first use of the term requirements engineering was probably in 1964 in the conference paper "Maintenance, Maintainability, and System Requirements Engineering", but it did not come into general use until the late 1990s with the publication of an IEEE Computer Society tutorial in March 1997 and the establishment of a conference series on requirements engineering that has evolved into the International Requirements Engineering Conference.

In the waterfall model, requirements engineering is presented as the first phase of the development process. Later development methods, including the Rational Unified Process (RUP) for software, assume that requirements engineering continues through a system's lifetime.

Requirements management, which is a sub-function of Systems Engineering practices, is also indexed in the International Council on Systems Engineering (INCOSE) manuals.</p>
                                                <div class="version">
                                                    <div class="v_head">
                                                    <u>Activities of Requirements engineering :</u>
                                                    </div>
                                                    <div class="v_middle">
                                                        <p><span class="red">1) Requirements inception or requirements elicitation :</span> Developers and stakeholders meet; the latter are inquired concerning their needs and wants regarding the software product.</p>
                                                        <p> <span class="green">2) Requirements analysis and negotiation :</span>Requirements are identified (including new ones if the development is iterative), and conflicts with stakeholders are solved. Both written and graphical tools (the latter commonly used in the design phase, but some find them helpful at this stage, too) are successfully used as aids. Examples of written analysis tools: use cases and user stories. Examples of graphical tools: UML and LML.</p>
                                                        <p><span class="blue">3) System modeling :</span>Some engineering fields (or specific situations) require the product to be completely designed and modeled before its construction or fabrication starts. Therefore, the design phase must be performed in advance. For instance, blueprints for a building must be elaborated before any contract can be approved and signed. Many fields might derive models of the system with the Lifecycle Modeling Language, whereas others, might use UML. Note: In many fields, such as software engineering, most modeling activities are classified as design activities and not as requirement engineering activities.</p>
                                                        <p><span class="red">4) Requirements specification :</span>Requirements are documented in a formal artifact called a Requirements Specification (RS), which will become official only after validation. A RS can contain both written and graphical (models) information if necessary. Example: Software requirements specification (SRS).</p>
                                                    </div>
                                                    
                                                </div>
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                                                <!-- <p>Twit brilliant he legged it he nicked it amongst hotpot chinwag spend a penny lemon squeezy he lost his bottle porkies, Why it's your round happy days.</p> -->
                                                <div class="version">
                                                    <div class="v_head">
                                                    <u>Functional Requirements  :</u>
                                                    </div>
                                                    <div class="v_middle">
                                                        <p><span class="red">a functional requirement :</span> Defines a function of a system or its component, where a function is described as a summary (or specification or statement) of behavior between inputs and outputs</p>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <!-- <p><span>Usage:</span> Click "Submit" to create a token.</p> -->
                                            </div>
                                            <div class="tab-pane fade" id="charge" role="tabpanel" aria-labelledby="charge-tab">
                                                <div class="version">
                                                    <div class="v_head">
                                                      <u> Non-Functional Requirements</u>
                                                    </div>
                                                    <div class="v_middle">
                                                    <p><span class="red">a non-functional requirement :</span> is a requirement that specifies criteria that can be used to judge the operation of a system, rather than specific behaviours.</p>

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
                                    <h2><u>Design</u></h2>
                                         <div class="v-middle">
                                        <p><code class="highlighter-rouge">Software design</code> is the process of making high-level plans for the software.</p>
                                         </div>
                                    </div>
                                    <div class="toggle_shortcode">
                                        <h4 class="s_title load-order-2" id="toggle">Levels of Design</h4>
                                        <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Interface design</a>
                                        <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                            <div class="card card-body toggle_body">
                                            Interface design plans the interaction between a system and its environment as well as the inner workings of the system                                            </div>
                                        </div>
                                        <a class="toggle_btn mt-1 collapsed" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">Architectural design</a>
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="card card-body toggle_body">
                                            Architectural design plans the major components of a system; including their responsibilities, properties, and interfaces between them.                                            </div>
                                        </div>
                                        <a class="toggle_btn" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Detailed design</a>
                                        <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                            <div class="card card-body toggle_body">
                                            Detailed design plans internal elements; including their properties, relationships, algorithms and data structures.       
                                         </div>
                                        </div>
                                    </div>
                                    <div class="accordion_shortcode">
                                        <h4 class="s_title load-order-2" id="accordions">Design principles</h4>
                                        <div id="accordion">
                                            <div class="card doc_accordion">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        The design process should not suffer from "tunnel vision"<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body toggle_body">
                                                    A good designer should consider alternative approaches, judging each based on the requirements of the problem, the resources available to do the job                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card doc_accordion">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        The design should be traceable to the analysis model.<i class="icon_plus"></i><i class="icon_minus-06"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body toggle_body">
                                                    Because a single element of the design model can often be traced back to multiple requirements, it is necessary to have a means for tracking how requirements have been satisfied by the design model.                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card doc_accordion">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        The design should be structured to accommodate change. <i class="icon_plus"></i><i class="icon_minus-06"></i>
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body toggle_body">
                                                    The design concepts discussed in the next section enable a design to achieve this principle.                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--accordian-->
                                <!--notice-->
                                <div class="shortcode_info" id="notice">
                                    <div class="shortcode_title">
                                    <h2><u>Construction</u></h2>
                                        <p><code class="highlighter-rouge">Software construction, </code> typically involves programming (a.k.a. coding), unit testing, integration testing, and debugging so as to implement the design. Testing during this phase is generally performed by the programmer and with the purpose to verify that the code behaves per design and to know when the code is ready for next level tesing.</p>
                                    </div>
                                    
                                    <h4 class="s_title" id="notice">Software construction fundamentals</h4>
                                    <blockquote class="media notice notice-success" style="background-color:cadetblue;">
                                        <i class="icon_menu-square_alt2"></i>
                                        <div class="media-body">
                                            <h5>Minimizing complexity</h5>
                                            <p>The need to reduce complexity is mainly driven by limited ability of most people to hold complex structures and information in their working memories. Reduced<span>complexity</span> is achieved through emphasizing the creation of <span>code</span> that is simple and readable rather than clever. Minimizing <span> complexity</span> is accomplished through making use of <strong>standards</strong> and through numerous specific techniques in coding. It is also supported by the construction-focused quality techniques..</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-warning" style="background-color:bisque;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5>Anticipating change</h5>
                                            <p>Anticipating change helps software engineers<span>build extensible software</span> , which means they can enhance a software product without disrupting the underlying structure. Research over 25 years showed that the cost of rework can be <span>10 to 100 times</span>(5 to 10 times for smaller projects) more expensive than getting the requirements right the first time.</p>
                                        </div>
                                    </blockquote>
                                    <blockquote class="media notice notice-danger" style="background-color:darksalmon;">
                                        <i class="icon_ribbon_alt"></i>
                                        <div class="media-body">
                                            <h5>Constructing for verification</h5>
                                            <p>Constructing for <span>verification</span>means building software in such a way that faults can be ferreted out readily by the software engineers writing the software, as well as during independent <span>testing</span> and operational activities. Specific techniques that support constructing for verification include following coding standards to support code reviews, unit testing, organizing code to support automated testing, and restricted use of complex or hard-to-understand language structures, among others.</p>
                                        </div>
                                    </blockquote>
                                    <h4 class="s_title" id="explanation">Construction design</h4>
                                    <p class="explanation expn-left">In order to account for the unanticipated gaps in the software design, during software construction some design modifications must be made on a smaller or larger scale to flesh out details of the software design.</p>
                                </div>
                                <!--notice-->
                                <!--tooltip-->
                                <div class="shortcode_info" id="tooltip">
                                    <h2 class="s_title" id="tooltip-t"><u>Testing</u></h2>
                                    <div class="tooltip_content">
                                        <h6>What is Testing?</h6>
                                        <p><code class="highlighter-rouge">Software testing</code> is an empirical, technical investigation conducted to provide stakeholders with information about the quality of the software under test. </p>
                                        <h5>Categorization of Testing</h5>
                                        <p><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">Automated testing :</a> In software testing, test automation is the use of software separate from the software being tested to control the execution of tests and the comparison of actual outcomes with predicted outcomes.Test automation can automate some repetitive but necessary tasks in a formalized testing process already in place, or perform additional testing that would be difficult to do manually. Test automation is critical for continuous delivery and continuous testing.</p>
                                        <p><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">Unit testing :</a> Unit testing refers to verifying the behavior of a relatively small portion of the code, a unit, in isolation from the rest of the codebase. A unit is often a function, module, method or class.  To isolate the unit, a test substitutes dependences with test doubles.</p>
                                        <p><a href="#" class="tooltips" data-tooltip-content="#tooltipOne">Integration testing :</a> Integration testing verifies the behavior of multiple units interacting, but is less than whole system. Often an integration test validates the interface between components against a software design.</p>
                                    </div>
                                    <div class="border_bottom"></div>
                                </div>
                                <!--tooltip-->
                                <!--table-->
                                <div class="shortcode_info">
                                    <h2 class="s_title" id="table"><u>Program Analysis</u></h2>
                                    <p><code class="highlighter-rouge">Program analysis</code> is the process of analyzing computer programs with respect to an aspect such as performance, robustness, and security.</p>
                                    <div class="table-responsive">
                                        <table class="table table_shortcode">
                                            <thead>
                                                <tr>
                                                    <th>Types of Analysis :</th>
                                                    <th>Static program analysis</th>
                                                    <th>Dynamic program analysis</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Their Fields :</th>
                                                    <td>
                                                        <ul>
                                                            <li>Control-flow</li>
                                                            <li>Data-flow analysis</li>
                                                            <li>Abstract interpretation</li>
                                                            <li>Type systems</li>
                                                            <li>Effect systems</li>
                                                            <li>Model checking</li>
                                                        </ul>
                                                        </td>
                                                    <td>
                                                        <ul>
                                                           <li>Testing</li>
                                                            <li>Monitoring</li>
                                                            <li>Program slicing</li>
                                                             
                                                        </ul>
                                                    </td>
                                                    
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="basic_table">
                                        <h4 class="s_title load-order-2" id="basic">Static program analysis</h4>
                                        <p><code class="highlighter-rouge">Static program analysis (also known as static analysis or static simulation)</code> is the analysis of computer programs performed without executing them, in contrast with dynamic program analysis, which is performed on programs during their execution in the integrated environment.</p>
                                        
                                    </div>
                                    <div class="basic_table">
                                        <h4 class="s_title load-order-2" id="strip">Dynamic program analysis</h4>
                                        <p><code class="highlighter-rouge">Dynamic program analysis</code> is the act of analyzing software that involves executing a program – as opposed to static program analysis, which does not execute it. </p>
                                        
                                    </div>
                                    
                                <!--table-->
                                <!--lightbox-->
                                <div class="shortcode_info" id="lightbox">
                                    <div class="shortcode_title">
                                        <h2 class="s_title" style="margin-top: 40px;"><u>Maintenance</u></h2>
                                        <p><code class="highlighter-rouge">Software maintenance</code> refers to supporting the software after release. It may include but is not limited to: error correction, optimization, deletion of unused and discarded features, and enhancement of existing features.</p>
                                    </div>
                                    
                                </div>
                                <!--lightbox-->
                                <!--footnote-->
                                <div class="shortcode_info" id="footnote">
                                    <div class="shortcode_title">
                                    <h4>Importance of software maintenance :</h4>
                                        <p><span><b>Software maintenance</b></span> is a broad activity that include error correction, enhancements of capabilities, removal of obsolete capabilities, and optimization. Because change is inevitable, mechanisms must be developed for evaluation, control and making modifications.</p>
                                    </div>

                                    <div class="footnotes margin-top-xl">
                                        <h4>Software maintenance processes:</h4>
                                        <ol>
                                            <li id="note-name-a" class="footnotes_item">
                                                <strong>Implementation :</strong>
                                                <br>software preparation and transition activities, such as the creation of the maintenance plan; the preparation for handling problems identified during development; and the follow-up on product configuration management.
                                                <a href="#note-link-1" aria-label="Back to article">&uarr;</a>
                                            </li>
                                            <li id="note-name-b" class="footnotes_item">
                                                <strong>Problem and modification analysis:  </strong> 
                                                <br>Requests and problems are confirmed (reproduced), analyzed and investigated. Solutions are proposed and documented. Authorization to apply modifications is obtained.
                                                <a href="#note-link-2" aria-label="Back to article">&uarr;</a>
                                            </li>
                                            <li id="note-name-c" class="footnotes_item">
                                                <strong>Modification implementation :</strong>
                                                <br>software code, data and/or configuration is updated, compiled, and re-deployed.
                                                <a href="#note-link-3" aria-label="Back to article">&uarr;</a>
                                            </li>
                                            <li id="note-name-c" class="footnotes_item">
                                                <strong>Modification acceptance :</strong>
                                                <br>the individual who submitted the request operates/tests the software to confirm that the issue has been resolved.
                                                <a href="#note-link-3" aria-label="Back to article">&uarr;</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                
                            </article>
                            
                            <!--typography-->
                            <article class="shortcode_info documentation_body typography_content doc-section" id="typography">
                                <div class="shortcode_title">
                                    <h2><u>Terminology</u></h2>
                                    <p>Notable definitions of software engineering include:</p>
                                </div>
                                
                                <div class="code_item">
                                    <h4 class="c_head load-order-2" id="code">Definitions</h4>
                                    <div class="unorderlist">
                                        <ul class="single_list">
                                            <li>"The systematic application of scientific and technological knowledge, methods, and experience to the design, implementation, testing, and documentation of software"—<i>The Bureau of Labor Statistics—IEEE Systems and software engineering – Vocabulary</i></li>
                                            <li>"The application of a systematic, disciplined, quantifiable approach to the development, operation, and maintenance of software"— <i>IEEE Standard Glossary of Software Engineering Terminology</i></li>
                                            <li>"an engineering discipline that is concerned with all aspects of software production"— <i>Ian Sommerville</i></li>
                                            <li>"the establishment and use of sound engineering principles in order to economically obtain software that is reliable and works efficiently on real machines"— <i>Fritz Bauer</i></li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                
                                <div class="documentation_body typography_content" id="video">
                                    <div class="shortcode_title">
                                    <h4>Video</h4>
                                        <p>Explanation of Software Engineering</p>
                                    </div>
                                    <h4 class="c_head load-order-2" id="about">About</h4>
                                    <p>Software engineering is all about writing code in a structured and formal way, with the end goal of achieving greater readability and maintainability of code. To do this, the lifecycle of a project is usually divided as follows:
                                        <ol>
                                            <li>Requirements Gathering</li>
                                            <li>Planning</li>
                                            <li>Development</li>
                                            <li>Testing</li>
                                        </ol>
                                           </p>
                                    <div class="code_item">
                                        <div class="code-preview">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/sB2iQSvrcG0?si=RnwJkimw3lhEL4n7" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                    
                                </div>
                            </article>
                            <article class="shortcode_info doc-section" id="changelog" style="margin-bottom: 100px;">
                                <div class="shortcode_title" >
                                    <h2 ><u>Education</u></h2>
                                    <p>Knowledge of computer programming is a prerequisite for becoming a software engineer. In 2004 the IEEE Computer Society produced the SWEBOK, which has been published as ISO/IEC Technical Report 1979:2005, describing the body of knowledge that they recommend to be mastered by a graduate software engineer with four years of experience</p>
                                
                                    <h4 class="c_head load-order-2" id="about">Software engineering degree programs</h4>
                                       <p>Half of all practitioners today have degrees in computer science, information systems, or information technology.A small, but growing, number of practitioners have software engineering degrees. In 1987, the Department of Computing at Imperial College London introduced the first three-year software engineering Bachelor's degree in the UK and the world; in the following year, the University of Sheffield established a similar program. In 1996, the Rochester Institute of Technology established the first software engineering bachelor's degree program in the United States, however, it did not obtain ABET accreditation until 2003, the same time as Rice University, Clarkson University, Milwaukee School of Engineering and Mississippi State University obtained theirs. In 1997, PSG College of Technology in Coimbatore, India was the first to start a five-year integrated Master of Science degree in Software Engineering.</p>
                                 <p>Since then, software engineering undergraduate degrees have been established at many universities. A standard international curriculum for undergraduate software engineering degrees, SE2004, was defined by a steering committee between 2001 and 2004 with funding from the Association for Computing Machinery and the IEEE Computer Society. As of 2004, in the U.S., about 50 universities offer software engineering degrees, which teach both computer science and engineering principles and practices. The first software engineering Master's degree was established at Seattle University in 1979. Since then graduate software engineering degrees have been made available from many more universities. Likewise in Canada, the Canadian Engineering Accreditation Board (CEAB) of the Canadian Council of Professional Engineers has recognized several software engineering programs.</p>
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
                                    <input type="hidden" name="article_id" value="<?php echo $articleId; ?>">   
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
                    </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 doc_right_mobile_menu">
                        <div class="open_icon" id="right">
                            <i class="arrow_carrot-left"></i>
                            <i class="arrow_carrot-right"></i>
                        </div>
                        <div class="doc_rightsidebar" style="left: 1100px;">
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
                        <p>© 2024 All Rights Reserved by <a href="index.html">Nancy Abduallh</a></p>
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