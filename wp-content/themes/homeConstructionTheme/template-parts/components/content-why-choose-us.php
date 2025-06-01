<?php
/**
 * Component for why choose us
 */

$status = get_field('status_wcu');
$section_name = get_field('section_name_wcu');
$section_sub_heading = get_field('section_sub_heading_wcu');
$section_brief = get_field('section_brief_wcu');
$section_banner_left = get_field('section_banner_left_wcu');
$section_banner_overlay_text = get_field('overlay_text_section_banner_left_wcu');
?>

<?php
if(!empty($status) && $status['value'] == 1){
    ?>
    <div id="why-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 position-relative">
                    <div class="about-video-bg"
                         style="background-image: url('<?= $section_banner_left['url'] ?>')"></div>
                    <?php
                    if ($section_banner_overlay_text) {
                        echo '<h2 class="head-title-white">' . $section_banner_overlay_text . '</h2>';
                    }
                    ?>
                </div>

                <div class="col-md-6 col-sm-12">
                    <?php
                    if ($section_name) {
                        echo '<h1 class="head-title-black">' . $section_name . '</h1>';
                    }
                    if ($section_sub_heading) {
                        echo '<h2>' . $section_sub_heading . '</h2>';
                    }
                    if ($section_brief) {
                        echo '<p>' . $section_brief . '</p>';
                    }

                    for($i = 1; $i <= 3; $i++){
                        $icon = get_field('icon_class_info_wcu_'.$i);
                        $title = get_field('title_info_wcu_'.$i);
                        $brief = get_field('brief_info_wcu_'.$i);
                        ?>
                        <div class="wrapper">
                            <?php
                            if($icon){
                                echo '<i class="'.$icon.'"></i>';
                            }
                            if($title){
                                echo '<h3>'.$title.'</h3>';
                            }
                            if($brief){
                                echo '<p>'.$brief.'</p>';
                            }
                            ?>

                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
<?php
}
?>
