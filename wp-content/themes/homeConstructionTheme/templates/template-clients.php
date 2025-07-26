<?php
/**
 * Template Name: Clients
 * Description: Template for clients listing page
 */

get_header();
?>
    <div class="inner-page">
        <?php get_template_part('template-parts/components/content', 'breadcrumb') ?>
        <?php get_template_part('template-parts/content', 'page-clients') ?>
    </div>
<?php
get_footer();
