<?php
/**
 * Home page what we do (v2) section
 */

$status = get_field('status_wwd2');
$section_name = get_field('section_name_wwd2');
$section_heading = get_field('section_heading_wwd2');
$section_sub_heading = get_field('section_sub_heading_wwd2');

?>

<?php if(!empty($status) && $status['value']): ?>
    <div class="content-section about-what-we-do">
        <div class="container">
            <?php
            if($section_name){
                echo '<h2 class="text-uppercase">'. $section_name .'</h2>';
            }
            ?>
            <div class="border-creative"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border-3.png" alt=""></div>
            <?php
            if($section_sub_heading){
                echo '<p>'. $section_sub_heading .'</p>';
            }
            ?>
            <div class="col-lg-12">
                <div class="row">
                    <?php
                    for($i = 1; $i <= 6; $i++){
                        $image = get_field('image_col_wwdtwo_'.$i);
                        $title = get_field('title_col_wwdtwo_'.$i);
                        $brief = get_field('brief_col_wwdtwo_'.$i);
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="services-icons">
                                <?php
                                if($image){
                                    echo '<div class="col-xs-2 no-padding"><img src="'. $image['url'] .'" alt="" class="img-fluid"></div>';
                                }
                                ?>
                                <div class="col-xs-10">
                                    <?php
                                    if($title){
                                        echo '<h4>'. $title .'</h4>';
                                    }

                                    if($brief){
                                        echo '<p>'. $brief .'</p>';
                                    }
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php endif; ?>

