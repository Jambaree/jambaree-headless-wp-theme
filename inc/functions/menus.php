<?php

function bareNakedMenus() {
  register_nav_menus( array(
    'main' => 'Main Menu'
  ) );
}

add_action('after_setup_theme', 'bareNakedMenus');

?>
