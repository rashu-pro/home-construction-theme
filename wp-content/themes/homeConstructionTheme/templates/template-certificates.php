<?php
/**
 * Template Name: Certificates
 * Description: Template for clients listing page
 */

get_header();
?>
    <div class="inner-page">
        <?php get_template_part('template-parts/components/content', 'breadcrumb') ?>
        <?php get_template_part('template-parts/content', 'page-certificates') ?>
    </div>
<?php
get_footer();
