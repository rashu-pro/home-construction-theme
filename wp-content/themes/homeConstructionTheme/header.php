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
                <div class="pull-left"><a href="<?php echo esc_url(home_url('/')) ?>" title="Home"><img
                                src="<?php echo get_template_directory_uri() ?>/assets/imgs/logo-hhc.png" class="logo1"
                                title="" alt=""/> </a></div>
                <div class="pull-right">
                    <div class="top-menu">
                        <?php
                        wp_nav_menu(array(
                                'theme_location' => 'menu-top',
                                'container' => false,
                            )
                        );
                        ?>

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
                        <div class="pull-left fixed-menu-logo-2"><a href="<?php echo esc_url(home_url('/')) ?>" title="Home"><img
                                        src="assets/imgs/responsive-logo-2.png" alt=""/></a></div>
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
                                    'theme_location' => 'menu-header',
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
