<?php
/**
 * Page for image grid listing
 */
?>
<?php
$chosen_post_type = get_field('post_type_slug') ?: 'post';
?>
<div class="inner-page content-section">
    <?php get_template_part('template-parts/components/content', 'image-grid-listing', [
        'post_type'   => $chosen_post_type,
        'meta_key'    => 'status',
        'meta_value'  => 1,
        'orderby'     => 'meta_value_num',
        'order'       => 'ASC',
        'columns'     => 'col-sm-4 col-xs-6',
        'fancybox'    => true
    ]) ?>
</div>