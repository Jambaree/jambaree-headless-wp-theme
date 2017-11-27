<?php if( get_field( 'background_type' ) == 'image' ): ?>

  <header class="main-header" role="banner" style='background-image: url("<?php the_field('background_image'); ?>");'>

<?php elseif( get_field( 'background_type' ) == 'video'): ?>

  <header class="main-header bg-video" role="banner" data-vide-bg="mp4: <?php the_field('mp4'); ?>, poster: <?php the_field('poster_image') ?>" data-vide-options="posterType: jpg, loop: true, muted: true, position: 0% 0%">

<?php else: ?>

  <header class="main-header" role="banner">

<?php endif ;?>
