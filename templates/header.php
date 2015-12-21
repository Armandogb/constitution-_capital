<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation','container_class' => 'main-nav','menu_class' => 'nav-menu']);
      endif;
      ?>
    </nav>
  </div>
</header>
