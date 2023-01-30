<?php @session_start(); ?>
<!DOCTYPE html>
<?php include 'php/text.php'; ?>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Page Title -->
    <title><?php if ($page_name == 'index.php') {
                echo "$Company";
            } elseif ($page_name == 'about.php') {
                echo "$Company | About";
            } elseif ($page_name == 'services.php') {
                echo "$Company | Products";
            } elseif ($page_name == 'gallery.php') {
                echo "$Company | Gallery";
            } elseif ($page_name == 'testimonials.php') {
                echo "$Company | Testimonials";
            } elseif ($page_name == 'thank-you.php') {
                echo "$Company";
            } elseif ($page_name == 'contact.php') {
                echo "$Company | Contact";
            } ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900%7COpen+Sans:400,700,700i" rel="stylesheet">

    <link rel="icon" type="images/png" href="images/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/rev-settings.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="css/responsive.css" />

</head>

<body>
    <?php $_SESSION['token'] = md5(microtime()); ?>

    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "351215899184325", // Facebook page ID
                whatsapp: "<?php echo $PhoneName . $Phone; ?>", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#8b3e0e", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>

    <div class="header header-transparent nav-sticky">
        <!-- header section -->
        <header class="xs-header header-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="xs-logo-wraper">
                            <a href="index.php" class="xs-logo">
                                <img src="images/logo-transparent-header.png" alt="" class="logo-transparent">
                                <img src="images/logo.png" alt="" class="logo-sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <nav class="xs-menus align-to-right">
                            <div class="nav-header">
                                <a class="nav-brand" href="index.php"></a>
                                <div class="nav-toggle"></div>
                            </div>
                            <div class="nav-menus-wrapper">
                                <ul class="nav-menu align-to-right">
                                    <li><a href="index.php">HOME</a>
                                    <li><a href="about.php">ABOUT</a>
                                    <li><a href="#">SERVICES</a>
                                        <ul class="nav-dropdown xs-icon-menu clearfix">
                                            <li class="single-menu-item">
                                                <a href="email-marketing.php"><i class="icon icon-envelope2"></i> Email Marketing</a>
                                            </li>
                                            <li class="single-menu-item">
                                                <a href="offline-seo.php"><i class="icon icon-dart-board"></i> Offline SEO</a>
                                            </li>
                                            <li class="single-menu-item">
                                                <a href="social-media-marketing.php"><i class="icon icon-like"></i> Social Media Marketing</a>
                                            </li>
                                            <li class="single-menu-item">
                                                <a href="lead-generation.php"><i class="icon icon-stats-3"></i> Lead Generation</a>
                                            </li>
                                            <li class="single-menu-item">
                                                <a href="growth-hacking.php"><i class="icon icon-stats-4"></i> Growth Hacking</a>
                                            </li>
                                            <li class="single-menu-item">
                                                <a href="search-engine-optimization.php"><i class="icon icon-search2"></i> Search Engine Optimization</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">PAGES</a>
                                        <div class="megamenu-panel xs-icon-menu">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="single-menu-item">
                                                        <a href="about.php"><i class="icon icon-planet-earth"></i>Construction</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="case-studies.php"><i class="icon icon-planet-earth"></i>Remodeling</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="case-details.php"><i class="icon icon-planet-earth"></i>Roofing</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="faq.php"><i class="icon icon-planet-earth"></i>Landscaping</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="single-menu-item">
                                                        <a href="team.php"><i class="icon icon-planet-earth"></i>Concrete</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="map.php"><i class="icon icon-planet-earth"></i>Pool services</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="shop.php"><i class="icon icon-planet-earth"></i>Handyman</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="shop-single.php"><i class="icon icon-shopping-cart"></i>Shop </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="single-menu-item">
                                                        <a href="404.php"><i class="icon icon-planet-earth"></i>Home inprovement</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="pricing.php"><i class="icon icon-planet-earth"></i>Cleaning</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="typography.php"><i class="icon icon-planet-earth"></i>Typography</a>
                                                    </div>
                                                    <div class="single-menu-item">
                                                        <a href="testimonial.php"><i class="icon icon-users"></i>Testimonial</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="contact.php">CONTACT</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <ul class="xs-menu-tools">
                            <li>
                                <a href="#modal-popup-1" class="languageSwitcher-button xs-modal-popup">
                                    <span class="xs-flag" style="background-image: url(images/flags/006-united-states.svg);"></span>
                                    <span class="lang-title">EN</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="offset-side-bar"><i class="icon icon-online-shopping-cart"></i></a>
                            </li>
                            <li>
                                <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .row END -->
                <div class="navSidebar-wraper clearfix">
                    <div class="single-navicon">
                        <a href="#" class="navSidebar-button"><i class="icon icon-menu-1"></i></a>
                    </div>
                </div>
                <!-- .navSidebar-wraper END -->
            </div>
            <!-- .container END -->
        </header>
        <!-- End header section -->
    </div>