<?php //This file isn't set up yet. ?>
<?php if( have_rows( 'main_flexible_content' ) ): ?>
  <section class="main-flexible-content">

    <?php while( have_rows( 'main_flexible_content' ) ): the_row(); ?>
      <?php $row_layout = get_row_layout(); ?>
      <?php include( dirname(dirname(__FILE__)) .'/'. $row_layout .'/'. $row_layout .'.php' ); ?>
    <?php endwhile; ?>

  </section>
<?php endif; ?>
