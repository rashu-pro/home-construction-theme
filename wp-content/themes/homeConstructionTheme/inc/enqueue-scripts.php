<?php

function hhc_enqueue_custom_scripts(){
    wp_enqueue_script(
        'scrolltopnotch-js',
        get_template_directory_uri() . '/assets/js/scrolltopcontrol.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'wow-js',
        get_template_directory_uri() . '/assets/js/wow.min.js',
        array(),
        null,
        true
    );
}

add_action('wwp_enqueue_scripts', 'hhc_enqueue_custom_scripts');

