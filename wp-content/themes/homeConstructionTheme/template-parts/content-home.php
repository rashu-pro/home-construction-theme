<?php
/**
 * Page for home page content
 */

$section_services_status = get_field('status_services');
?>

<div class="home-page">
    <?php get_template_part('template-parts/home/content', 'hero-slider') ?>
    <?php get_template_part('template-parts/home/content', 'home-what-we-do') ?>
    <?php if($section_services_status['value']): ?>
        <?php get_template_part('template-parts/home/content', 'home-our-services') ?>
    <?php endif; ?>
    <?php get_template_part('template-parts/home/content', 'home-projects') ?>
    <?php get_template_part('template-parts/home/content', 'home-staff') ?>
    <?php get_template_part('template-parts/home/content', 'home-counter') ?>
    <?php get_template_part('template-parts/home/content', 'home-testimonial') ?>
    <?php get_template_part('template-parts/home/content', 'home-clients') ?>
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

