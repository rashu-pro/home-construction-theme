<?php
/**
 * Clients listing section
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
    .client-box {
        height: 160px; /* Adjust as needed */
        padding: 15px;
        margin-bottom: 30px;
        background-color: #fff;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        border: 1px solid #ddd;
        border-radius: 8px;
        transition: box-shadow 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .client-box img {
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
                    $thumbnail_image = get_the_post_thumbnail($entry->ID, 'medium', array('class' => 'img-responsive'));
                ?>
                    <div class="col-sm-3 col-xs-6">
                        <div class="client-box text-center">
                            <?php echo $thumbnail_image; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- \\Our Clients -->
    <?php wp_reset_postdata(); ?>
<?php endif; ?>


