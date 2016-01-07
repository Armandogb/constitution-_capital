<?php
/**
 * Template Name: Open Interest
 */
?>

<?php
if( have_posts() ){
	while(have_posts() ){
		the_post();
?>


		<section class="trading-header">
			<div class="trading-title left">
				<p>Open Interest: eurodollar</p>
			</div>
			<div class="trading-menu right">
				<div class="tm-print tm2">
					<p>PRINT REPORT</p>
				</div>
				<div class="tm-clear tm2">
					<p>CLEAR FILTER</p>
				</div>
				<div class="tm-adv-search tm1 menu-spacer">
					<p><i class="fa fa-plus"></i> Advanced Search</p>
				</div>
				<div class="tm-product tm1 menu-spacer">
					<p>|</p>
				</div>
				<div class="tm-date tm1 menu-spacer">
					<p>Date <i class="fa fa-caret-down"></i></p>
				</div>
				<div class="tm-product tm1 menu-spacer">
					<p>|</p>
				</div>
				<div class="tm-product tm1 menu-spacer">
					<p>Product <i class="fa fa-caret-down"></i></p>
				</div>
			</div>
		</section>
		<section class="trading-extra-options">
			<div class="spread-type-select">
				<p>SPREAD TYPE</p>
				<select>
				  <option value="" disabled selected>select</option>
				  <option value="one">one</option>
				  <option value="two">two</option>
				  <option value="three">three</option>
				  <option value="four">four</option>
				</select>
			</div>
			<div class="option-future-select">
				<p>OPTION/FUTURE</p>
				<select>
				  <option value="" disabled selected>select</option>
				  <option value="one">one</option>
				  <option value="two">two</option>
				  <option value="three">three</option>
				  <option value="four">four</option>
				</select>
			</div>
			<div class="code-select">
				<p>CODE</p>
				<select>
				  <option value="" disabled selected>select</option>
				  <option value="one">one</option>
				  <option value="two">two</option>
				  <option value="three">three</option>
				  <option value="four">four</option>
				</select>
			</div>
			<div class="strike-select">
				<p>STRIKE</p>
				<input name="" type="text" value="enter value">
			</div>
			<div class="call-put-select">
				<p>CALLPUT</p>
				<select>
				  <option value="" disabled selected>select</option>
				  <option value="one">one</option>
				  <option value="two">two</option>
				  <option value="three">three</option>
				  <option value="four">four</option>
				</select>
			</div>
			<div class="buy-sell-select">
				<p>BUY/SELL</p>
				<select>
				  <option value="" disabled selected>select</option>
				  <option value="one">one</option>
				  <option value="two">two</option>
				  <option value="three">three</option>
				  <option value="four">four</option>
				</select>
			</div>
			<div class="strike-price-select">
				<p>STRIKE PRICE</p>
				<input name="" type="text" value="enter value">
			</div>
			<div class="quantity-select">
				<p>QUANTITY</p>
				<input name="" type="text" value="enter value">
			</div>
			<div class="delta-select">
				<p>DELTA</p>
				<input name="" type="text" value="enter value">
			</div>
		</section>
		<section class="interest-column-names">
			<div class="call OI">
				<p>CALL</p>
			</div>
			<div class="strike OI">
				<p>STRIKE</p>
			</div>
			<div class="put OI">
				<p>PUT</p>
			</div>
		</section>
		<section class="interest-table">

		<?php 

			$stock = get_field('stock');
			$i = 0;

			foreach ($stock as $row):

			$i++;
			$color = $i % 2 ? 'light' : 'dark'; 
		?>

			<div class="grapher-object <?php echo $color ?>">
				<div class="number-call">
					<p><?php echo $row['call'] ?></p>
				</div>
				<div class="meter-l">
					<article class="bar-l right" style="width:<?php echo rand(1,100)?>%">
					</article>
				</div>
				<div class="number-strike">
					<p><?php echo $row['strike'] ?></p>
				</div>
				<div class="meter-r">
					<article class="bar-r left" style="width:<?php echo rand(1,100)?>%">
					</article>
				</div>
				<div class="number-put">
					<p><?php echo $row['put'] ?></p>
				</div>
			</div>

		<?php endforeach; ?>

		</section>
<?php
		}
	}

?>