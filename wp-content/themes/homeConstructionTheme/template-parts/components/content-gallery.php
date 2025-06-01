<?php
/**
 * Gallery component
 */

$args = [
    'post_type' => 'hhc-project',
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
    .project-gallery .blog-in{
        padding: 10px;
        margin-bottom: 0;
    }
    .project-gallery .blog-in h2{
        font-size: 16px;
        font-weight: 600;
        line-height: 1.45;
    }
    .project-gallery .prtfl-bx{
        margin-bottom: 10px;
    }
    .project-gallery .prtfl-bx:before{
        background-color: #0a0a0a29;
    }
    .project-gallery .prtfl-bx img{
        height: auto;
    }
    .grid-item {
        padding: 0 5px;
        /*height: 270px;*/
        position: relative;
        margin-bottom: 10px;
        width: 50%;
    }
    @media (min-width: 992px) {
        .grid-item {
            width: 25%;
        }
    }
</style>

<div class="project-gallery content-section">
    <div class="heading boder2 text-center">
        <h2 class="text-center text-uppercase">Photo <span class="orange-txt">Galleries</span></h2>
        <div class="border-creative text-center"><img
                src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt="">
        </div>

        <?php
        if(!empty($entries)){
            ?>
            <div class="container">
                <div class="mb-30 grid-masonary">
                    <?php
                    foreach ($entries as $entry){
                        $gallery_images = rwmb_meta( 'image_advanced_lwem7wozm9', [ 'size' => 'full' ], $entry->ID);
                        $entry_thumb = get_the_post_thumbnail($entry->ID, 'medium', array());
                        $entry_thumb_url = get_the_post_thumbnail_url($entry->ID, 'full');
                        $total_images = 1 + count($gallery_images);
                        ?>
                        <div class="grid-item">
                            <div class="blog-in">
                                <div class="prtfl-bx text-center">
                                    <?php echo $entry_thumb ?>
                                    <div class="prtfl-inf">
                                        <div class="prtfl-inf-btns">
                                            <a data-fancybox="gallery-<?php echo $entry->ID ?>" href="<?php echo $entry_thumb_url ?>" title=""><i class="fa fa-search"></i></a>
                                            <?php
                                            foreach ($gallery_images as $gallery_image){
                                                ?>
                                                <a style="display: none" data-fancybox="gallery-<?php echo $entry->ID ?>" href="<?php echo $gallery_image['url'] ?>" title=""><i class="fa fa-search"></i></a>
                                                    <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <h2><?php echo $entry->post_title ?></h2>
                                <p>(<?php echo $total_images ?> photo<?php if($total_images>1) echo 's' ?>)</p>
                            </div>
                        </div>
                            <?php
                    }

                    wp_reset_postdata();
                    ?>

                </div>
            </div>
                <?php
        }
        ?>

    </div>
</div>

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
    'isotope-js',
    'https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.js',
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
