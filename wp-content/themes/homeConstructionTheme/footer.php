<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home_Construction_Theme
 */

?>

	<footer id="colophon" class="site-footer">
        <!-- footer -->
        <div class="footer">
            <div class="newsletter wow fadeInUp" data-wow-duration="900ms"  data-wow-delay="100ms">
                <div class="container">
                    <div class="col-xs-6 address">
                        <div class="col-xs-2"><i class="flaticon-placeholder"></i></div>
                        <div class="nws-txt no-padding">
                            <h5>Location : </h5>
                            <p>385 "Shubham" New Adarsh Colony near MR4 road,<br>
                                Jabalpur, (MP)</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-xs-6 phone-div">
                        <div class="col-xs-5">
                            <div class="col-xs-2"><i class="flaticon-technology"></i></div>
                            <div class="nws-txt no-padding">
                                <h5>Phone : </h5>
                                <p>0761-4031437, <br class="block-br">
                                    01 234 567 89</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-xs-6 pull-right">
                            <div class="col-xs-2"><i class="flaticon-email"></i></div>
                            <div class="nws-txt no-padding">
                                <h5>Mail Us : </h5>
                                <p><a href="mailto:contact@srgit.com">homemaker@gmail.com</a>, <br>
                                    <a href="mailto:contact@srgit.com">contact@srgit.com</a></p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="150ms">
                            <div class="foot-logo"> <img src="assets/imgs/footer-logo.png" alt="" class="img-fluid"/> </div>
                            <div class="foot-content">
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p class="no-margin">Follow us on:</p>
                                <ul class="no-margin no-padding foot-social">
                                    <?php
                                    $social_titles = Redux::get_option('hhc_redux_options', 'hhc_social_title');
                                    $social_icons = Redux::get_option('hhc_redux_options', 'hhc_social_icon');
                                    $social_urls = Redux::get_option('hhc_redux_options', 'hhc_social_url');
                                    ?>
                                    <?php if (!empty($social_titles)): ?>
                                        <?php $counter = 0; ?>
                                        <?php foreach ($social_titles as $title): ?>
                                            <?php if ($title): ?>
                                                <li>
                                                    <a href="<?php echo $social_urls[$counter] ?>" target="_blank" title="<?php echo $title ?>">
                                                        <i class="<?php echo $social_icons[$counter] ?>"></i>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php $counter++; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" >
                            <div class="foot-logo">
                                <h3 class="montserrat">Quick links</h3>
                            </div>
                            <?php
                            wp_nav_menu(array(
                                    'theme_location' => 'menu-quick-links',
                                    'menu_class' => 'no-margin no-padding quick-links',
                                    'container' => false
                                )
                            );
                            ?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="pull-left">
                        <p>© <?php echo date('Y') ?>. <?php bloginfo('name'); ?></p>
                    </div>
                    <div class="pull-right">
                        <p>Developed by <a href="https://skifftech.com" target="_blank">www.skifftech.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- footer-->
        </div>
        <!-- Scroll Top Button -->
        <a href="#top"></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
