<?php
// Bare Naked
// Theme Header

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php

	include('template-objects/menu/main-menu.php');

	include('template-objects/boxes/big-box.php');

	?>
