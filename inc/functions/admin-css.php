<?php

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
		.wp-menu-separator {
				border-bottom: 2px solid #ffffff;
		}

		.wp-submenu hr {
		    border-top: none;
		    border-color: rgba(240,245,250,.7);
		}
  </style>';
}

 ?>
