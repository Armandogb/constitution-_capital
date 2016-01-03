<?php
/**
 * Template Name: Trading
 */
?>

<section class="trading-header">
	<div class="trading-title left">
		<p><?php echo ucfirst($post->post_name) ?>: days trading</p>
	</div>
	<div class="trading-menu right">
		<div class="tm-product tm1">
			<p>Product__|</p>
		</div>
		<div class="tm-date tm1">
			<p>Date__|</p>
		</div>
		<div class="tm-adv-search tm1">
			<p>Advanced Search</p>
		</div>
		<div class="tm-clear tm2">
			<p>CLEAR FILTER</p>
		</div>
		<div class="tm-print tm2">
			<p>PRINT REPORT</p>
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
<section class="trading-column-names">
	<div class="house-col">
		<p>HOUSE</p>
	</div>
	<div class="middle-columns left">
			<div class="buy-sell-col">
				<p>BUY/SELL</p>
			</div>
			<div class="quantity-col">
				<p>QUANTITY</p>
			</div>
			<div class="codes-col">
				<p>CODES</p>
			</div>
			<div class="strike-col">
				<p>STRIKE</p>
			</div>
			<div class="cp-col">
				<p>C/P</p>
			</div>
			<div class="premium-col">
				<p>PREMIUM</p>
			</div>
			<div class="spread-col">
				<p>SPREAD</p>
			</div>
		</div>
		<div class="end-columns">
			<div class="comments-col">
				<p>COMMENTS</p>
			</div>
			<div class="timestamp-col">
				<p>TIME STAMP</p>
			</div>
		</div>
</section>
<section class="trading-table">
	<div class="stock-object">
		<div class="table-blank-space">
			<p></p>
		</div>
		<div class="house-space">
			<p>house</p>
		</div>
		<div class="buy-sell-space">
			<p>B/S</p>
		</div>
		<div class="quantity-space">
			<p>Quant</p>
		</div>
		<div class="codes-space">
			<p>codes</p>
		</div>
		<div class="strike-space">
			<p>strike</p>
		</div>
		<div class="cp-space">
			<p>c/p</p>
		</div>
		<div class="premium-space">
			<p>prem</p>
		</div>
		<div class="spread-space">
			<p>spread</p>
		</div>
		<div class="comments-space">
			<p>comments</p>
		</div>
		<div class="timestamp-space">
			<p>Time</p>
		</div>
		<div class="table-blank-right">
			<p></p>
		</div>
	</div>
</section>