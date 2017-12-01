<?php

function bareNakedMenus() {
  register_nav_menus( array(
    'main' => 'Main Menu',
    'footer' => 'Footer Menu'
  ) );
}

add_action('after_setup_theme', 'bareNakedMenus');

?>
