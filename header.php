<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    // Default SEO values if not set
    $default_title = "Jagan Kasarapu Technical and Cleaning Services L.L.C - Home & Commercial Cleaning Dubai";
    $default_desc = "Jagan Kasarapu Technical and Cleaning Services L.L.C provides professional home and commercial cleaning services in Dubai. Book our expert cleaners today.";
    
    $seo_title = isset($page_title) ? $page_title . " - Jagan Kasarapu Technical and Cleaning Services L.L.C" : $default_title;
    $seo_desc = isset($meta_description) ? $meta_description : $default_desc;
    
    // Get current URL for Open Graph
    $current_url = "https://jagantechnicalservices.ae" . $_SERVER['REQUEST_URI'];
    ?>
    <meta name="description" content="<?php echo $seo_desc; ?>">

    <!-- ========== Page Title ========== -->
    <title><?php echo $seo_title; ?></title>

    <!-- ========== Open Graph / Facebook / WhatsApp ========== -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo $seo_title; ?>">
    <meta property="og:description" content="<?php echo $seo_desc; ?>">
    <meta property="og:image" content="https://jagantechnicalservices.ae/assets/img/logo.png">
    <meta property="og:site_name" content="Jagan Kasarapu Technical and Cleaning Services L.L.C">

    <!-- ========== Twitter Card ========== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo $current_url; ?>">
    <meta name="twitter:title" content="<?php echo $seo_title; ?>">
    <meta name="twitter:description" content="<?php echo $seo_desc; ?>">
    <meta name="twitter:image" content="https://jagantechnicalservices.ae/assets/img/logo.png">

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/elegant-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon-set.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/validnavs.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- ========== End Stylesheet ========== -->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area inc-pad bg-theme text-light inc-shape">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-8 info">
                    <ul>
                        <li>
                            <i class="fas fa-envelope-open-text"></i> admin@jagantechnicalservices.ae
                        </li>
                        <li>
                            <i class="fas fa-clock"></i> Working Hours: 9:00 AM – 6:00 PM
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 text-end item-flex">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav nav-border navbar-sticky navbar-default validnavs">

            <div class="container d-flex justify-content-between align-items-center">            
                

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="assets/img/logo.svg" class="logo" alt="Jagan Kasarapu Technical and Cleaning Services Logo" style="height: 90px; width: auto; max-width: 100%;">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <div class="collapse-header">
                        <img src="assets/img/logo.svg" alt="Jagan Kasarapu Technical and Cleaning Services Logo" style="height: 80px; width: auto;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="/">Home</a></li>
                        <li><a href="about-us">About Us</a></li>
                        <li><a href="services">Services</a></li>

                        <li><a href="team">Team</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="contact">
                                <div class="call">
                                    <div class="icon">
                                        <img src="assets/img/icon/phone-call.png" alt="Phone">
                                    </div>
                                    <div class="info">
                                        <p>Have any Questions?</p>
                                        <h5 style="font-size: 15px;"><a href="tel:+971552437393">+971 552437393</a></h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

            </div>   
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
