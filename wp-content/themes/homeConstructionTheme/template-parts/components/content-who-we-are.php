<?php
/**
 * Component for who we are
 */

$status = get_field('status_wwa');
$section_name = get_field('section_name_wwa');
$banner_left_column = get_field('banner_left_col_wwa');
$brief_left_column = get_field('brief_left_col_wwa');
$icon_heading_column = get_field('heading_column_icon_class_wwa');
$title_heading_column = get_field('heading_column_title_wwa');
$title_column_2_right_column = get_field('column_title_wwa_2');
$title_column_3_right_column = get_field('column_title_wwa_3');
$text_column_2_right_column = get_field('column_text_wwa_2');
$text_column_3_right_column = get_field('column_text_wwa_3');
$banner_1_right_column = get_field('banner_right_column_wwa_1');
$banner_2_right_column = get_field('banner_right_column_wwa_2');
?>

<?php
if (!empty($status) && $status['value']) {
    ?>
    <div class="content-section about-page-section">
        <div class="container">
            <?php if ($section_name): ?>
                <h2 class="text-center text-uppercase"> <?php echo $section_name ?> </h2>
            <?php endif; ?>
            <div class="border-creative text-center"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""></div>
            <div class="col-lg-6 col-md-12">
                <div class="img-container">
                    <?php
                    if ($banner_left_column) {
                        echo '<img src="' . $banner_left_column['url'] . '" class="img-fluid" />';
                    }

                    if ($brief_left_column) {
                        echo '<p>' . $brief_left_column . '</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 no-padding">
                <ul class="about-sec-time no-padding no-margin">
                    <li class="display-cell text-center">
                        <?php
                        if ($icon_heading_column) {
                            echo '<i class="' . $icon_heading_column . '" aria-hidden="true"></i>';
                        }

                        if ($title_heading_column) {
                            echo '<span class="clearfix"> </span> <span class="montserrat">' . $title_heading_column . '</span>';
                        }
                        ?>
                    </li>
                    <li class="display-cell text-center">
                        <?php
                        if ($title_column_2_right_column) {
                            echo $title_column_2_right_column . '<br>';
                        }

                        if ($text_column_2_right_column) {
                            echo '<span class="orange-txt">' . $text_column_2_right_column . '</span>';
                        }
                        ?>
                    </li>
                    <li class="display-cell text-center">
                        <?php
                        if ($title_column_3_right_column) {
                            echo $title_column_3_right_column . '<br>';
                        }

                        if ($text_column_3_right_column) {
                            echo '<span class="orange-txt">' . $text_column_3_right_column . '</span>';
                        }
                        ?>
                    </li>

                </ul>
                <div class="two-imgs">
                    <?php
                    if ($banner_1_right_column) {
                        echo '<div class="col-xs-6 no-padding-left"><img src="' . $banner_1_right_column['url'] . '" class="img-fluid" alt=""></div>';
                    }

                    if ($banner_2_right_column) {
                        echo '<div class="col-xs-6 no-padding-right"><img src="' . $banner_2_right_column['url'] . '" class="img-fluid" alt=""></div>';
                    }
                    ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php
}
?>
