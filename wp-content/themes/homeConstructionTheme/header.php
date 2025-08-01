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
    <style>
        body, body p{
            font-family: 'Inter', sans-serif;
            font-size: 16px;
        }
        .navbar-nav .dropdown .dropdown-menu{
            width: auto;
        }
        .navbar-default .navbar-nav>li>a{
            font-size: 16px;
        }
        .navbar-nav .nav-link{
            font-size: 15px;
            color: #202020;
        }
        .icon-txt .lead{
            font-size: 16px;
        }
        .icon-txt p{
            font-size: 15px;
            line-height: 1.5;
        }
        .navbar-nav .dropdown:hover .dropdown-menu .dropdown .dropdown-menu{
            display: none;
        }
        .navbar-nav .dropdown .dropdown-menu .dropdown .sub-menu.dropdown-menu{
            left: 100%;
            top: 0;
        }
        .navbar-nav .dropdown .dropdown-menu .dropdown:hover .dropdown-menu{
            display: block;
        }
        .head-icon i{
            color: #0f356a;
            position: relative;
            top: 12px;
        }
        .head-icon i:before{
            font-size: 30px;
        }
        .contact-top p{
            margin: 0;
        }
        .contact-top .info-head{
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 4px;
        }

        @media (max-width: 1199px){
            .navbar-nav .dropdown .dropdown-menu .dropdown .sub-menu.dropdown-menu{
                display: block;
                margin: 0 0 0 11px;
                box-shadow: none;
                /*border-width: 0;*/
                /*border-right: 0;*/
                /*border-color: #00274d;*/
                border: 0;
                border-left: 2px solid #00274d;
            }
            .navbar-expand-sm .navbar-nav .nav-link{
                padding-top: 10px;
                padding-bottom: 10px;
                margin-bottom: 20px;
            }
            .navbar-expand-sm .navbar-nav .dropdown .dropdown-menu .nav-link{
                margin-bottom: 10px;
                font-size: 16px;
            }
            .nav > li.menu-item > a.nav-link{
                font-size: 18px!important;
            }
            .hero-slider-item{
                height: auto;
            }
            .hero-slider-item video{
                position: absolute;
                height: 100%;
            }

            .comment-navigation .nav-links, .posts-navigation .nav-links, .post-navigation .nav-links{
                display: block;
            }
        }

        .project-navigation .nav-links a {
            display: inline-block;
            margin-bottom: 20px;
        }

    </style>
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
                <div class="row">
                    <div class="col-sm-3">
                        <div class="pull-left"><a href="<?php echo esc_url(home_url('/')) ?>" title="Home"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-hhc.png" class="logo1"
                                        title="" alt=""/> </a>
                        </div>
                    </div>

                    <?php if(!wp_is_mobile()): ?>
                        <div class="col-sm-9">
                            <div class="">
                                <div class="contact-top">
                                    <?php
                                    $address = Redux::get_option('hhc_redux_options', 'hhc_contact_details_address');
                                    $phone = Redux::get_option('hhc_redux_options', 'hhc_contact_details_phone');
                                    $email = Redux::get_option('hhc_redux_options', 'hhc_contact_details_email');
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="row">
                                                <div class="col-xs-2">
                                                <span class="head-icon">
                                                    <i class="flaticon-email"></i>
                                                </span>
                                                </div>
                                                <div class="col-xs-10">
                                                    <p class="info-head">Email</p>
                                                    <p><a href="mailto:<?= $email ?>"> <?= $email ?></a> </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="col-xs-2">
                                            <span class="head-icon">
                                                    <i class="flaticon-technology"></i>
                                                </span>
                                            </div>
                                            <div class="col-xs-10">
                                                <p class="info-head">Phone</p>
                                                <p><a href="tel:<?= $phone ?>"> <?= $phone ?></a> </p>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="col-xs-2">
                                            <span class="head-icon">
                                                    <i class="flaticon-placeholder"></i>
                                                </span>
                                            </div>
                                            <div class="col-xs-10">
                                                <p class="info-head">Address</p>
                                                <p><?= $address ?> </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
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
                        <div class="pull-left fixed-menu-logo-2"><a href="<?php echo esc_url(home_url('/')) ?>"
                                                                    title="Home"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-hhc.png" alt=""/></a></div>
                        <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target="#bs-example-navbar-collapse-1"><span
                                    class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i></button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <div class="pull-left fixed-menu-logo"><a href="<?php echo site_url() ?>" title="Home"><img
                                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-hhc.png"
                                        alt=""/></a></div>

                        <nav class="navbar navbar-expand-sm navbar-left">
                            <?php
                            wp_nav_menu(array(
                                    'theme_location' => 'main_menu',
                                    'menu_class' => 'nav navbar-nav',
                                    'container' => false
                                )
                            );
                            ?>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
        </nav>
        <!--\\ Navigation -->
    </header><!-- #masthead -->
