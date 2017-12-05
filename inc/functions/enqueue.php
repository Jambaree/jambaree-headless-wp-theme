<?php

function bareNakedEnqueue() {
  $stylesheet_directory_uri = get_stylesheet_directory_uri();

  wp_enqueue_style( 'styles', get_stylesheet_uri() );

  wp_enqueue_script( 'jquery' );

  wp_enqueue_script('main-script', $stylesheet_directory_uri . '/inc/js/menu.js', array('jquery'), null, false);
  // wp_enqueue_script('eqcss', $stylesheet_directory_uri . '/inc/js/vendor/EQCSS.min.js', array(), null, true);
  wp_enqueue_script('lazysizes', $stylesheet_directory_uri . '/inc/js/vendor/lazysizes.min.js', array(), null, true);
  wp_enqueue_script('lazysizes-bg', $stylesheet_directory_uri . '/inc/js/vendor/ls.bgset.min.js', array('lazysizes'), null, true);

}


add_action('wp_enqueue_scripts', 'bareNakedEnqueue');

 ?>
