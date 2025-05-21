<?php
/**
 * Page for home page content
 */
?>

<div class="home-page">
    <?php get_template_part('template-parts/home/content', 'hero-slider') ?>
    <?php get_template_part('template-parts/home/content', 'home-what-we-do') ?>
    <?php get_template_part('template-parts/home/content', 'home-our-services') ?>
    <?php get_template_part('template-parts/home/content', 'home-projects') ?>
    <?php get_template_part('template-parts/home/content', 'home-staff') ?>
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

