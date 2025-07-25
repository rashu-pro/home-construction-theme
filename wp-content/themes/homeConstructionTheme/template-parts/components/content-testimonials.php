<?php
/**
 * testimonial section for home page
 */

$section_name = get_field('section_name_testimonial');
$status = get_field('status_testimonial');
$args = [
    'post_type' => 'hhc-testimonial',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
    'meta_key' => 'order',
    'order' => 'ASC',
    'meta_query' => [
        [
            'key' => 'status',
            'value' => 1,
            'compare' => '='
        ]
    ],
];
$entries = get_posts($args);
?>

<?php
if (!empty($status) && $status['value']) {
    if (!empty($entries)) {
        ?>
        <!-- client-testimonial -->
        <div class="testimonial-section wow fadeIn pos-relative" data-wow-duration="900ms" data-wow-delay="150ms">
            <div class="pattern"></div>
            <div class="container pos-relative">
                <div class="text-center testi-heading">
                    <h3 class="montserrat"><?php echo $section_name ?></h3>
                </div>
                <div id="quote-carousel" class="carousel slide text-center" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $counter = 0;
                        foreach ($entries as $entry) {
                            $client_name = get_field('clients_name', $entry->ID) ? get_field('clients_name', $entry->ID) . ',' : '';
                            $client_org_name = get_field('clients_organization_name', $entry->ID);
                            $client_designation = get_field('clients_designation', $entry->ID);
                            $client_feedback = get_field('clients_feedback', $entry->ID);
                            $thumbnail_image = get_the_post_thumbnail($entry->ID, 'medium', array(
                                'class' => 'img-circle',
                                'style' => 'width: 100px;height:100px;',
                            ));
                            $active_class = $counter === 0 ? 'active' : '';
                            ?>
                            <div class="carousel-item <?php echo $active_class ?>">
                                <blockquote>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="img-and-name">
                                                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/quote.png"
                                                     class="quote-icon img-fluid" alt=""/>
                                                <?php echo $thumbnail_image ?>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="quote-para">
                                                <p>"<?php echo $client_feedback ?>"</p>
                                            </div>
                                            <h5>
                                                <?php echo $client_name ?> <?php echo $client_designation ?>
                                                of <?php echo $client_org_name ?>
                                            </h5>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <?php
                            $counter++;
                        }

                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <a class="left carousel-control" href="#quote-carousel" data-slide="prev"><i class="fa fa-angle-left"
                                                                                             aria-hidden="true"></i>
                </a> <a class="right carousel-control" href="#quote-carousel" data-slide="next"><i
                            class="fa fa-angle-right" aria-hidden="true"></i> </a></div>
        </div>
        <!-- \\ client-testimonial -->
        <?php
    }
}
?>

