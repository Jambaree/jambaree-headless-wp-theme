<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="grid-edges">
      <?php the_content(); ?>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
