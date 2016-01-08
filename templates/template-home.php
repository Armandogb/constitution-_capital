<?php
/**
 * Template Name: Home
 */
?>

<?php

if( have_posts() ){
	while(have_posts() ){
		the_post();
?>
		<section class="home-bannerz" style="background:linear-gradient(rgba(45, 45, 56, 0.55),rgba(45, 45, 56, 0.55)), 
		url(<?php echo get_field('banner_image'); ?>); background-size: 100% 100%; background-repeat: no-repeat;">
			<div class="home-banner-text">
				<p><?php echo get_field('banner_title'); ?></p>
			</div>
			<div class="home-services-but">
				<a href="/services"><p>SERVICES</p></a>
			</div>
		</section>

		<section class="home-giant-menu">
			<div class="home-big-about big-menu">
				<div class="big-icon">
					<a href="/about"><img src="<?php echo get_template_directory_uri() . '/dist/images/big_about.png'; ?>"></a>
					<div class="big-icon-hover">
					</div>
				</div>
			</div>
			<div class="home-big-services big-menu">
				<div class="big-icon">
					<a href="/services"><img src="<?php echo get_template_directory_uri() . '/dist/images/big_services.png'; ?>"></a>
					<div class="big-icon-hover">
					</div>
				</div>
			</div>
			<div class="home-big-contact big-menu">
				<div class="big-icon">
					<a href="/contact-us"><img src="<?php echo get_template_directory_uri() . '/dist/images/big_contact.png'; ?>"></a>
					<div class="big-icon-hover">
					</div>
				</div>
			</div>
		</section>

<?php
		}
	}

?>



