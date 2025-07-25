<?php

add_action('wp_enqueue_scripts', 'hhc_enqueue_styles');
function hhc_enqueue_styles() {
    wp_enqueue_style(
        'inter-font',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        false
    );
}


