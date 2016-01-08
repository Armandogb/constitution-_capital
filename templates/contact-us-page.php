<?php
/**
 * Template Name: Contact Us
 */
?>

<? if( have_posts() ){
	while(have_posts() ){
		the_post();
?>

  		<script type="text/javascript">

			var map;
			function initMap() {
			  map = new google.maps.Map(document.getElementById('map'), {
			    center: {lat: 41.877732, lng: -87.632264},
			    zoom: 15,
			    backgroundColor:'#23252C'
			  });

			  var styles = [
				  {
				    stylers: [
				      { hue: "#282B32" },
				      { saturation: 71 },
				      { lightness: -30 },
				      { gamma: 1.67 }
				    ]
				  },{
				    featureType: "road",
				    elementType: "geometry",
				    stylers: [
				      { lightness: 100 },
				      { visibility: "simplified" }
				    ]
				  },{
				    featureType: "road",
				    elementType: "labels",
				    stylers: [
				      { visibility: "off" }
				    ]
				  }
			   ];

				map.setOptions({styles: styles});
			}



		</script>
		<script async defer
			 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq7rM30kWGUzCTWPgUxtrAY-It8eqjDIg&callback=initMap">
   	 	</script>
		<section class="contact-us-location">
			<div id="map"></div>
			<div class="contact-us-info">
				<div class="contact-us-headline">
					<p><?php echo get_field('title_left'); ?></p>
				</div>
				<div class="contact-us-address">
					<p><?php echo get_field('address'); ?></p>
					<p><?php echo get_field('city_state_zip'); ?></p>
				</div>
				<div class="contact-us-phone">
					<p><i class="fa fa-phone"></i> <?php echo preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", get_field('phone_number',30));?></p>
				</div>
				<div class="contact-us-email">
					<p><i class="fa fa-envelope-o"></i> <?php echo get_field('email'); ?></p>
				</div>
			</div>
		</section>
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
		

<?php
		}
	}

?>
