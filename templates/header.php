<header>
	<div class="header">
      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'nav-menu']);
	      endif;
	      ?>
      	<div class="header-logo">
      		<a href="/"><img src="<?php echo get_template_directory_uri() . '/dist/images/logo.png'; ?>"></a>
      	</div>
     </div>
</header>
