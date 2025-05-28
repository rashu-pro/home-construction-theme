<?php
/**
 * Home page client section
 */

$section_name = get_field('section_name_clients_logo');
$section_sub_heading = get_field('section_sub_heading_clients_logo');
$status = get_field('status_clients_logo');
$args = [
    'post_type' => 'hhc-client',
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
$entries = get_posts($args);
?>
<style>
    .footer-logos .owl-item img {
        max-height: 70px;
    }
</style>

<?php
if (!empty($status) && $status['value']) {
    if (!empty($entries)) {
        ?>
        <!-- Our Clients -->
        <div class="footer-logos content-section">
            <div class="container">
                <h2 class="text-center text-uppercase"><?php echo $section_name ?></h2>
                <div class="border-creative text-center"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""/>
                </div>
                <?php if ($section_sub_heading): ?>
                    <p class="clients-para"><?php echo $section_sub_heading ?></p>
                <?php endif; ?>
                <div id="owl-demo" class="owl-carousel owl-theme owl-carousel-2">
                    <?php
                    foreach ($entries as $entry) {
                        $thumbnail_image = get_the_post_thumbnail($entry->ID, 'medium', array());
                        ?>
                        <div class="item">
                            <?php echo $thumbnail_image ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- \\Our Client -->
        <?php
    }
}

// Enqueue only when this template part is included
wp_enqueue_script(
    'owl-carousel-staff',
    get_template_directory_uri() . '/assets/js/owlcarousel/owl.carousel.staff.js',
    array(),
    null,
    true
);

