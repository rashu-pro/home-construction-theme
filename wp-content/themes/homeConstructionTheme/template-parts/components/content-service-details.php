<?php
/**
 * Component to show service details
 */

$is_features = get_field('hhc_services_show_features');
?>

    <style>
        /*8 .projects-section
    ---------------------------------------*/
        .img-hover-div {
            position: relative;
            width: 100%;
        }

        .img-hover {
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: rgba(25, 47, 115, 0.8);
            opacity: 0;
            padding: 26% 0 0 0;
            cursor: pointer
        }

        .img-hover-div:hover .img-hover {
            opacity: 1
        }

        .img-text h4 {
            color: #fff;
            font-size: 30px;
        }

        .img-text p {
            color: #fff;
            font-size: 13px;
            font-weight: 300;
            letter-spacing: 1px
        }

        .img-hover a {
            background: #f7be02;
            width: 45px;
            height: 45px;
            margin: 0 10px;
            color: #fff;
            display: inline-block;
            line-height: 45px;
            border-radius: 100%;
        }

        .img-hover a:hover {
            background: #fff;
            color: #2c2c2c
        }

        .mb-30 {
            margin-bottom: 30px;
        }
        .project-navigation .nav-links a{
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            background: #e1e1e1;
        }
        .section-main{
            padding: 30px 0;
        }
        @media (min-width: 992px){
            .section-main{
                padding: 50px 0;
            }
        }

        /*8 .projects-section
        ---------------------------------------*/
    </style>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- Content Section -->
        <div class="content-section about-page-section">
            <div class="container">
                <div class="project-details section-main">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <h1><?= the_title() ?></h1>
                            <p style="margin-top: 25px"><?= get_the_excerpt() ?></p>
                            <?php
                            the_content(
                                sprintf(
                                    wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'home-construction-theme'),
                                        array(
                                            'span' => array(
                                                'class' => array(),
                                            ),
                                        )
                                    ),
                                    wp_kses_post(get_the_title())
                                )
                            );
                            ?>

                            <?php if(($is_features && $is_features['value']) || $is_features === null): ?>
                                <div>
                                    <h2>Features</h2>
                                    <ul>
                                        <?php
                                        for($i = 1; $i <= 6; $i++){
                                            $feature = get_field('feature_hhc_service_'.$i);
                                            echo '<li>'.$feature.'</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="project-image">
                                <?php
                                echo get_the_post_thumbnail(get_the_ID(), 'full', array(
                                    'class' => 'img-fluid image-project'
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <hr/>

            <!-- Project Videos -->
            <?php
            $videos = rwmb_meta( 'video_x14dg8khzw' );
            if(!empty($videos)){
                ?>
                <div class="project-gallery content-section">
                    <div class="heading boder2 text-center">
                        <h2 class="text-center text-uppercase"><span class="orange-txt">Videos</span></h2>
                        <div class="border-creative text-center"><img
                                    src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt="">
                        </div>

                        <div class="container">
                            <div class="row mb-30">

                                <?php foreach ( $videos as $clone ) : ?>
                                            <?php foreach ( $clone as $video ) : ?>
                                                <div class="col-md-6">
                                                    <video style="max-width: 100%" src="<?php echo $video['src']; ?>">
                                                </div>
                                            <?php endforeach; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

            <!-- Project Gallery -->
            <?php
            $gallery_images = rwmb_meta( 'image_advanced_lwem7wozm9', [ 'size' => 'full' ] );
            if(!empty($gallery_images)){
                ?>
                <div class="project-gallery content-section">
                    <div class="heading boder2 text-center">
                        <h2 class="text-center text-uppercase"><span class="orange-txt">Gallery</span></h2>
                        <div class="border-creative text-center"><img
                                    src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt="">
                        </div>

                        <div class="container">
                            <div class="row mb-30">

                                <?php
                                foreach ($gallery_images as $image){
                                    ?>
                                    <div class="col-lg-3 col-md-4 mb-30">
                                        <div class="img-hover-div">
                                            <div class="img-hover position-absolute">
                                                <a data-fancybox="images" href="<?php echo $image['url'] ?>">
                                                    <i class="fa fa-expand" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="image-holder">
                                                <img src="<?php echo $image['url'] ?>"
                                                     alt="" title="" class="img-fluid w-100"></div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


            <div class='container'>
                <div class="project-navigation">
                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle ">' . esc_html__('< Previous:', 'home-construction-theme') . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'home-construction-theme') . '</span> <span class="nav-title">%title ></span>',
                        )
                    );
                    ?>
                </div>

            </div>

            <hr/>

            <?php get_template_part('template-parts/components/content', 'clients') ?>
        </div>
        <!--\\ Content Section -->
    </article>

<?php
// Enqueue only when this template part is included
wp_enqueue_style('fancybox-style', get_template_directory_uri() . "/assets/home/js/fancybox/jquery.fancybox.min.css", array());

wp_enqueue_script(
    'jquery-fancybox',
    get_template_directory_uri() . '/assets/home/js/fancybox/jquery.fancybox.min.js',
    array(),
    null,
    true
);
wp_enqueue_script(
    'custom-index',
    get_template_directory_uri() . '/assets/js/custom-index.js',
    array(),
    null,
    true
);

