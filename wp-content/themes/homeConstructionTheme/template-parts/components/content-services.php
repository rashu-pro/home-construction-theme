<?php
/**
 * Our service template parts for home page
 */

$status = get_field('status_services');
$section_name = get_field('section_name_services');
$args = [
    'post_type' => 'hhc-our-services',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
    'meta_key' => 'order',
    'order' => 'ASC',
    'meta_query' => [
        'relation' => 'AND',
        [
            'key' => 'status',
            'value' => 1,
            'compare' => '='
        ],
        [
            'key' => 'service_show_in_homepage',
            'value' => 1,
            'compare' => '='
        ]
    ],
];
$services = get_posts($args);
?>
<style>
    .btn{
        display: inline-block;
        background: #ffd200;
        color: #000;
        padding: 10px 15px;
        margin-left: 15px;
        font-size: 15px;
    }
</style>

<?php if (!empty($status) && $status['value'] && !empty($services)): ?>
    <!-- Our Services Content Section -->
    <div class="content-section light-bg top-tabs">
        <div class="container">
            <h2 class="text-center text-uppercase"><?php echo $section_name ?></h2>
            <div class="border-creative text-center"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""/></div>
            <div class="tabs-left">
                <div class="col-xs-3 no-padding wow fadeInLeft" data-wow-duration="900ms" data-wow-delay="200ms">
                    <ul class="nav nav-tabs">
                        <?php $i = 0; ?>
                        <?php foreach ($services as $service): ?>
                            <?php
                            $active_class = '';
                            if ($i === 0) {
                                $active_class = 'active';
                            }
                            $title = $service->post_title;
                            $tab_icon_class = get_field('tab_icon_for_homepage', $service->ID)
                            ?>
                            <li class="nav-item"><a class="nav-link <?php echo $active_class ?>"
                                                    href="#tab-<?php echo $i ?>" data-toggle="tab"><span
                                            class="number-div"><i class="<?php echo $tab_icon_class ?>"></i></span><span
                                            class="tab-txt"><?php echo $title ?></span></a>
                            </li>

                            <?php $i++; ?>
                        <?php endforeach; ?>

                        <?php wp_reset_postdata() ?>
                    </ul>
                </div>
                <div class="col-xs-9 wow fadeInRight" data-wow-duration="900ms" data-wow-delay="400ms">
                    <div class="tab-content">
                        <?php $i = 0; ?>
                        <?php foreach ($services as $service): ?>
                            <?php
                            $active_class = '';
                            if ($i === 0) {
                                $active_class = 'active';
                            }
                            $title = $service->post_title;
                            $tab_details = get_field('tab_details', $service->ID);

                            ?>
                            <div class="tab-pane <?php echo $active_class ?>" id="tab-<?php echo $i ?>">
                                <div class="col-xs-6 no-padding">
                                    <?php
                                    echo get_the_post_thumbnail($service->ID, 'full', array(
                                        'class' => 'img-fluid',
                                    ));
                                    ?>
                                </div>
                                <div class="col-xs-6">
                                    <h3><?php echo $title ?></h3>
                                    <?php echo $tab_details ?>
                                    <div class="icon-listing">
                                        <ul class="no-margin no-padding">
                                            <?php
                                            $total_info = 3;
                                            for ($j = 1; $j <= $total_info; $j++) {
                                                ?>
                                                <li>
                                                    <?php
                                                    $title_info = get_field('title_info_' . $j, $service->ID);
                                                    $icon_info = get_field('icon_info_' . $j, $service->ID);
                                                    $details_info = get_field('details_info_' . $j, $service->ID);
                                                    ?>
                                                    <?php if ($icon_info): ?>
                                                        <div class="icon-cont"><i class="<?php echo $icon_info ?>"
                                                                                  aria-hidden="true"></i>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="icon-txt">
                                                        <?php if ($title_info): ?>
                                                            <p class="lead"><?php echo $title_info ?></p>
                                                        <?php endif; ?>
                                                        <?php if ($details_info): ?>
                                                            <?php echo $details_info ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /col -->

            <div class="text-center">
                <a href="<?php echo home_url('/services') ?>" class="btn">VIEW ALL SERVICES <i class="fa fa-long-arrow-right"
                                                                                                        aria-hidden="true"></i> </a>
            </div>

        </div>
    </div>
<?php endif; ?>

