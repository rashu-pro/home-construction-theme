<?php
/**
 * Page Breadcrumb Section
 */

$status = get_field('status_page_breadcrumb');
$title = get_the_title();
$words = explode(' ', $title);
$last_word = array_pop($words);
$first_part = implode(' ', $words);
?>

<style>
    .inner-header{
        padding: 30px 0;
        height: auto;
    }
    @media (min-width: 992px){
        .inner-header{
            padding: 50px 0;
        }
    }
</style>

<!-- Breadcrumb -->
<div class="inner-header">
    <div class="pattern"></div>
    <div class="display-cell">
        <div class="container">
            <div class="col-xs-12 text-left">
                <div class="home-builder-page-title">
                    <h1><?php echo $first_part ?></h1>
                    <h1 class="titlecolor"><?php echo $last_word ?></h1>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/linew.png" alt="">
                    <?php custom_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--\\ Breadcrumb -->