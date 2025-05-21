<?php
/**
 * Home page projects section
 */

$args = [
    'post_type'      => 'hhc-project',
    'posts_per_page' => -1,
    'orderby'        => 'meta_value_num',
    'meta_key'       => 'order',
    'order'          => 'ASC',
    'meta_query'     => [
        [
            'key'     => 'status',
            'value'   => 1,
            'compare' => '='
        ]
    ],
];

$projects = get_posts($args);
?>

<?php if(!empty($projects)): ?>
    <!-- Projects -->
    <div class="content-section projects-section">
        <div class="pattern"></div>
        <div class="container">
            <h2 class="text-center text-uppercase">Our Latest <span class="orange-txt">Projects</span></h2>
            <div class="border-creative text-center"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border-2.png" alt=""/></div>

            <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms" data-wow-delay="100ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project1.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms" data-wow-delay="150ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project2.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="col-xs-4 wow fadeIn" data-wow-duration="900ms" data-wow-delay="200ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project-3.jpg" alt=""
                     class="img-fluid"/>
                <div class="clearfix"></div>
            </div>

            <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms" data-wow-delay="250ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project4.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms" data-wow-delay="300ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project5.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="col-xs-4 wow fadeIn" data-wow-duration="900ms" data-wow-delay="500ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project-6.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms" data-wow-delay="450ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project8.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="col-xs-2 wow fadeIn" data-wow-duration="900ms" data-wow-delay="400ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project-7.jpg" alt=""
                     class="img-fluid"/>
                <div class="clearfix"></div>
            </div>

            <div class="col-xs-4 wow fadeIn" data-wow-duration="900ms" data-wow-delay="350ms">
                <div class="gamma-description montserrat"><a href="javascript:void(0) class="full-link" title=""></a>
                    <h3><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/search.png" alt=""/> <span
                                class="clearfix"></span> Neque porro quisquam </h3>
                    <p>Design / Build</p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/projects/project-10.jpg" alt=""
                     class="img-fluid"/></div>

            <div class="clearfix"></div>
        </div>
        <div class="project-bottom wow fadeIn" data-wow-duration="900ms" data-wow-delay="550ms"> VIEW MORE WORKS DONE BY Us
            <a href="#" class="montserrat">VIEW ALL PROJECTS <i class="fa fa-long-arrow-right"
                                                                aria-hidden="true"></i> </a></div>
    </div>
    <!--\\ Projects -->
<?php endif; ?>
