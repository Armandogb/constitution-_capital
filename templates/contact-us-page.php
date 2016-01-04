<?php
/**
 * Template Name: Contact Us
 */
?>
<?php $query = get_posts(['post_type'=>'contact_us_page']);
foreach($query as $input): ?>

	<section class="contact-us-location">
		<div class="contact-us-info">
			<div class="contact-us-headline">
				<p><?php echo $input->main_title ?></p>
			</div>
			<div class="contact-us-address">
				<p><?php echo $input->address ?></p>
				<p><?php echo $input->city_state_zip ?></p>
			</div>
			<div class="contact-us-phone">
				<p><?php echo $input->phone_number ?></p>
			</div>
			<div class="contact-us-email">
				<p><?php echo $input->email ?></p>
			</div>
		</div>
	</section>

<?php endforeach; ?>
<section class="contact-us-form">
	<div class="form-text-contactus">
		<p>Contact Us</p>
	</div>
	<div class="contact-form">
		<form>
			<div class="contact-name left" >
				<input type="text" name="first_last_name" value="First & Last Name">
			</div>
			<div class="contact-email right" >
				<input type="text" name="email" value="Email Address">
			</div>
			<div class="contact-comment left" >
				<textarea rows="25" type="text" name="comment">Comment</textarea>
			</div>
			<div class="contact-submit left">
				<input type="submit" value="Submit">
			</div>
		</form>
	</div>

</section>
