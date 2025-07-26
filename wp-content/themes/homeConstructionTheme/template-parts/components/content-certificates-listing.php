<?php
/**
 * Certificate listing section
 */
$args = [
    'post_type' => 'hhc-certificate',
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
    .certificate-box {
        height: 100%;
        padding: 15px;
        margin-bottom: 30px;
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        border: 2px solid #0f356a;
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
    <!-- Our Clients -->
    <div class="content-section">
        <div class="container">
            <div class="row">
                <?php foreach ($entries as $entry) :
                    $thumbnail_image = get_the_post_thumbnail($entry->ID, 'full', array('class' => 'img-responsive'));
                    $entry_thumb_url = get_the_post_thumbnail_url($entry->ID, 'full');
                ?>
                    <div class="col-sm-4 col-xs-6">
                        <div class="certificate-box text-center">
                            <a data-fancybox="gallery-<?php echo $entry->ID ?>" href="<?php echo $entry_thumb_url ?>" title="">
                                <?php echo $thumbnail_image; ?>
                            </a>
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
// Enqueue only when this template part is included
wp_enqueue_style('fancybox-style', get_template_directory_uri() . "/assets/home/js/fancybox/jquery.fancybox.min.css", array());

wp_enqueue_script(
    'jquery-fancybox',
    get_template_directory_uri() . '/assets/home/js/fancybox/jquery.fancybox.min.js',
    array(),
    null,
    true
);


