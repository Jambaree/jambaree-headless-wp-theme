<?php
// Bare Naked
// Default Page Template

 get_header(); ?>

</header>

<main class='main'>

  <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <div class="grid">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php
get_footer();
