<?php
// Bare Naked
// Page content

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header>
			<?php the_title( '<h2 class="h2"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		</header>

	<div class="content">
		<?php
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'adsystems' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'adsystems' ),
				'after'  => '</div>',
			) );
		?>
	</div>

</article>
