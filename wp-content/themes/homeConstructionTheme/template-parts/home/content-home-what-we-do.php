<?php
/**
 * Home page what we do section
 */

$section_name = get_field('section_name');
$section_heading = get_field('section_heading');
$section_details = get_field('section_details');
$section_banner = get_field('section_banner');
$status = get_field('status');
?>

<?php if($status['value']): ?>
    <!-- Content Section -->
    <div class="content-section about-section about-home" id="about"><span id="main-content"
                                                                           class="hotspot hotspot-subscribe"></span>
        <div class="container">
            <h2 class="text-center text-uppercase"><?php echo $section_name ?></h2>
            <div class="border-creative text-center"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""/></div>
            <div class="col-xs-8">
                <div class="col-xs-5 text-uppercase fancy-txt montserrat wow fadeInLeft" data-wow-duration="900ms"
                     data-wow-delay="200ms"><?php echo $section_heading ?>
                </div>
                <div class="col-xs-7 top-txt wow fadeIn" data-wow-duration="900ms" data-wow-delay="400ms">
                    <?php echo $section_details ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 no-padding wow fadeInRight" data-wow-duration="900ms" data-wow-delay="600ms"><img
                        src="<?php echo $section_banner['url'] ?>" alt="<?php echo $section_heading ?>"
                        class="img-responsive home-abt"/></div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php endif; ?>

