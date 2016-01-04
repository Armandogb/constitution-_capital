<?php $query = get_posts(['post_type'=>'contact_us_page']);
foreach($query as $input): ?>

  	<section class="main-footer">
  		<div class="left-footer">
			<div class="logo-bar-foot">
				<div class="foot-logo">
				</div>
			</div>
			<div class="address-bar-foot">
				<p class="white-text"><?php echo $input->address ?> <?php echo $input->city_state_zip ?></p>
			</div>
			<div class="phone-bar-foot">
				<p class="white-text"><?php echo $input->phone_number ?></p>
			</div>
			<div class="rights-reserved-foot">
				<p class="light-blue-text">all rights reserved</p>
			</div>
		</div>

<?php endforeach; ?>
		<div class="footer-right">
			<div class="email-title">
				<p class="light-blue-text">Sign up for our mailing list</p>
				<form class="email-form">
					<input class="email-field light-blue-text" type="text" name="email" Value="Email">
					<input class="email-submit light-blue-text"type="submit" value="Submit">
				</form>
			</div>
			<div class="social-media">
				<div class="social-icons">
				</div>
			</div>
		</div>
	</section>


