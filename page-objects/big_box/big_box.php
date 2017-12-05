<?php //Box Height ?>
<?php $box_class = 'big-box--' . get_sub_field('height'); ?>

<?php //Background Image ?>
<?php $background_image = get_sub_field('background_image'); ?>
<?php $background_image_tag = $background_image ? responsive_bg_img($background_image) : ""; ?>

<section class='<?php echo $box_class; ?> lazyload' <?php echo $background_image_tag; ?>>

  <div class="big-box__inner">
    <?php if( have_rows( 'big_box__content' ) ): ?>

      <section class="big-box__content">
        <?php while( have_rows( 'big_box__content' ) ): the_row(); ?>
          <?php $row_layout = get_row_layout(); ?>
          <?php include( dirname(dirname(__FILE__)) .'/'. $row_layout .'/'. $row_layout .'.php' ); ?>
        <?php endwhile; ?>
      </section>

    <?php endif; ?>
  </div>

</section>
