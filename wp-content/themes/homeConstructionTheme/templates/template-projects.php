<?php
/**
 * Template Name: Projects
 * Description: Template for projects page
 */

get_header();
?>

    <div class="inner-page">
        <?php get_template_part('template-parts/content', 'breadcrumb') ?>
        <?php get_template_part('template-parts/content', 'page-projects') ?>
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
