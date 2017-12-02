<?php if( have_rows( 'row' ) ): ?>
  <section class="grid__row">

    <?php while( have_rows( 'row' ) ): the_row(); ?>
      <div class="grid__column <?php the_sub_field('size'); ?>">
        <?php include(dirname(dirname(__FILE__)) . '/main-flexible-content.php'); ?>
      </div>
    <?php endwhile; ?>

  </section>
<?php endif; ?>



<div class="grid__row">
  <div class="grid__column">
    <style>
      iframe {
        width: 100%;
      }
    </style>
    <iframe height="315" src="https://www.youtube.com/embed/My4RA5I0FKs" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="grid__column">
    <div class="wysiwyg">
      <h1>Test</h1>
    </div>
  </div>
</div>
