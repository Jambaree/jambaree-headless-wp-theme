<?php
// Tyler Theme
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

<div class="hamburger__layout">
	<button class="main-menu__button hamburger hamburger--elastic" type="button">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
		<span class="hamburger-title__container">
			<span class="hamburger-title__inner">
				<span class="hamburger-title">menu</span>
				<span class="hamburger-title">close</span>
			</span>
		</span>
	</button>
</div>

<nav class="main-navigation">
	<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'main-menu' ) ); ?>
	<?php //get_template_part('modules/social', 'icons'); ?>
</nav>

<div class="spinner">
	<div class="double-bounce1"></div>
	<div class="double-bounce2"></div>
</div>

<div id="barba-wrapper">
	<div class="pjax-container barba-container scale-wrapper">
		<div class="scale-wrapper-overlay"></div>

		<section class="header-body">
			<?php include_once('inc/header-background-logic.php') ;?>

				<div class="bg-overlay">
					<section class="main-menu">

						<div class="inner-grid">
							<div class="site-title">
								<a href="<?php echo get_home_url(); ?>" rel="home">

									<?php if( get_field( 'main_logo', 'option' ) ): ?>
										<img class='site-title__logo' src="<?php the_field( 'main_logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo">
									<?php else: ?>
										<div class="p">Home</div>
									<?php endif; ?>

									<span class='site-title__text-hidden'><?php bloginfo( 'name' ); ?></span>
								</a>
							</div>

							<nav class="main-navigation-desktop">
								<?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'main-menu' ) ); ?>
								<?php //get_template_part('modules/social', 'icons'); ?>
							</nav>
						</div>

					</section>

					<div class="grid">
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
				</div>

		  </header>
