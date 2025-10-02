<?php
/**
 * Counter section for homepage
 */

$status = get_field('status_counter');
?>

<?php if (!empty($status) && $status['value']): ?>

    <!--counter -->
    <div class="content-section counter-section text-center">
        <div class="pattern-2"></div>
        <div class="container">
            <?php
            $total_counter_block = 4;
            for ($i = 0; $i < 4; $i++):
                $counter_value = get_field('counter_value_' . ($i + 1));
                $counter_icon = get_field('counter_icon_' . ($i + 1));
                $counter_label = get_field('counter_label_' . ($i + 1));
                ?>
                <?php if (!$counter_value) continue; ?>
                <div class="col-xs-3">
                    <div class="counter-div">
                        <div class="stats-2-img"><i class="<?php echo $counter_icon ?>" aria-hidden="true"></i></div>
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?php echo $counter_value ?>'
                             data-delay='.5' data-increment="1"><?php echo $counter_value ?>
                        </div>
                        <p class="montserrat"><?php echo $counter_label ?></p>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--\\ counter-->

    <?php
    wp_enqueue_script(
        'counter-js',
        get_template_directory_uri() . '/assets/js/numscroller-1.0.js',
        array(),
        null,
        true
    );
    ?>
<?php endif; ?>



