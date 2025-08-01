<?php

function pretty_dump($array){
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
}

/**
 * Function to add breadcrumb to the pages
 * @return void
 */
function custom_breadcrumbs() {
    global $post;
    $home_url = home_url('/');
    echo '<ol class="breadcrumb">';

    // Home link
    echo '<li><a href="' . $home_url . '"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>';

    if (is_category() || is_single()) {
        $categories = get_the_category();
        if ($categories) {
            $category = $categories[0];
            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
        }
        if (is_single()) {
            echo '<li class="active">' . get_the_title() . '</li>';
        }
    } elseif (is_page() && $post->post_parent) {
        $parent_id = $post->post_parent;
        $breadcrumbs = [];

        while ($parent_id) {
            $page = get_post($parent_id);
            $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
            $parent_id = $page->post_parent;
        }

        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) {
            echo $crumb;
        }
        echo '<li class="active">' . get_the_title() . '</li>';
    } elseif (is_page()) {
        echo '<li class="active">' . get_the_title() . '</li>';
    } elseif (is_search()) {
        echo '<li class="active">Search results for: ' . get_search_query() . '</li>';
    } elseif (is_404()) {
        echo '<li class="active">404 - Page Not Found</li>';
    } elseif (is_home()) {
        echo '<li class="active">Blog</li>';
    }

    echo '</ol>';
}

/**
 * Gets youtube video id from given sharable link
 * example link: https://youtu.be/k4b4rBJZWYA?si=Mw8j-pALR5xzjzDR
 * id: k4b4rBJZWYA
 * @param $url
 * @return string|null
 */
function get_youtube_video_id($url) {
    $parsedUrl = parse_url($url);

    // Check if it's a youtu.be short link
    if (isset($parsedUrl['host']) && $parsedUrl['host'] === 'youtu.be') {
        // Remove leading slash if present
        return ltrim($parsedUrl['path'], '/');
    }

    return null;
}

/**
 * Renders YouTube videos
 * @param $youtube_videos
 * @return void
 */
function render_youtube_videos($youtube_videos) {
    foreach ($youtube_videos as $video_url) {
        $video_id = get_youtube_video_id($video_url);
        if ($video_id):
            ?>
            <div class="col-md-6">
                <div class="video-holder">
                    <iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/<?= $video_id ?>"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
        <?php
        endif;
    }
}

/**
 * Renders uploaded videos
 * @param $uploaded_videos
 * @return void
 */
function render_uploaded_videos($uploaded_videos) {
    foreach ($uploaded_videos as $clone) {
        foreach ($clone as $video) {
            ?>
            <div class="col-md-6">
                <div class="video-holder">
                    <video controls width="100%">
                        <source src="<?= $video['src'] ?>" type="<?= $video['type'] ?>"/>
                        Your browser does not support HTML5 video.
                    </video>
                </div>
            </div>
            <?php
        }
    }
}

/**
 * Renders staff tree
 * @param $nodes
 * @return void
 */
function render_staff_tree($nodes) {
    echo '<ul>';
    foreach ($nodes as $node) {
        echo '<li>';
        echo '<div class="box">';
        echo '<strong>' . esc_html($node['name']) . '</strong><br>';
        echo '<span>' . esc_html($node['designation']) . '</span>';
        echo '</div>';
        if (!empty($node['children'])) {
            render_staff_tree($node['children']);
        }
        echo '</li>';
    }
    echo '</ul>';
}
