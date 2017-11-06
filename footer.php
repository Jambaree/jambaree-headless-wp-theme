<?php
// Bare Naked
// Theme Footer
?>


		<footer class="site-footer">
			<div class="grid-edges">
				<?php wp_nav_menu( array( 'theme_location' => 'header' ) ); ?>
				<?php //get_template_part('modules/social', 'icons'); ?>
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
