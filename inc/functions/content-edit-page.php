<?php

// Remove editor in favour of ACF editor
add_action('init', 'remove_support');

function remove_support() {
  remove_post_type_support( 'template_objects', 'editor');
  remove_post_type_support( 'page', 'editor');
}

// Move Yoast metabox to bottom
function wpcover_move_yoast() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'wpcover_move_yoast');
