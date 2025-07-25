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
