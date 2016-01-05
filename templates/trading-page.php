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
			<p>Product</p>
		</div>
		<div class="tm-product tm1">
			<p>|</p>
		</div>
		<div class="tm-date tm1">
			<p>Date</p>
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
<section class="trading-table">
	<table>
		 <tr class="trading-column-names">
		   <th class="house">HOUSE</th>
		   <th class="buy-sell mid">BUY/SELL</th> 
		   <th class="quant mid">QUANTITY</th>
		   <th class="codes mid">CODES</th>
		   <th class="strike mid">STRIKE</th> 
		   <th class="c-p mid">C/P</th>
		   <th class="premium mid">PREMIUM</th>
		   <th class="spread mid">SPREAD</th> 
		   <th class="comments end">COMMENTS</th>
		   <th class="timestamp end">TIME STAMP</th>
		 </tr>
	</table>	
</section>