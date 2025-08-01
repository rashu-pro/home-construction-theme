<?php
/**
 * Home page staff section
 */

$section_name = get_field('section_name_staffs');
$status = get_field('status_staffs');
$args = [
    'post_type' => 'hhc-staff',
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
$entries = get_posts($args)
?>

<?php if (!empty($status) && $status['value']): ?>
    <?php if (!empty($entries)): ?>
        <!--staff -->
        <div class="content-section light-bg staff-section">
            <div class="container">
                <h2 class="text-center text-uppercase"><?php echo $section_name ?></h2>
                <div class="border-creative text-center"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""/>
                </div>
                <div id="owl-demo" class="owl-carousel owl-carousel-3 owl-theme wow fadeIn owl-loaded owl-drag"
                     data-wow-duration="900ms" data-wow-delay="250ms">
                    <?php foreach ($entries as $entry): ?>
                        <?php
                        $staff_name = $entry->post_title;
                        $terms = get_the_terms($entry->ID, 'designation');
                        $staff_designation = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '';
                        $staff_fb = get_field('facebook_link', $entry->ID);
                        $staff_twitter = get_field('twitter_link', $entry->ID);
                        $staff_ig = get_field('instagram_link', $entry->ID);
                        $staff_ln = get_field('linkedin_link', $entry->ID);
                        $staff_profile_picture = get_the_post_thumbnail_url($entry->ID);
                        ?>
                        <div class="item">
                            <div class="">
                                <?php if ($staff_profile_picture): ?>
                                    <div class="hexagon hexagon1">
                                        <div class="hexagon-in1">
                                            <div class="hexagon-in2" style="background:url(<?php echo $staff_profile_picture ?>) no-repeat;"></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="staff-desc text-center"
                                     <?php if(!$staff_profile_picture): ?>
                                     style="padding-top: 20px;"
                                     <?php endif; ?>
                                >
                                    <h5><?php echo $staff_name ?></h5>
                                    <?php if ($staff_designation): ?>
                                        <p><?php echo $staff_designation ?></p>
                                    <?php endif; ?>
                                    <div class="bottom-staff">
                                        <ul class="no-margin no-padding">
                                            <?php if ($staff_fb): ?>
                                                <li><a href="<?php echo $staff_fb['url'] ?>"
                                                       target="<?php echo $staff_fb['target'] ?>"><i
                                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <?php endif; ?>
                                            <?php if ($staff_twitter): ?>
                                                <li><a href="<?php echo $staff_twitter['url'] ?>"
                                                       target="<?php echo $staff_twitter['target'] ?>"><i
                                                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <?php endif; ?>
                                            <?php if ($staff_ig): ?>
                                                <li><a href="<?php echo $staff_ig['url'] ?>"
                                                       target="<?php echo $staff_ig['target'] ?>"><i
                                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <?php endif; ?>
                                            <?php if ($staff_ln): ?>
                                                <li><a href="<?php echo $staff_ln['url'] ?>"
                                                       target="<?php echo $staff_ln['target'] ?>"><i
                                                                class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <?php endif; ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="clearfix"></div>
                <!-- /col -->
            </div>
        </div>
        <!--\\ staff -->
        <?php
        wp_reset_postdata();
        ?>

        <?php
        // Enqueue only when this template part is included
        wp_enqueue_script(
            'owl-carousel-staff',
            get_template_directory_uri() . '/assets/js/owlcarousel/owl.carousel.staff.js',
            array(),
            null,
            true
        );
        ?>
    <?php endif; ?>

<?php endif; ?>
