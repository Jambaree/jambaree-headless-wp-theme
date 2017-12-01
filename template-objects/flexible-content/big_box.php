<?php $box_height = get_sub_field('height'); ?>
<?php $box_class = $box_height == 'min-half-height' ? 'big-box--min-half-height' : 'big-box'; ?>
<section
class='<?php echo $box_class; ?>'
style='background-image: url(<?php the_sub_field('background_image'); ?>)'>

  <div class="big-box__inner">
    <?php if( have_rows( 'big_box__content' ) ): ?>

      <section class="big-box__content">
        <?php while( have_rows( 'big_box__content' ) ): the_row(); ?>
          <?php include( get_row_layout() . '.php' ); ?>
        <?php endwhile; ?>
      </section>

    <?php endif; ?>
  </div>

</section>
