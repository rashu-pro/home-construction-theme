<?php
/**
 * Template Name: Home
 * Description: Template for home page
 */

get_header();
?>

<div class="home-page">
    <?php get_template_part('template-parts/content', 'home') ?>
</div>

<?php
get_footer();
