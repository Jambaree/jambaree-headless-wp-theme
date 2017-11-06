<?php
// Bare Naked
// Search Template

get_header(); ?>

<main class='main'>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'adsystems' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php //get_template_part( 'template-parts/content', 'search' ); ?>

				<?php endwhile; ?>

				<?php // the_posts_navigation(); ?>

			<?php else : ?>

				<?php //get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>


    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php
get_footer();
