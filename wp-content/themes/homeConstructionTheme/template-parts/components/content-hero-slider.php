<?php
/**
 * Home slider template parts
 */

$slider_category = 'hero-slider';
$args = [
    'post_type' => 'hhc-slider',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
    'meta_key' => 'order',
    'order' => 'ASC',
    'meta_query' => [
        [
            'key' => 'status',
            'value' => 1,
            'compare' => '='
        ]
    ],
    'tax_query' => [
        [
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $slider_category
        ]
    ]
];

$sliders = get_posts($args);
?>

<?php if (!empty($sliders)): ?>
    <!-- Main Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="bottom-twt">
            <div class="container pos-relative">
                <div class="col-xs-12 text-center">
                    <div class="news-letter-top text-center" style="position:relative; display: inline-block;"><a
                                class="scrollup" href="<?php echo site_url() ?>/contact-us"> CONTACT US
                            <div class="clearfix"></div>
                            <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="scroll-dwn"><a class="page-scroll dwn" href="#about"> <img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/scroll-dwn.png" class="arrow bounce"
                        alt=""/></a></div>
        <div class="carousel-indicators">
            <?php $i = 0; ?>
            <?php foreach ($sliders as $slider): ?>
                <?php $active_class = $i === 0 ? 'active' : '' ?>
                <?php $aria_current = $i === 0 ? 'aria-current="true"' : '' ?>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>"
                        class="<?php echo $active_class ?>"
                    <?php echo $aria_current ?> ></button>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php $i = 0; ?>
            <?php foreach ($sliders as $slider): ?>
                <?php
                $heading = get_field('slider_heading', $slider->ID);
                $subheading = get_field('slider_subheading', $slider->ID);
                $link = get_field('link', $slider->ID);
                $link_name = get_field('link_name', $slider->ID);
                $featured_img_url = get_the_post_thumbnail_url($slider->ID, 'full');

                if (empty($link_name)) $link_name = 'Learn More';
                ?>
                <?php $active_class = $i === 0 ? 'active' : '' ?>
                <div class="carousel-item <?php echo $active_class ?>"
                     style="background-image: url('<?php echo $featured_img_url ?>')">
                    <div class="pattern"></div>
                    <div class="carousel-caption">
                        <?php if ($subheading): ?>
                            <h2><?php echo $subheading ?></h2>
                        <?php endif; ?>
                        <?php if ($heading): ?>
                            <h1><?php echo $heading ?></h1>
                        <?php endif; ?>
                        <?php if ($link): ?>
                            <a href="<?php echo $link ?>" class="btn-creative"><?php echo $link_name ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    // Enqueue only when this template part is included
    wp_enqueue_script(
        'home-slider-script',
        get_template_directory_uri() . '/assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );

endif;
