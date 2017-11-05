<?php
// Bare Naked
// Front Page Template


get_header(); ?>

</header>

<main class='main'>

  <a href="" class="button--angle-hover">
          <span class="button__background"></span>
          <div class="button__copy">Contact us</div>
  </a>

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
