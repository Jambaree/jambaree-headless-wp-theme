<?php

function bareNakedEnqueue() {
  wp_enqueue_style( 'styles', get_stylesheet_uri() );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'), null, false);
  wp_enqueue_script('eqcss', get_stylesheet_directory_uri() . '/js/vendor/EQCSS.min.js', array(), null, true);
}


add_action('wp_enqueue_scripts', 'bareNakedEnqueue');

 ?>
