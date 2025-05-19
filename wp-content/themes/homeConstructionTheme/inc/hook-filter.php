<?php
/**
 * Filter Hook to add class to the <a> tag of the menu <li>
 */
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

/**
 * Filter Hook to add class to the menu li
 */
add_filter( 'nav_menu_css_class', 'add_classes_to_the_header_menu_li', 10, 3 );

/**
 * Filter Hook to add class to the submenu
 */
add_filter('nav_menu_submenu_css_class', 'add_class_to_the_submenu', 10, 3);