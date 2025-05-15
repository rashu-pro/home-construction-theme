<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home_Construction_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e('Skip to content', 'home-construction-theme'); ?></a>

    <header id="masthead" class="site-header">
        <!--header -->
        <div class="top-header">
            <div class="container">
                <div class="pull-left"><a href="index.html" title="Home"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-hhc.png" class="logo1"
                                title="" alt=""/> </a></div>
                <div class="pull-right">
                    <div class="top-menu">
                        <ul>
                            <li><a href="support.html">Support</a></li>
                            <li class="saperator">|</li>
                            <li><a href="privacy.html">Privacy</a></li>
                            <li class="saperator">|</li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li class="saperator">|</li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="top-search-div">
                        <div class="top-social">
                            <ul>
                                <li>
                                    <div class="hvr-sweep-to-right"><a href="https://www.facebook.com/srgit/" title=""
                                                                       target="_blank"><i
                                                    class="fa fa-facebook"></i></a></div>
                                </li>
                                <li>
                                    <div class="hvr-sweep-to-right"><a href="https://twitter.com/srgit" title=""
                                                                       target="_blank"><i class="fa fa-twitter"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="hvr-sweep-to-right"><a href="http://srgit.tumblr.com/" title=""
                                                                       target="_blank"><i class="fa fa-tumblr"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="hvr-sweep-to-right"><a href="https://www.linkedin.com/company/srgit"
                                                                       title="" target="_blank"><i
                                                    class="fa fa-linkedin"></i></a></div>
                                </li>
                                <li>
                                    <div class="hvr-sweep-to-right"><a href="https://www.instagram.com/srgit/" title=""
                                                                       target="_blank"><i
                                                    class="fa fa-instagram"></i></a></div>
                                </li>
                                <li>
                                    <div class="hvr-sweep-to-right"><a href="https://in.pinterest.com/srgit/" title=""
                                                                       target="_blank"><i
                                                    class="fa fa-pinterest"></i></a></div>
                                </li>
                            </ul>
                        </div>
                        <div class="top-search top-s">
                            <input type="text" placeholder="Search"/>
                            <input type="submit" class="search" value=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--\\ header -->
        <!-- Navigation -->
        <nav class="navbar fixed-top  navbar-default navbar-custom">
            <div class="parallelogram-container">
                <div class="parallelogram"></div>
            </div>
            <div class="container">
                <div class="container-fluid no-padding">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header page-scroll">
                        <div class="top-search-div search-div search-div-2">
                            <div class="top-search top-search-2">
                                <input type="text" placeholder="Search"/>
                                <input type="submit" class="search" value=""/>
                            </div>
                        </div>
                        <div class="pull-left fixed-menu-logo-2"><a href="index.html" title="Home"><img
                                        src="assets/imgs/responsive-logo-2.png" alt=""/></a></div>
                        <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target="#bs-example-navbar-collapse-1"><span
                                    class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i></button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="pull-left fixed-menu-logo"><a href="index.html" title="Home"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-hhc.png" alt=""/></a></div>
                        <nav class="navbar navbar-expand-sm navbar-left">
                            <ul class="nav navbar-nav">
                                <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle"
                                                                        data-bs-toggle="dropdown" href="#" role="button"
                                                                        aria-haspopup="true" aria-expanded="false">
                                        Home </a>
                                    <div class="dropdown-menu"><a href="index.html" class="dropdown-item">Home v1</a> <a
                                                href="index-2.html" class="dropdown-item">Home v2</a> <a
                                                href="index-3.html" class="dropdown-item">Home v3</a> <a
                                                href="https://www.creativethemes.co.in/buy-creativetheme-html-template/architevo-builder/template-onepage/index.html"
                                                class="dropdown-item">One Page Template</a></div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                                 aria-haspopup="true" aria-expanded="false"> About </a>
                                    <div class="dropdown-menu"><a href="about.html" class="nav-link">About Us</a> <a
                                                href="about-2.html" class="nav-link">About Us V2</a></div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                                 aria-haspopup="true" aria-expanded="false">
                                        Services </a>
                                    <div class="dropdown-menu"><a href="services.html"
                                                                  class="dropdown-item">Services</a> <a
                                                href="services-2.html" class="dropdown-item">Services V2</a> <a
                                                href="service-details.html" class="dropdown-item">Services Details</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                                 aria-haspopup="true" aria-expanded="false">
                                        Projects </a>
                                    <div class="dropdown-menu"><a class="dropdown-item"
                                                                  href="projects.html">Projects</a> <a
                                                class="dropdown-item" href="projects-2.html">Projects V2</a> <a
                                                class="dropdown-item" href="projects-lightbox.html">Projects Lighbox</a>
                                        <a class="dropdown-item" href="projects-lightbox-description.html">Projects
                                            Lighbox Description</a> <a class="dropdown-item"
                                                                       href="project-details.html">Projects Details</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                                 aria-haspopup="true" aria-expanded="false"> Pages </a>
                                    <div class="dropdown-menu"><a href="coming-soon.html" class="dropdown-item">Coming
                                            Soon</a> <a href="page-not-found.html" class="dropdown-item">Page Not
                                            Found</a> <a href="faq.html" class="dropdown-item">FAQ</a> <a
                                                href="privacy.html" class="dropdown-item">Privacy</a> <a
                                                href="support.html" class="dropdown-item">Support</a></div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                                 aria-haspopup="true" aria-expanded="false"> Blog </a>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="blogs.html">Blogs</a> <a
                                                class="dropdown-item" href="blogs-grid-1.html">Blogs Grid</a> <a
                                                class="dropdown-item" href="blogs-grid-2.html">Blogs Grid V2</a> <a
                                                class="dropdown-item" href="blogs-3.html">Blogs Left Sidebar</a> <a
                                                class="dropdown-item" href="blog-details.html">Blog Details</a> <a
                                                class="dropdown-item" href="blog-details-2.html">Blog Details Left
                                            Sidebar</a></div>
                                </li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle"
                                                                 data-bs-toggle="dropdown" href="#" role="button"
                                                                 aria-haspopup="true" aria-expanded="false"> Contact
                                        Us </a>
                                    <div class="dropdown-menu"><a class="dropdown-item" href="contact.html">Contact Us
                                            1</a> <a class="dropdown-item" href="contact-2.html">Contact Us 2</a></div>
                                </li>
                                <li class="on-mob"><a href="services.html#quote-now">Quote Now</a></li>
                            </ul>
                        </nav>

                        <div class="pull-right quote-now"><a href="#" data-bs-toggle="modal" data-bs-target="#myModal3">Quote
                                Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a></div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
        </nav>
        <!--\\ Navigation -->
    </header><!-- #masthead -->
