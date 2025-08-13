<?php

/**
 * ReduxFramework Barebones Sample Config File
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disabled
if (!class_exists('Redux')) {
    return null;
}

// This is your option name where all the Redux data is stored.
$opt_name = 'hhc_redux_options';

/**
 * GLOBAL ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: @link https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 */

/**
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // REQUIRED!!  Change these values as you need/desire.
    'opt_name' => $opt_name,

    // Name that appears at the top of your panel.
    'display_name' => $theme->get('Name'),

    // Version that appears at the top of your panel.
    'display_version' => $theme->get('Version'),

    // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
    'menu_type' => 'menu',

    // Show the sections below the admin menu item or not.
    'allow_sub_menu' => true,

    'menu_title' => __('Theme Options'),
    'page_title' => __('Sample Options'),

    // Disable this in case you want to create your own Google fonts loader.
    'disable_google_fonts_link' => false,

    // Show the panel pages on the admin bar.
    'admin_bar' => true,

    // Choose an icon for the admin bar menu.
    'admin_bar_icon' => 'dashicons-portfolio',

    // Choose a priority for the admin bar menu.
    'admin_bar_priority' => 50,

    // Set a different name for your global variable other than the opt_name.
    'global_variable' => '',

    // Show the time the page took to load, etc.
    'dev_mode' => true,

    // Enable basic customizer support.
    'customizer' => true,

    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_priority' => null,

    // For a full list of options, visit: @link https://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
    'page_parent' => 'themes.php',

    // Permissions needed to access the options panel.
    'page_permissions' => 'manage_options',

    // Specify a custom URL to an icon.
    'menu_icon' => '',

    // Force your panel to always open to a specific tab (by id).
    'last_tab' => '',

    // Icon displayed in the admin panel next to your menu_title.
    'page_icon' => 'icon-themes',

    // Page slug used to denote the panel.
    'page_slug' => '_options',

    // On load save the defaults to DB before user clicks save or not.
    'save_defaults' => true,

    // If true, shows the default value next to each field that is not the default value.
    'default_show' => false,

    // What to print by the field's title if the value shown is default. Suggested: *.
    'default_mark' => '',

    // Shows the Import/Export panel when not used as a field.
    'show_import_export' => true,

    // CAREFUL: These options are for advanced use only.
    'transient_time' => 60 * MINUTE_IN_SECONDS,

    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
    'output' => true,

    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
    'output_tag' => true,

    // FUTURE → Not in use yet, but reserved or partially implemented.
    // Use at your own risk.
    // Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'database' => '',

    'compiler' => true,

    // Enable or disable flyout menus when hovering over a menu with submenus.
    'flyout_submenus' => true,

    // Mode to display fonts (auto|block|swap|fallback|optional)
    // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display .
    'font_display' => 'swap',

    // HINTS.
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'light',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    ),
);

// ADMIN BAR LINKS → Set up custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
    'id' => 'redux-docs',
    'href' => '//devs.redux.io/',
    'title' => __('Documentation'),
);

$args['admin_bar_links'][] = array(
    'id' => 'redux-support',
    'href' => '//github.com/ReduxFramework/redux-framework/issues',
    'title' => __('Support'),
);

$args['admin_bar_links'][] = array(
    'id' => 'redux-extensions',
    'href' => 'redux.io/extensions',
    'title' => __('Extensions'),
);

// SOCIAL ICONS → Set up custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url' => '//github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon' => 'el el-github',
);
$args['share_icons'][] = array(
    'url' => '//www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => __('Like us on Facebook'),
    'icon' => 'el el-facebook',
);
$args['share_icons'][] = array(
    'url' => '//twitter.com/reduxframework',
    'title' => __('Follow us on Twitter'),
    'icon' => 'el el-twitter',
);
$args['share_icons'][] = array(
    'url' => '//www.linkedin.com/company/redux-framework',
    'title' => __('Find us on LinkedIn'),
    'icon' => 'el el-linkedin',
);

// Panel Intro text → before the form.
if (false !== $args['global_variable']) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }

    $args['intro_text'] = '<p>' . sprintf(__('Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: $s') . '</p>', '<strong>' . $v . '</strong>');
} else {
    $args['intro_text'] = '<p>' . __('This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.') . '</p>';
}

// Add content after the form.
$args['footer_text'] = '<p>' . __('This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.') . '</p>';

Redux::set_args($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */

/*
 * ---> BEGIN HELP TABS
 */

$help_tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Theme Information 1'),
        'content' => '<p>' . __('This is the tab content, HTML is allowed.') . '</p>',
    ),

    array(
        'id' => 'redux-help-tab-2',
        'title' => __('Theme Information 2'),
        'content' => '<p>' . __('This is the tab content, HTML is allowed.') . '</p>',
    ),
);

Redux::set_help_tab($opt_name, $help_tabs);

// Set the help sidebar.
$content = '<p>' . __('This is the sidebar content, HTML is allowed.') . '</p>';
Redux::set_help_sidebar($opt_name, $content);

/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> BEGIN SECTIONS
 *
 */

/* As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for. */

/* -> START Basic Fields. */

$kses_exceptions = array(
    'a' => array(
        'href' => array(),
    ),
    'strong' => array(),
    'br' => array(),
);

$section = array(
    'title' => __('General Options'),
    'id' => 'basic',
    'desc' => __('Basic fields as subsections.'),
    'icon' => 'el el-home',
);
Redux::set_section($opt_name, $section);

// Contact details option
$section = array(
    'title' => __('Contact Details'),
    'desc' => __('Add contact details here'),
    'id' => 'hhc_contact_details',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'hhc_contact_details_address',
            'type' => 'textarea',
            'title' => __('Address'),
        ),

        array(
            'id' => 'hhc_contact_details_email',
            'type' => 'text',
            'title' => __('Email'),
        ),
        array(
            'id' => 'hhc_contact_details_phone',
            'type' => 'text',
            'title' => __('Phone Number'),
        ),

        array(
            'id' => 'hhc_contact_details_po_box',
            'type' => 'text',
            'title' => __('PO. BOX'),
        ),
    ),
);
Redux::set_section($opt_name, $section);

/**
 * Social links options
 */
$section = array(
    'title' => __('Social Links'),
    'id' => 'social_links_section',
    'desc' => __('Add your social media links below.'),
    'icon' => 'el el-share-alt',
    'fields' => array(
        array(
            'id' => 'social_links',
            'type' => 'repeater',
            'title' => __('Social Media Links'),
            'subtitle' => __('Add links to your social profiles.'),
            'fields' => array(
                array(
                    'id' => 'hhc_social_title',
                    'type' => 'text',
                    'title' => __('Title')
                ),
                array(
                    'id' => 'hhc_social_icon',
                    'type' => 'text',
                    'title' => __('Icon Class (FontAwesome)'),
                    'desc' => __('e.g. fa fa-facebook, fa fa-twitter'),
                ),
                array(
                    'id' => 'hhc_social_url',
                    'type' => 'text',
                    'title' => __('Link'),
                    'validate' => 'url',
                ),
            ),
            'sortable' => true,
        ),
    ),
);
Redux::set_section($opt_name, $section);

/**
 * Footer Options
 */
$section = array(
    'title' => __('Footer Options'),
    'id' => 'footer_options',
    'desc' => __('Footer options fields'),
    'icon' => 'el el-arrow-down',
);
Redux::set_section($opt_name, $section);

// Footer about text
$section = array(
    'title' => __('About Text'),
    'desc' => __('Add about text here'),
    'id' => 'footer_about_text',
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'hhc_footer_about_text',
            'type' => 'editor',
            'title' => __('Footer About Text'),
        ),
    ),
);
Redux::set_section($opt_name, $section);

/*
 * <--- END SECTIONS
 */
// phpcs:enable