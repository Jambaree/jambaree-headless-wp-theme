<?php
// 
//Add icon after menu items which have children and are top level.
class mainMenu_walker extends Walker_Nav_Menu {

  function end_el(&$output, $item, $depth = 0, $args = array() ) {
    if (in_array('menu-item-has-children', $item->classes) && $depth == 0) {
      $menu_dropdown_icon = file_get_contents(get_stylesheet_directory_uri() . '/inc/icons/material-design-icons/svg/chevron-down.svg');
      $output .= $menu_dropdown_icon;
    }
    $output .= "</li>\n";
  }
}

//
// Register theme menus
function bareNakedMenus() {
  register_nav_menus( array(
    'main' => 'Main Menu',
    'footer' => 'Footer Menu',
  ) );
}

add_action('after_setup_theme', 'bareNakedMenus');

?>
