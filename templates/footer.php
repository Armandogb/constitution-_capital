
  	<section class="main-footer">
  		<div class="left-footer">
			<div class="logo-bar-foot">
				<div class="foot-logo">
				</div>
			</div>
			<div class="address-bar-foot">
				<p class="white-text"><?php echo get_field('address',30); ?> <?php echo get_field('city_state_zip',30); ?></p>
			</div>
			<div class="phone-bar-foot">
				<p class="white-text"><?php echo preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1.$2.$3", get_field('phone_number',30));?></p>
			</div>
			<div class="rights-reserved-foot">
				<p class="light-blue-text">all rights reserved</p>
			</div>
		</div>
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


