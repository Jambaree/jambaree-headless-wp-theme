<section class="main-menu">
  <div class="grid-edges">

    <a href="<?php echo get_home_url(); ?>" class="site-title">

      <?php if( get_field( 'main_logo', 'option' ) ): ?>
        <img class='site-title__logo' src="<?php the_field( 'main_logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo">
      <?php else: ?>
        <div class="p"><?php bloginfo( 'name' ); ?></div>
      <?php endif; ?>

      <span class='screen-reader-text'><?php bloginfo( 'name' ); ?></span>

    </a>

    <?php include('burger.php') ?>

    <nav class="main-navigation-desktop">
      <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'main-menu' ) ); ?>
    </nav>

  </div>
</section>
