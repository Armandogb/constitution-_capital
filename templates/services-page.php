<?php
/**
 * Template Name: Services
 */
?>

<?php

if( have_posts() ){
	while(have_posts() ){
		the_post();
?>

		<?php get_template_part('templates/section-big-banner'); ?>

			<section class="services-middle">
				<div class="services-laptop">
					<div class="laptop-image">
						<div class="bar-animation one-light">
						</div>
						<div class="bar-animation two-light">
						</div>
						<div class="bar-animation three-light">
						</div>
						<div class="bar-animation four-light">
						</div>
						<div class="bar-animation one-dark">
						</div>
						<div class="bar-animation two-dark">
						</div>
						<div class="bar-animation three-dark">
						</div>
						<div class="bar-animation four-dark">
						</div>
						<div class="bar-animation five-dark">
						</div>
						<div class="spread-bar">
						</div>
					<div>
				<div class="services-middle-text">
					<div class="services-headline">
						<?php echo get_field('paragraph_headline'); ?>
					</div>
					<div class="services-paragraphs">
						<?php echo get_field('paragraph_content'); ?>
					</div>
				</div>
			</section>
			<section class="services-mobile">
				<div class="mobile-headline">
					<p><?php echo get_field('banner_bottom'); ?></p>
				</div>
				<div class="mobile-phones">
					<div class="phone phone-1">
						<img src="<?php echo get_template_directory_uri() . '/dist/images/phone.png'; ?>">
					</div>
					<div class="phone phone-2">
						<img src="<?php echo get_template_directory_uri() . '/dist/images/phone.png'; ?>">
					</div>
					<div class="phone phone-3">
						<img src="<?php echo get_template_directory_uri() . '/dist/images/phone.png'; ?>">
					</div>
				</div>
			</section>

	<?php
		}
	}

?>
