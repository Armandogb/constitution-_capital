
	<div class="headerz">
      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'nav-menu']);
	      endif;
	      ?>
		  <div class="header-logo">
		  	<a href="/">
		     	<div class="logo-header">
		      	</div> 
		      </a>
	      </div>
	      <div class="mobile-nav">
	       <?php
		      if (has_nav_menu('primary_navigation')) :
		        wp_nav_menu(['theme_location' => 'primary_navigation','menu_class' => 'mobile-menu']);
		      endif;
		      ?>
	      </div>
	      <div class="hamburger-nav">
	      	<i class="fa fa-bars"></i>
	      </div>
     </div>
     <section class="header-spacer">
     </section>

