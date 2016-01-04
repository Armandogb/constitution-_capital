<?php

$pt; 

	if(is_page('services')){
		$pt = 'service_page';
	}
	elseif(is_page('about')){
		$pt = 'about_page';
	}
	
	$query = get_posts(['post_type'=>$pt]);

?>
						

	<section class="big-banner">
		<div class="big-banner-text">
			<?php foreach($query as $input): ?>
				<p><?php echo $input->banner_message ?></p>
			<?php endforeach; ?>
		</div>
		<div class="big-banner-border-line">
		</div>
	</section>

