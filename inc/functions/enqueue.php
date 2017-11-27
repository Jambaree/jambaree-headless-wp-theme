<?php

function bareNakedEnqueue() {
  wp_enqueue_style( 'styles', get_stylesheet_uri() );
	// wp_enqueue_style( 'material-icons', 'http://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css');
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'), null, false);
}


add_action('wp_enqueue_scripts', 'bareNakedEnqueue');

 ?>
