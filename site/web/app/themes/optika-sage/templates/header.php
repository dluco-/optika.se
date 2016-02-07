<header class="banner navbar navbar-default" role="banner">
  <div class="container">
    <nav role="navigation">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <h2 class="tagline hidden-xs hidden-sm"><?= get_bloginfo ( 'description' );  ?></h2>
  </div>
</header>
