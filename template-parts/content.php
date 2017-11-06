<?php
// Bare Naked
// Page content

?>

<article <?php post_class(); ?>>

		<header>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</header>

	<div class="content">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>

</article>
