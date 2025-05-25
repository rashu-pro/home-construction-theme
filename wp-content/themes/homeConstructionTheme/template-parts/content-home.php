<?php
/**
 * Page for home page content
 */

$section_services_status = get_field('status_services');
?>

<div class="home-page">
    <?php get_template_part('template-parts/home/content', 'hero-slider') ?>
    <?php get_template_part('template-parts/content', 'what-we-do') ?>
    <?php get_template_part('template-parts/content', 'services') ?>
    <?php get_template_part('template-parts/content', 'projects') ?>
    <?php get_template_part('template-parts/content', 'staffs') ?>
    <?php get_template_part('template-parts/content', 'counter') ?>
    <?php get_template_part('template-parts/content', 'testimonials') ?>
    <?php get_template_part('template-parts/content', 'clients') ?>
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

