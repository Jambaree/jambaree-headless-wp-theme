<?php
// Bare Naked
// Single Post

get_header(); ?>

<main class='main'>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
			<div class="grid">
				<?php the_content(); ?>
			</div>
    <?php endwhile; ?>
		<?php //the_post_navigation(); ?>
	<?php else: ?>
		<?php //get_template_part('template-parts/content', 'none'); ?>
  <?php endif; ?>

</main>

<?php
get_footer();
