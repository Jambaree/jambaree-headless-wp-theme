<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <div class="grid-edges">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
