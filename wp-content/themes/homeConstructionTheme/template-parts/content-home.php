<?php
/**
 * Page for home page content
 */
?>

<div class="home-page">
    <?php get_template_part('template-parts/components/content', 'hero-slider') ?>
    <?php get_template_part('template-parts/components/content', 'what-we-do') ?>
    <?php get_template_part('template-parts/components/content', 'services') ?>
    <?php get_template_part('template-parts/components/content', 'projects') ?>
    <?php get_template_part('template-parts/components/content', 'staffs') ?>
    <?php get_template_part('template-parts/components/content', 'counter') ?>
    <?php get_template_part('template-parts/components/content', 'testimonials') ?>
    <?php get_template_part('template-parts/components/content', 'clients') ?>
</div>

<?php
// Enqueue only when this template part is included
wp_enqueue_script(
    'custom-index',
    get_template_directory_uri() . '/assets/js/custom-index.js',
    array(),
    null,
    true
);
?>

