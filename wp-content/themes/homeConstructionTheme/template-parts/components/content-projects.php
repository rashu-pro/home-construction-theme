<?php
/**
 * Home page projects section
 */

$section_name = get_field('section_name_projects');
$status = get_field('status_projects');
$args = [
    'post_type' => 'hhc-project',
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

<?php if (!empty($status) && $status['value']): ?>
    <?php if (!empty($entries)): ?>
        <style>
            .projects-section .grid-item {
                padding: 0 5px;
                /*height: 270px;*/
                position: relative;
                margin-bottom: 10px;
                width: 50%;
            }

            .projects-section .grid-item img {
                border: 4px solid #ffffff;
            }

            .projects-section .grid-item:hover {
                cursor: pointer;
            }

            .projects-section .grid-item .gamma-description {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .projects-section .grid-item:hover .gamma-description {
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
                filter: alpha(opacity=90);
                opacity: 0.90;
            }

            .projects-section .grid-item .gamma-description h3 {
                margin-top: 0;
            }

            .projects-section .grid-item .gamma-description p {
                margin: 0;
            }

            @media (max-width: 1200px) {
                .projects-section .grid-item {
                    max-height: 190px;
                    overflow: hidden
                }

                .projects-section .grid-item img {
                    border: 0 none
                }
            }

            @media (min-width: 992px) {
                .projects-section .grid-item {
                    width: 20%;
                }
            }
        </style>
        <!-- Projects -->
        <div class="content-section projects-section">
            <div class="pattern"></div>
            <div class="container">
                <h2 class="text-center text-uppercase">Our Latest <span class="orange-txt">Projects</span></h2>
                <div class="border-creative text-center"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border-2.png" alt=""/>
                </div>

                <div class="grid-masonary">
                    <?php
                    $wow_delay = 100;
                    $wow_delay_increase = 50;
                    foreach ($entries as $entry) {
                        $entry_thumb = get_the_post_thumbnail($entry->ID, 'full', array(
                            'class' => 'img-fluid'
                        ));
                        $entry_title = $entry->post_title;
                        // Get taxonomy terms for each project
                        $terms = get_the_terms($entry->ID, 'project-category');
                        ?>
                        <div class="grid-item wow fadeIn" data-wow-duration="900ms"
                             data-wow-delay="<?php echo $wow_delay ?>ms">
                            <div class="gamma-description montserrat">
                                <div class="gamma-description-content">
                                    <a href="<?php echo get_permalink($entry->ID) ?>" class="full-link" title=""></a>
                                    <h3>
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png"
                                             alt="">
                                        <span class="clearfix"></span>
                                        <?php echo $entry_title ?>
                                    </h3>
                                    <?php
                                    if (!empty($terms)) {
                                        ?>
                                        <p>
                                            <?php
                                            $counter = 1;
                                            foreach ($terms as $term) {
                                                $term_name = $term->name;
                                                if ($counter !== count($terms)) {
                                                    $term_name = $term_name . ' / ';
                                                }
                                                echo $term_name;
                                                $counter++;
                                            }
                                            ?>
                                        </p>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php echo $entry_thumb ?>
                        </div>
                        <?php
                        $wow_delay += $wow_delay_increase;
                    }
                    ?>
                </div>
            </div>
            <div class="project-bottom wow fadeIn" data-wow-duration="900ms" data-wow-delay="550ms"> VIEW MORE WORKS
                DONE BY
                Us
                <a href="<?php echo site_url() ?>/completed-projects/" class="montserrat">VIEW ALL PROJECTS <i class="fa fa-long-arrow-right"
                                                                    aria-hidden="true"></i> </a></div>
        </div>
        <!--\\ Projects -->

        <?php
        // Enqueue only when this template part is included
        wp_enqueue_script(
            'isotope-js',
            'https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.js',
            array(),
            null,
            true
        );
        ?>
    <?php endif; ?>
<?php endif; ?>
