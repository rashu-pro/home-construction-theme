<?php
/**
 * Template Name: Image Grid (3)
 * Description: 3 column image grid template
 */

get_header();

$is_page_intro = get_field('enable_page_intro');
?>
    <div class="inner-page">
        <?php get_template_part('template-parts/components/content', 'breadcrumb') ?>
        <?php if($is_page_intro && $is_page_intro['value']): ?>
            <?php get_template_part('template-parts/components/content', 'page-intro') ?>
        <?php endif; ?>
        <?php get_template_part('template-parts/content', 'page-image-grid-3') ?>
    </div>
<?php
get_footer();
