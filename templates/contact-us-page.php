<?php
/**
 * Template Name: Contact Us
 */
?>

<?php if( have_posts() ){
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
				        "featureType": "all",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "saturation": 36
				            },
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 40
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 17
				            },
				            {
				                "weight": 1.2
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 29
				            },
				            {
				                "weight": 0.2
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 18
				            }
				        ]
				    },
				    {
				        "featureType": "road.local",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 19
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#000000"
				            },
				            {
				                "lightness": 17
				            }
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
					<p><i class="fa fa-phone"></i> <?php echo preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", get_field('phone_number',30)); ?></p>
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
