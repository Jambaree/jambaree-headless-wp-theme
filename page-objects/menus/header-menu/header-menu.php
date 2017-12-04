<section class="header-menu">
  <div class="header-menu__edges">

    <div class="header-menu__title">
      <a href="<?php echo get_home_url(); ?>">

        <?php if( get_field( 'main_logo', 'option' ) ): ?>
          <img
          class='header-menu__logo'
          src="<?php the_field( 'main_logo', 'option' ); ?>"
          alt="<?php bloginfo( 'name' ); ?> Logo"
          >
        <?php else: ?>
          <h1 class='header-menu__title-heading'>
            <?php bloginfo( 'name' ); ?>
          </h1>
        <?php endif; ?>

        <span class='screen-reader-text'>
          <?php bloginfo( 'name' ); ?>
        </span>
      </a>
    </div>

    <nav class="header-menu__menu-box">
      <?php include('hamburger/hamburger.php') ?>
      <?php wp_nav_menu(
                array(
                'theme_location' => 'main',
                'menu_class' => 'header-menu__menu'
              )
            ); ?>
    </nav>

  </div>
</section>
