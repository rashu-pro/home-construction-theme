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
    <style>
        .hero-slider .carousel-indicators{
            bottom: 15%;
        }
        .hero-slider-item {
            height:84vh;
            min-height:300px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .owl-carousel-hero-slider .owl-nav{
            display: none;
        }
        .owl-carousel .owl-dots.disabled, .owl-carousel .owl-nav.disabled{
            display: none!important;
        }
        .owl-carousel.owl-carousel-hero-slider .owl-dots{
            position: absolute;
            left: 50%;
            transform: translateY(-50%);
            bottom: 2%;
        }
        .carousel-caption h1{
            margin-bottom: 50px;
        }
        @media (max-width: 1199px){
            .hero-slider-item{
                height: auto;
            }
            .hero-slider-item video{
                position: absolute;
                height: 100%;
            }
        }
        @media (max-width: 767px){
            .carousel-caption h1{
                display: block;
                font-size: 18px;
                line-height: 1.4;
                font-weight: 600;
            }
            .carousel-caption h2 {
                font-size: 17px;
                line-height: 1.4;
                font-weight: 500;
                margin-top: 15px;
            }
        }
    </style>

    <div id="owl-carousel-hero-slider" class="owl-carousel owl-theme owl-carousel-hero-slider">
        <?php $i = 0; ?>
        <?php foreach ($sliders as $slider): ?>
            <?php
            $heading = get_field('slider_heading', $slider->ID);
            $subheading = get_field('slider_subheading', $slider->ID);
            $link = get_field('link', $slider->ID);
            $link_name = get_field('link_name', $slider->ID);
            $featured_img_url = get_the_post_thumbnail_url($slider->ID, 'full');
            $video = get_field('slider_video', $slider->ID);

            if (empty($link_name)) $link_name = 'Learn More';
            ?>
            <div class="item hero-slider-item"
                 style="<?php if (empty($video)) echo "background-image: url('$featured_img_url')" ?>">
                <div class="pattern"></div>
                <?php if ($video && $video['url']): ?>
                    <video controls muted width="100%">
                        <source src="<?php echo $video['url'] ?>" type="video/<?php echo $video['subtype'] ?>"/>
                        Your browser does not support HTML5 video.
                    </video>
                <?php endif; ?>
                <?php if ($heading || $subheading || $link): ?>
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
                <?php endif; ?>

            </div>
            <?php $i++; ?>
        <?php endforeach; ?>
    </div>

    <?php

    add_action('wp_footer', 'hhc_slider_video_control_script', 100);
    function hhc_slider_video_control_script() {
        ?>
        <script>
            let heroSlider = $('#owl-carousel-hero-slider');
            const autoPlayTimeout = 5000;
            heroSlider.owlCarousel({
                dots: true,
                loop: true,
                nav: false,
                margin: 15,
                autoplay: true,
                autoplayTimeout: autoPlayTimeout,
                responsiveClass: true,
                items: 1,
                onInitialized: function(event) {
                    let currentSlide = $(event.target).find('.owl-item').eq(event.item.index);
                    let video = currentSlide.find('video');
                    if(!video.length){
                        heroSlider.trigger('play.owl.autoplay', [autoPlayTimeout]);
                        return;
                    }

                    // Pause autoplay
                    heroSlider.trigger('stop.owl.autoplay');

                    // Play the video from beginning
                    video[0].currentTime = 0;
                    video[0].play();

                    // Resume autoplay after video ends
                    video.off('ended').on('ended', function () {
                        heroSlider.trigger('play.owl.autoplay', [autoPlayTimeout]);
                        heroSlider.trigger('next.owl.carousel');
                    });
                }
            })

            heroSlider.on('changed.owl.carousel', function(event) {
                let currentSlide = $(event.target).find('.owl-item').eq(event.item.index);
                let video = currentSlide.find('video');
                if(!video.length){
                    heroSlider.trigger('play.owl.autoplay', [autoPlayTimeout]);
                    return;
                }

                // Pause autoplay
                heroSlider.trigger('stop.owl.autoplay');

                // Play the video from beginning
                video[0].currentTime = 0;
                video[0].play();

                // Resume autoplay after video ends
                video.off('ended').on('ended', function () {
                    heroSlider.trigger('play.owl.autoplay', [autoPlayTimeout]);
                    heroSlider.trigger('next.owl.carousel');
                });
            });
        </script>
        <?php
    }

endif;
