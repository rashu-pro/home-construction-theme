<?php
/**
 * Services intro section
 */

$status = get_field('status_services_intro');
$section_name = get_field('section_name_services_intro');
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
    <div class="content-section services-main">
        <h2 class="text-center text-uppercase"><?php echo $section_name ?></span></h2>
        <div class="border-creative text-center"><img
                    src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""></div>
        <div class="container">
            <div class="row" id="what-we-do">
                <?php foreach ($posts as $post){
                    $permalink = get_permalink($post->ID);
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <a href="<?php echo $permalink ?: 'javascript:void(0)' ?>">
                            <?php
                            $icon = get_field('column_icon_for_services_page', $post->ID);
                            $title = $post->post_title;
                            $excerpt = $post->post_excerpt;
                            if ($icon) {
                                echo '<i class="' . $icon . '"></i>';
                            }
                            if ($title) {
                                echo '<h3>' . $title . '</h3>';
                            }
                            if ($excerpt) {
                                echo '<p>' . $excerpt . '</p>';
                            }
                            ?>
                        </a>

                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
wp_reset_postdata();

