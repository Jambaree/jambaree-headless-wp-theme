<?php
// Bare Naked
// Theme Footer
?>

</section><!--end header-footer section -->

		<footer class="site-footer">
			<div class="grid">
				<?php //wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'menu-dropdown-mobile' ) ); ?>
				<?php //get_template_part('modules/social', 'icons'); ?>
			</div>
		</footer>

		<div class="legal">
			<div class="grid">
				<div class="legal__copyright"> ©<?php echo date('Y'); ?> All rights reserved.</div>
				<div class="legal__credit">
					<a href="http://bare.ca" target="_blank">Site by Bare Advertising &amp; Communications</a>
				</div>
			</div>
		</div>

	</div>
</div><!-- #barba-wrapper -->

<?php wp_footer(); ?>
</body>
</html>
