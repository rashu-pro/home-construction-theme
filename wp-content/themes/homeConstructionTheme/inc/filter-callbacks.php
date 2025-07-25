<?php
function add_specific_menu_location_atts($atts, $item, $args) {
    // Check menu location
    if ($args->theme_location === 'main_menu') {
        $classes = 'nav-link';

        // If the item has children, add dropdown-toggle
        if (in_array('menu-item-has-children', $item->classes)) {
            $classes .= ' dropdown-toggle';
            $atts['data-bs-toggle'] = 'dropdown'; // For Bootstrap 5
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }

        $atts['class'] = $classes;
    }
    return $atts;
}

function add_classes_to_the_header_menu_li( $classes, $item, $args ) {
    // Only affect the menu placed in the 'secondary' wp_nav_bar() theme location
    if ($args->theme_location === 'main_menu') {
        // Make these items 3-columns wide in Bootstrap
        $classes[] = 'nav-item';
    }

    // If the menu item has children, add 'dropdown'
    if (in_array('menu-item-has-children', $classes)) {
        $classes[] = 'dropdown';
    }

    return $classes;
}

function add_class_to_the_submenu($classes, $args, $depth) {
    if ($args->theme_location === 'main_menu') {
        $classes[] = 'dropdown-menu';
    }
    return $classes;
}