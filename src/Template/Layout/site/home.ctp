<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Code for Page Title-->
        <title>DotPhase - Enterprise Web Application Development, Custom Website Programming Services</title>

        <!-- Meta Code for Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1"/> 

        <!-- Stylesheet for animation-->
        <?= $this->Html->css('site/animate.css') ?>

        <!-- Stylesheet for Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'/>

        <!-- Stylesheet for jcarousel slider -->
        <?= $this->Html->css('site/jcarousel.responsive.css') ?>

        <!-- Stylesheet for Core Bootstrap -->
        <?= $this->Html->css('site/bootstrap.css') ?>

        <!-- Stylesheet for Bootstrap Dropdown Select-->
        <?= $this->Html->css('site/bootstrap-select.css') ?>

        <!-- Stylesheet for Main Style -->
        <?= $this->Html->css('site/style.css') ?>

        <!-- Stylesheet for Main Style -->
        <?= $this->Html->css('site/sarower.css') ?>

        <!-- Stylesheet for Responsive -->
        <?= $this->Html->css('site/responsive.css') ?>

        <!--[if IE]>
                <link rel="stylesheet" type="text/css" href="css/ie9.css" /> 
        <![endif]-->

        <!-- Script for core jQuery --> 
        <?= $this->Html->script('site/jquery.min.js') ?>
    </head>
    <body> 
        <header class="header" id="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" >
                        <?php
                            echo $this->Html->image("site/dot-pgase-logo.png", [
                                "alt" => "Dotphase Logo", 
                                'url' => '/'
                                ]);
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                         
                        <div class="num-mb">1-888-368-6852</div>
                    </div>
                </div>
            </div>
        </header> 
        <section>
            <div class="container">
                <div class="row">  
                    <div class="col-lg-12">
                        <h1 style="display:none">Hidden Heading</h1>
                        <nav class="navbar navbar-default dot-nav"> 
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed nav-phon-butn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button> 
                            </div>                            
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active hom-icon"><a href="index.php">Home</a></li> 
                                    <li><a href="company.php">COMPANY</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SERVICES  </a>
                                        <ul class="dropdown-menu dropdown-menu-large" role="menu">
                                            <li><a href="usability-and-user-interface-design.php">Usability and User Interface Design</a></li>
                                            <li><a href="web-application-development.php">Web Application Development</a></li>
                                            <li><a href="mobile-application-development.php">Mobile Application Development</a></li>
                                            <!--<li><a href="web-application-development.php">Custom Software Development</a></li> 
                                            <li><a href="#">Cloud Application Development</a></li>-->
                                            <li><a href="legacy-application-migration-modernisation.php">Legacy Application Migration / Modernisation</a></li>
                                            <li class="botm-brdr"><a href="hire-a-programmer.php">Hire A Programmer / Team Augmentation</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TECHNOLOGIES  </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="botm-brdr"><a href="dot-net-development.php">.NET Development</a></li>
                                            <li class="botm-brdr"><a href="php-development.php">PHP Development</a></li>
                                            <li class="botm-brdr"><a href="java-development.php">Java Development</a></li>
                                            <li class="botm-brdr"><a href="mobile-application-development.php">iOS & Android Development</a></li>
                                            <!--<li>Ruby on Rails</li> -->
                                            <li class="botm-brdr"><a href="saas-product-development.php">SaaS Product Development</a></li> 
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SOLUTIONS  </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="botm-brdr"><a href="community-portal.php">Community Portal</a></li>
                                            <li class="botm-brdr"><a href="content-management-system.php">Content Management System</a></li>
                                            <li class="botm-brdr"><a href="E-Commerce.php">E-Commerce</a></li>
                                            <li class="botm-brdr"><a href="event-management-portal.php">Event Management Portal</a> </li>
                                            <li class="botm-brdr"><a href="payment-processing-online.php">Payment Processing Online</a></li> 
                                        </ul>
                                    </li>
                                    <li><a href="contact.php" class="last_child">CONTACT US</a></li> 
                                </ul>  
                            </div><!-- /.navbar-collapse --> 
                        </nav>
                    </div>                      
                </div>
            </div>
        </section>

        <section class="scroll_menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <?php echo $this->Html->image("site/dot-pgase-logo.png", ["alt" => "Dotphase Logo",'class'=>'img=responsive','url'=>'/' ]); ?>
                    </div>
                    <div class="col-sm-9">
                        <h1 style="display:none">Hidden Heading</h1>
                        <nav class="navbar navbar-default dot-nav"> 
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed nav-phon-butn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button> 
                            </div>                            
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                <ul class="nav navbar-nav">
                                    <li class="active hom-icon"><a href="index.php"></a></li> 
                                    <li><a href="company.php">COMPANY</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SERVICES  </a>
                                        <ul class="dropdown-menu dropdown-menu-large" role="menu">
                                            <li><a href="usability-and-user-interface-design.php">Usability and User Interface Design</a></li>
                                            <li><a href="web-application-development.php">Web Application Development</a></li>
                                            <li><a href="mobile-application-development.php">Mobile Application Development</a></li>
                                            <!--<li><a href="web-application-development.php">Custom Software Development</a></li> 
                                            <li><a href="#">Cloud Application Development</a></li>-->
                                            <li><a href="legacy-application-migration-modernisation.php">Legacy Application Migration / Modernisation</a></li>
                                            <li class="botm-brdr"><a href="hire-a-programmer.php">Hire A Programmer / Team Augmentation</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">TECHNOLOGIES  </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="botm-brdr"><a href="dot-net-development.php">.NET Development</a></li>
                                            <li class="botm-brdr"><a href="php-development.php">PHP Development</a></li>
                                            <li class="botm-brdr"><a href="java-development.php">Java Development</a></li>
                                            <li class="botm-brdr"><a href="mobile-application-development.php">iOS & Android Development</a></li>
                                            <!--<li>Ruby on Rails</li> -->
                                            <li class="botm-brdr"><a href="saas-product-development.php">SaaS Product Development</a></li> 

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SOLUTIONS  </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="botm-brdr"><a href="community-portal.php">Community Portal</a></li>
                                            <li class="botm-brdr"><a href="content-management-system.php">Content Management System</a></li>
                                            <li class="botm-brdr"><a href="E-Commerce.php">E-Commerce</a></li>
                                            <li class="botm-brdr"><a href="event-management-portal.php">Event Management Portal</a> </li>
                                            <li class="botm-brdr"><a href="payment-processing-online.php">Payment Processing Online</a></li> 
                                        </ul>
                                    </li>				

                                    <!--<li><a href="#">CASE STUDIES</a></li> 
                                    <li><a href="#">CLIENTS</a></li> -->
                                    <li><a href="contact.php" class="last_child">CONTACT US</a></li> 
                                </ul>  
                            </div><!-- /.navbar-collapse --> 
                        </nav>
                    </div>                      
                </div>
            </div>
        </section>


<?= $this->fetch('content') ?>

        <!--Footer Top -->
        <section class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <h1 class="h1-footer"><span>Services</span></h1>
                                <ul>  
                                    <li><a href="usability-and-user-interface-design.php">Usability and User Interface Design</a></li>
                                    <li><a href="web-application-development.php">Web Application Development</a></li>
                                    <li><a href="mobile-application-development.php">Mobile Application Development</a></li>
                                    <!--<li><a href="web-application-development.php">Custom Software Development</a></li>
                                    <li><a href="#">Cloud Application Development</a></li>-->
                                    <li><a href="legacy-application-migration-modernisation.php">Legacy Application Modernisation</a></li> 
                                    <li><a href="hire-a-programmer.php">Hire A Programmer</a></li>

                                </ul>

                                <?php echo $this->Html->image("site/everify-logo.jpg", ["alt" => "Dotphase Logo" ]); ?>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-md-6 contact">
                                <h1 class="h1-footer"><span>Contact Us</span></h1> 
                                <ul>
                                    <li class="home">DotPhase Inc. <br/>
                                        75 Executive Drive Suite 451<br />Aurora, IL 60504, USA.
                                    </li>
                                    <li class="mail"><a href ="mailto:sales@dotphase.com">sales@dotphase.com</a></li>
                                    <li class="phone">1-888-dot-6852 (368-6852)
                                    </li> 
                                </ul>
                            </div> 
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 partForm"> 
                        <h1 class="h1-footer h1-footer2"><span>Get Started</span></h1>
                 
                        <form id="footer_page_form" action="" method="post">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 xxxx">
                                    <input class="same-input" type="text" placeholder="Full Name *" name="name" value="" class="required" />
                                    <div class="commonerror"></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  yyyyy">
                                    <input class="same-input" type="text" placeholder="Company" name="company" value="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  xxxx">
                                    <input class="same-input" type="email" placeholder="Email *" name="email" value="" class="required" />
                                    <div class="commonerror"></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  yyyyy">
                                    <input class="same-input" type="text" placeholder="Phone Number *" name="phone" value="" class="required" />
                                    <div class="commonerror"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xs-12 col-sm-6 xxxx">
                                    <textarea placeholder="Message *" name="message" class="required"></textarea>
                                    <div class="commonerror"></div>
                                </div> 
                                <div class="col-xs-12 col-sm-6">
                                     
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-3 col-xs-4 col-sm-3">
                                    <input type="submit" name="footer_submit" value="Submit" class="submit_button"/> <br> <br>
                                </div> 
                            </div>
                        </form>    
                    </div>  
                </div>
            </div> 
        </section>

        <!--Footer Bottom -->
        <section class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-12 col-sm-7 left-space0">
                        <h1 style="display:none">Hidden Heading</h1>
                        <p>&copy; <a href="#">2015 DotPhase Inc.</a> | All Rights Reserved | Acceptable Use Policy</p>
                    </div>
                </div>
            </div>
        </section>

        <span id="top-link-block" class="hidden">
            <a href="#top" class="well well-sm"  onclick="jQuery('html,body').animate({scrollTop: 0}, 'slow');return false;">
                <i class="glyphicon glyphicon-chevron-up"></i>
            </a>
        </span> 

        <!-- Script for PaceLoader JS -->
        <?= $this->Html->script('site/pace.min.js') ?>

        <!-- Script for Waypoints JS -->
        <?= $this->Html->script('site/waypoints.min.js') ?>

        <!-- Script for Google Recaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <!-- Script for Bootstrap Core Js -->
        <?= $this->Html->script('site/bootstrap.min.js') ?>

        <!-- Script for Bootstrap Dropdown Select -->
        <?= $this->Html->script('site/bootstrap-select.js') ?>

        <!-- Script for Jcarousel Slider Core JS -->
        <?= $this->Html->script('site/jquery.jcarousel.min.js') ?>

        <!-- Script for Jcarousel Slider Responsive -->
        <?= $this->Html->script('site/jcarousel.responsive.js') ?>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Script for Revolution Slider-->
        <script type="text/javascript">

                // Code for Make menu on hover smoothly
                jQuery(document).ready(function () {

                    // Code for Lazy Load
                    jQuery('.fx').waypoint(function () {
                        var anim = jQuery(this).attr('data-animate'),
                                del = jQuery(this).attr('data-animation-delay');
                        deu = jQuery(this).attr('data-animation-duration');
                        jQuery(this).addClass('animated ' + anim).css({animationDelay: del + 'ms'});
                        jQuery(this).css({animationDuration: deu + 'ms'});
                    }, {offset: '100%', triggerOnce: true});

                    var mobile = jQuery(window).width();
                    if (mobile > 767) {
                        jQuery('ul.nav li.dropdown').hover(function () {
                            jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
                        }, function () {
                            jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
                        });
                    }

                    jQuery(window).scroll(function () {
                        var scroll = jQuery(window).scrollTop();
                        if (scroll >= 160) {
                            jQuery(".scroll_menu").css("top", "0px");
                        }
                        if (scroll <= 160) {
                            jQuery(".scroll_menu").css("top", "-100px");
                        }
                    });

                    if ((jQuery(window).height() + 100) < jQuery(document).height()) {
                        jQuery('#top-link-block').removeClass('hidden').affix({
                            offset: {top: 100}
                        });
                    }
                });
        </script> 
    </body>
</html>
