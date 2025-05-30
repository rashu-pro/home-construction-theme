<?php
/**
 * Template Name: What We Do
 * Description: Template for who we are page
 */

get_header();
?>

    <div class="inner-page">
        <?php get_template_part('template-parts/components/content', 'breadcrumb') ?>
        <?php get_template_part('template-parts/content', 'page-what-we-do') ?>
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

<?php
get_footer();
