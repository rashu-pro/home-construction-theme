<?php
/**
 * Common Grid Template
 *
 * Usage:
 * get_template_part('template-parts/common-post-grid', null, [
 *     'post_type' => 'hhc-certificate',
 *     'meta_key' => 'order',
 *     'meta_value' => 1,
 *     'columns' => 'col-sm-4 col-xs-6',
 *     'fancybox' => true
 * ]);
 */

$args = [
    'post_type'      => $args['post_type'] ?? 'post',
    'posts_per_page' => $args['posts_per_page'] ?? -1,
    'orderby'        => $args['orderby'] ?? 'date',
    'order'          => $args['order'] ?? 'DESC',
];

// Add meta_key if provided
if (!empty($args['meta_key'])) {
    $args['meta_key'] = $args['meta_key'];
}

// Add meta_query if provided
if (!empty($args['meta_value'])) {
    $args['meta_query'] = [
        [
            'key'     => $args['meta_key'],
            'value'   => $args['meta_value'],
            'compare' => $args['compare'] ?? '='
        ]
    ];
}

$entries = get_posts($args);

$columns  = $args['columns'] ?? 'col-md-3 col-sm-6';
$fancybox = $args['fancybox'] ?? false;
$fancybox = true;
?>
<style>
    .image-box {
        height: 100%;
        padding: 15px;
        margin-bottom: 30px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        border: 1px solid #ddd;
        /*border: 2px solid #0f356a;*/
        transition: box-shadow 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .certificate-box img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
    }

</style>

<?php
if (!empty($entries)) : ?>
    <!-- Image Grid -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <?php foreach ($entries as $entry) :
                    $thumbnail_image = get_the_post_thumbnail($entry->ID, 'full', array('class' => 'img-responsive'));
                    $entry_thumb_url = get_the_post_thumbnail_url($entry->ID, 'full');
                    if($fancybox){
                        $thumbnail_image = '<a data-fancybox="gallery-'.$entry->ID.'" href="'.$entry_thumb_url.'" title="">'.$thumbnail_image.'</a>';
                    }
                ?>
                    <div class="<?= $columns ?>">
                        <div class="image-box text-center">
                            <?= $thumbnail_image; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- \\Our Clients -->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php
if($fancybox){
    // Enqueue only when this template part is included
    wp_enqueue_style('fancybox-style', get_template_directory_uri() . "/assets/home/js/fancybox/jquery.fancybox.min.css", array());

    wp_enqueue_script(
        'jquery-fancybox',
        get_template_directory_uri() . '/assets/home/js/fancybox/jquery.fancybox.min.js',
        array(),
        null,
        true
    );
}


