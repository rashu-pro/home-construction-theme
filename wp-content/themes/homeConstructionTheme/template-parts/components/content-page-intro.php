<?php
/**
 * Page Intro Section
 */

$is_page_intro = get_field('enable_page_intro');
?>
<style>
    .page-intro-section{
        padding-top: 50px;
        padding-bottom: 50px;
        border-bottom: 1px solid #ddd;
        margin-bottom: 50px;
    }
</style>
<div class="page-intro-section">
    <div class="container">
        <div class="row">
            <?php if(trim(get_the_content())): ?>
                <div class="col-md-6">
                    <?php the_content() ?>
                </div>
            <?php endif; ?>

            <!-- feature image -->
            <?php
            if (has_post_thumbnail()) {
                ?>
                <div class="col-md-6">
                    <?php
                    the_post_thumbnail('full', ['class' => 'img-responsive']);
                    ?>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
</div>