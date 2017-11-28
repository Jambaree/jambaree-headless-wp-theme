<?php

include('inc/functions/enqueue.php');
include('inc/functions/menus.php');
include('inc/functions/admin-css.php');

// Install required plugins
require_once get_template_directory() . '/inc/functions/register_required_plugins.php';
require_once get_template_directory() . '/inc/functions/class-tgm-plugin-activation.php';
