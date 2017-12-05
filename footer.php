<?php
// Bare Naked
// Theme Footer
?>


		<footer class="site-footer">
			<div class="grid-edges">
				<div class="grid__row">

					<?php if( get_field( 'footer_logo', 'option' ) ): ?>
						<div class="grid__column">
		          <img
		          class='footer-menu__logo'
		          src="<?php the_field( 'main_logo', 'option' ); ?>"
		          alt="<?php bloginfo( 'name' ); ?> Logo"
		          >
						</div>
	        <?php endif; ?>

					<div class="grid__column">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
					</div>

				</div>
			</div>

			<section class="legal">
				<div class="grid-edges">
					<div class="legal__copyright"> ©<?php echo date('Y'); ?> All rights reserved.</div>
					<div class="legal__credit">
						<a href="http://bare.ca" target="_blank">Site by Bare Advertising &amp; Communications</a>
					</div>
				</div>
			</section>
		</footer>

<?php wp_footer(); ?>
</body>
</html>
