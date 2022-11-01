<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">

<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $ExDescription;?>" />
<meta name="author" content="MAVEN" />

<!-- Page Title -->
<title><?php if($page_name=='index.php'){echo "$Company";}
elseif ($page_name=='about.php') {echo "$Company | About";}
elseif ($page_name=='services.php') {echo "$Company | Services";}
elseif ($page_name=='gallery.php') {echo "$Company | Gallery";}
elseif ($page_name=='testimonials.php') {echo "$Company | Testimonials";}
elseif ($page_name=='thank-you.php') {echo "$Company";}
elseif ($page_name=='contact.php') {echo "$Company | Contact";}?>
</title>    
<link rel="stylesheet" href="css/css_minified.css">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
<?php $_SESSION['token'] = md5(microtime()); ?>

    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "351215899184325", // Facebook page ID
                whatsapp: "<?php echo $PhoneName.$Phone;?>", // WhatsApp number
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
    
<div class="wrapper-area">
<!-- Header Area Start Here -->
<header>
    
    <div class="header-style1-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="<?php echo $PhoneRef;?>"> <?php echo $PhoneName.$Phone;?></a></li><br class="visible-sm">
                                <li ><i class="fa fa-envelope" aria-hidden="true"></i><a href="<?php echo $MailRef;?>"><?php echo $Mail;?></a></li>
                                <li ><i class="fa fa-clock-o"></i><a href=""><?php echo $Schedule;?></a></li>
                                <li ><i class="fa fa-money"></i><a href=""><?php echo $Payment;?></a></li>
                                 </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="logo-area">
                            <a href="index.php"><img class="img-responsive logoimg" src="img/logo.png" alt="logo" loading="lazy"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li> <a href="index.php">Inicio</a> </li>
                                    <li> <a href="about.php">Acerca de Nosotros</a> </li>
                                    <li> <a href="services.php">Productos</a> </li>
                                    <li> <a href="gallery.php">Galeria</a> </li>
                                    <li><a href="contact.php">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('php/secction/menumobil.php') ?>

</header>