<?php if( have_rows( 'main_flexible_content' ) ): ?>
  <section class="main-flexible-content">

    <?php while( have_rows( 'main_flexible_content' ) ): the_row(); ?>
      <?php include('flexible-content/'. get_row_layout(). '.php' ); ?>
    <?php endwhile; ?>

  </section>
<?php endif; ?>
