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

	<?php include('inc/modules/main-menu.php'); ?>

	<header class="main-header" role="banner" style='background-image: url("<?php the_field('background_image'); ?>");'>

			<div class="grid-edges">
				<div class="main-header__inner">
					<?php if(get_field('header_title')): ?>
						<h1 class="main-header__title h1"><?php //the_field('header_title'); ?></h1>
					<?php else: ?>
						<h1 class="main-header__title h1"><?php the_title(); ?></h1>
					<?php endif; ?>

					<?php if(get_field('header_subheading')): ?>
						<div class="p"><?php the_field('header_subheading'); ?></div>
					<?php endif; ?>
				</div>
	    </div>

	</header>
