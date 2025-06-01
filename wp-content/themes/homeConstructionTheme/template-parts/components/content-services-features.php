<?php
/**
 * Services intro section
 */

$status = get_field('status_services_features');
$section_name = get_field('section_name_services_features');
$section_tag = get_field('tag_services_features');
$section_sub_heading = get_field('section_sub_heading_services_features');
$cta_button = get_field('cta_button_services_features');
$args = [
    'post_type' => 'hhc-our-services',
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
];
$posts = get_posts($args);
?>

<style>
    .services-main a:hover p {
        color: #000;
    }
</style>

<?php if (!empty($status) && $status['value'] == 1): ?>
    <div>
        <div class="spacing top-spac90 bottom-spac80">
            <div class="fixed-bg" style="background:url(<?= get_template_directory_uri() ?>/assets/imgs/backgrounds/counter-bg-2.jpg);"></div>
            <div id="prtcl1" class="particle-bx"></div>
            <div class="container">
                <div class="choose-plan-wrap">
                    <div class="row text-light">
                        <div class="col-md-12 col-sm-12 col-lg-8">
                            <?php if(!empty($posts)): ?>
                                <div class="choose-car overlap150 overlap-160 owl-carousel owl-carousel-4 nav-vc">
                                    <?php
                                    foreach ($posts as $post){
                                        $icon = get_field('column_icon_for_services_page', $post->ID);
                                        $title = $post->post_title;
                                        $available_time = get_field('available_time_hhc_service');
                                        $permalink = get_permalink($post->ID);
                                        ?>
                                        <div class="plan-bx text-center">
                                            <div class="plan-hdr">
                                                <?php
                                                if($icon){
                                                    echo '<i class="'.$icon.'"></i>';
                                                }
                                                if($title){
                                                    echo '<h6>'.$title.'</h6>';
                                                }
                                                if($available_time){
                                                    echo '<span><sup>'.$available_time.'</sup></span>';
                                                }
                                                ?>
                                            </div>
                                            <div class="plan-bdy">
                                                <ul class="pln-fctr-lst">
                                                    <?php
                                                    for($i = 1; $i <= 6; $i++){
                                                        $feature = get_field('feature_hhc_service_'.$i);
                                                        if($feature){
                                                            echo '<li>'.$feature.'</li>';
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <?php
                                            if($permalink){
                                                echo '<a class="theme-btn hrz brd-rd3" href="'.$permalink.'" title="" >Read More</a>';
                                            }
                                            ?>

                                        </div>
                                            <?php
                                    }
                                    ?>
                                </div>
                                <!-- Choose Carousel -->
                            <?php endif; ?>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="sec-tile pt-40">
                                <?php
                                if($section_tag){
                                    echo '<i class="text-uppercase">'.$section_tag.'</i>';
                                }
                                if($section_name){
                                    echo '<h2 class="mb-15 font-30">'.$section_name.'</h2>';
                                }
                                if($section_sub_heading){
                                    echo '<p  class="mb-15 font-18">'.$section_sub_heading.'</p>';
                                }
                                if($cta_button){
                                    echo '<a class="theme-btn mt-10 text-uppercase" href="'.$cta_button['url'].'" target="'.$cta_button['target'].'">'.$cta_button['title'].'</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Choose Plan Wrap -->
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
wp_reset_postdata();

// Enqueue only when this template part is included
wp_enqueue_script(
    'custom-service-features',
    get_template_directory_uri() . '/assets/js/custom-services.js',
    array(),
    null,
    true
);

