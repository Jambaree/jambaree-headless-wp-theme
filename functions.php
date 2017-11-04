<?php

$args = array(

	/* (string) The title displayed on the options page. Required. */
	'page_title' => 'Theme Options',

	/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
	'menu_title' => 'Theme Options',

	/* (string) The slug name to refer to this menu by (should be unique for this menu).
	Defaults to a url friendly version of menu_slug */
	'menu_slug' => 'theme-options',

	/* (string) The capability required for this menu to be displayed to the user. Defaults to edit_posts.
	Read more about capability here: http://codex.wordpress.org/Roles_and_Capabilities */
	'capability' => 'edit_posts',

	/* (int|string) The position in the menu order this menu should appear.
	WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
	Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
	Defaults to bottom of utility menu items */
	'position' => 3,

	/* (string) The slug of another WP admin page. if set, this will become a child page. */
	'parent_slug' => '',

	/* (string) The icon class for this menu. Defaults to default WordPress gear.
	Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
	'icon_url' => 'dashicons-admin-settings',

	/* (boolean) If set to true, this options page will redirect to the first child page (if a child page exists).
	If set to false, this parent page will appear alongside any child pages. Defaults to true */
	'redirect' => true,

	/* (int|string) The '$post_id' to save/load data to/from. Can be set to a numeric post ID (123), or a string ('user_2').
	Defaults to 'options'. Added in v5.2.7 */
	'post_id' => 'options',

	/* (boolean)  Whether to load the option (values saved from this options page) when WordPress starts up.
	Defaults to false. Added in v5.2.8. */
	'autoload' => false,

);

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page($args);

}






function tylerThemeEnqueue() {
  // $stylesheet_location = get_stylesheet_directory_uri() . '/style.css';
  wp_enqueue_style( 'styles', get_stylesheet_uri() );

	// wp_enqueue_style( 'material-icons', 'http://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css');
	// wp_enqueue_style( 'google-fonts', 'Paste google font url here');

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script('pjax', get_stylesheet_directory_uri() . '/js/vendor/barba.min.js', array('jquery'), '1.0.0', false);
  // wp_enqueue_script('pjax', get_stylesheet_directory_uri() . '/js/vendor/jquery.pjax.js', array('jquery'), '1.0.0', false);
  wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'pjax'), '1.0.0', false);

	// For bg video
	// wp_enqueue_script('vide', get_stylesheet_directory_uri() . '/js/vendor/jquery.vide.min.js', array('jquery'), '1', false);
}

add_action('wp_enqueue_scripts', 'tylerThemeEnqueue');






function tylerThemeMenus() {
  register_nav_menus( array(
    'main' => 'Main Menu'
  ) );
}

add_action('after_setup_theme', 'tylerThemeMenus');
