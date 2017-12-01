<?php if( have_rows( 'row' ) ): ?>
  <section class="grid__row">

    <?php while( have_rows( 'row' ) ): the_row(); ?>
      <div class="grid__column">
        <?php include(dirname(dirname(__FILE__)) . '/main-flexible-content.php'); ?>
      </div>
    <?php endwhile; ?>

  </section>
<?php endif; ?>
