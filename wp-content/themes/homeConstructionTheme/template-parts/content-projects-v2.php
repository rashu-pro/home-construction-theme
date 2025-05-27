<?php
/**
 * Home page projects section
 */

$section_name = get_field('section_name_projects');
$project_type = get_field('load_project_type');
$args = [
    'post_type' => 'hhc-project',
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
            'key' => 'project_status',
            'value' => $project_type['value'],
            'compare' => '='
        ]
    ],
];

$entries = get_posts($args);
?>

<?php if (!empty($entries)): ?>
<style>
    .tags .tag-single {
        font-weight: 600;
        font-style: italic;
        font-size: 13px;
    }
    .grid-2{
        margin-bottom: 30px;
        box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
        border: 1px solid #ededed;
        padding: 15px;
    }
    @media (min-width: 992px) {
        .grid-2 .image-project{
            height: 238px;
            object-fit: cover;
        }
    }

</style>
    <!-- Projects -->
    <div class="content-section projects-section-v2">
        <div class="container">
            <?php
            if($section_name){
                ?>
                <h2 class="text-center text-uppercase"><?php echo $section_name ?></h2>
                <div class="border-creative text-center"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border-2.png" alt=""/>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="container">
            <div>
                <?php
                foreach ($entries as $entry){
                    $entry_thumb = get_the_post_thumbnail($entry->ID, 'full', array(
                        'class' => 'img-fluid image-project'
                    ));
                    $entry_title = $entry->post_title;
                    // Get taxonomy terms for each project
                    $terms = get_the_terms($entry->ID, 'project-category');
                    ?>
                    <div class="col-md-4 portfolio logo">
                        <div class="grid-2">
                            <figure class="effect-jazz">
                                <?php echo $entry_thumb ?>
                                <figcaption>
                                    <h2><i class="fa fa-chevron-right" aria-hidden="true">&nbsp;</i></h2>
                                    <a href="#" title="Project Details">View more</a></figcaption>
                            </figure>
                            <div class="clearfix"></div>
                            <div class="headl montserrat">
                                <h2><?php echo $entry_title ?></h2>
                            </div>
                            <div class="tags">
                                <?php
                                $counter = 1;
                                foreach ($terms as $term){
                                    $term_name = "<span class='tag-single'>" . $term->name . "</span>";
                                    if ($counter !== count($terms)) {
                                        $term_name = $term_name . ', ';
                                    }
                                    echo $term_name;
                                    $counter++;
                                }
                                ?>
                            </div>
                            <div style="margin-top:20px;" class="text-left">
                                <a href="#" class="btn btn-clear"> View Full Project </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--\\ Projects -->
<?php endif; ?>
