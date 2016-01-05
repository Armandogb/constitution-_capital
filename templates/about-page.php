<?php
/**
 * Template Name: About
 */
?>

<?php
if( have_posts() ){
	while(have_posts() ){
		the_post();
?>


		<?php get_template_part('templates/section-big-banner', 'big_banner'); ?>

		<section class="services-middle">
			<div class="services-middle-text">
				<div class="services-headline">
					<p><?php echo get_field('paragraph_headline'); ?></p>
				</div>
				<div class="services-paragraphs">
					<p><?php echo get_field('paragraph_content'); ?></p>
				</div>
			</div>
			<div class="services-laptop AB">
				<div class="about-us-image">
				</div>
			</div>
		</section>
		<section class="about-leadership">
			<div class="leadership-left">
				<div class="leadership-headline">
					<p><?php echo get_field('leadership_title'); ?></p>
				</div>
				<div class="leadership-paragraph">
					<p><?php echo get_field('leadership_paragraph'); ?></p>
				</div>
			</div>
			<div class="leadership-right">
				<div class="leadership-personnel">

				<?php 

					$leaders = get_field('leader_profile');

					foreach ($leaders as $person):?>

						<div class="leader-profile">
							<div class="leader-image">
								<div class="leader-image-wp" style="background: url(<?php echo $person['leader_image'] ?>); background-size: 100% 100%; 
									background-repeat: no-repeat;">
								</div>
							</div>
							<div class="leader-info">
								<p class="leader-name"><?php echo $person['name'] ?></p>
								<p class="leader-title"><?php echo $person['title'] ?></p>
								<p class="leader-blurb"><?php echo $person['blurb'] ?></p>
							</div>
						</div>

				<?php endforeach; ?>

				</div>
			</div>
		</section>

<?php
		}
	}

?>