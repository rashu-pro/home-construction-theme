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
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="150ms">
                            <div class="foot-logo"> <img src="assets/imgs/footer-logo.png" alt="" class="img-fluid"/> </div>
                            <div class="foot-content">
                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                <p class="no-margin">Follow us on:</p>
                                <ul class="no-margin no-padding foot-social">
                                    <li><a href="https://www.facebook.com/srgit/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/srgit" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://srgit.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                    <li><a href="https://www.instagram.com/srgit/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/srgit" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://plus.google.com/u/0/111241896454295946416"  target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://in.pinterest.com/srgit/"  target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="250ms" >
                            <div class="foot-logo">
                                <h3 class="montserrat">Quick links</h3>
                            </div>
                            <ul class="no-margin no-padding quick-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="projects.html">Projects</a></li>
                                <li><a href="blogs.html">Blogs</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms"  data-wow-delay="350ms">
                            <div class="foot-logo">
                                <h3 class="montserrat">Instagram feeds</h3>
                            </div>
                            <div class="feeds">
                                <!-- SnapWidget -->
                                <iframe src="https://snapwidget.com/embed/952888" class="snapwidget-widget snapwidget-1" allowtransparency="true"  scrolling="no"></iframe>
                                <!-- SnapWidget -->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeIn" data-wow-duration="900ms" data-wow-delay="450ms">
                            <div class="foot-logo">
                                <h3 class="montserrat">SIGN UP TO OUR NEWSLETTER</h3>
                            </div>
                            <form method="post" id="subsForm" class="footer-subscribe montserrat text-center" onSubmit="return ajaxmailsubscribe();">
                                <input type="hidden" name="from" value="index.html" />
                                <input type="email" name="subsemail" id="subsemail" placeholder="Enter your Email here" />
                                <input type="button" value="SUBSCRIBE" onClick="return ajaxmailsubscribe();"/>
                                <p>We never spam your email <span class="orange-txt">(*)</span> </p>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="pull-left">
                        <p>© 2021. Home Builder Construction Services</p>
                    </div>
                    <div class="pull-right">
                        <p>Designed & Developed by <a href="http://www.srgit.com/" target="_blank">SRGIT</a></p>
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
