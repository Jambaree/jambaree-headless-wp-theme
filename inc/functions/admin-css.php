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

    .backend-row .backend-column {
      border: 1px solid #515151;
    }

    .backend-row .backend-column::before {
        content: "Column";
        font-weight: bold;
        font-size: 1.2em;
    }

    .hidden {
      display: none;
    }
  </style>';
}

 ?>
