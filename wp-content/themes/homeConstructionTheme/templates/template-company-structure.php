<?php
/**
 * Template Name: Company Structure
 * Description: Template for company structure page
 */

get_header();
?>
    <div class="inner-page">
        <?php get_template_part('template-parts/components/content', 'breadcrumb') ?>
        <?php get_template_part('template-parts/content', 'page-company-structure') ?>
    </div>
<?php
get_footer();
