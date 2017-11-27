<header class="main-header" role="banner" style='background-image: url("<?php the_field('background_image'); ?>");'>

    <div class="grid-edges">
      <div class="main-header__inner">
        <?php if(get_field('header_title')): ?>
          <h1 class="main-header__title h1"><?php //the_field('header_title'); ?></h1>
        <?php else: ?>
          <h1 class="main-header__title h1"><?php the_title(); ?></h1>
        <?php endif; ?>

        <?php if(get_field('header_subheading')): ?>
          <div class="p"><?php the_field('header_subheading'); ?></div>
        <?php endif; ?>
      </div>
    </div>

</header>
