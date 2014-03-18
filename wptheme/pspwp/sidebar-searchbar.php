<?php

/*
//	Original IDX method
<div class="sbr s-coll clearfix">

	<script id="divLocal53475_" type="text/javascript" src="http://widgets.diversesolutions.com/Scripts/Dynamic/widgetTLM.js?curDivID=divLocal53475_&curWidth=960&curHeight=200&type=quicksearch&targetDomain=ead8tKOmNFVti8YtUKx7Ip9JBZtQ4nX1YcYX9ZpN9yM=&aid=85189&ssid=11&productType=1&location=1&fields=0123&widgetType=0&muteStyles=true&currentURL=<?php echo get_bloginfo('url'); ?>/search/"></script>

</div><!-- /.sbr -->
*/

//Overwrite IDX method
?>
<div class="sbr s-coll clearfix">
	<div id="div_divLocal53475_" class="showme">
		<div id="QuickSearch_divLocal53475_" class="QuickSearch_div">
			<div id="QuickSearch_divLocal53475__QuickSearch" class="quicksearch_div">
				<table class="quicksearch_table">
					<tbody>
						<tr>
							<td style="position: relative;">
								<input id="search-locations" placeholder="Enter Location, Address, MLS #" class="search-locations" aria-haspopup="true">
							</td>
							<td class="quicksearch_label">BEDS</td>
							<td class="quicksearch_value">
								<select id="quicksearch_beds_list" type="list" class="quicksearch_list">
									<option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option>
								</select>
							</td>
							<td class="quicksearch_label">BATHS</td>
							<td class="quicksearch_value">
								<select id="quicksearch_baths_list" type="list" class="quicksearch_list">
									<option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option>
								</select>
							</td>
							<td class="quicksearch_label">SQ. FT.</td>
							<td class="quicksearch_value">
								<select id="quicksearch_sqft_list" type="list" class="quicksearch_list">
									<option value="0">Any</option><option value="1000">1000+</option><option value="2000">2000+</option><option value="3000">3000+</option><option value="4000">4000+</option><option value="5000">5000+</option><option value="6000">6000+</option>
								</select>
							</td>
							<td class="quicksearch_label quicksearch_label_noheight">PRICE</td>
							<td class="quicksearch_value">
								<select id="quicksearch_minprice_list" type="list" class="quicksearch_list">
									<option value="0">$0</option><option value="100000">$100,000</option><option value="200000">$200,000</option><option value="300000">$300,000</option><option value="400000">$400,000</option><option value="500000">$500,000</option><option value="600000">$600,000</option><option value="700000">$700,000</option><option value="800000">$800,000</option><option value="900000">$900,000</option><option value="1000000">$1,000,000</option><option value="2000000">$2,000,000</option><option value="3000000">$3,000,000</option><option value="4000000">$4,000,000</option><option value="5000000">$5,000,000</option><option value="10000000">$10,000,000</option><option value="20000000">$20,000,000</option><option value="50000000">$50,000,000</option></select></td><td class="quicksearch_label_noheight"> - </td><td class="quicksearch_value"><select id="quicksearch_maxprice_list" type="list" class="quicksearch_list"><option value="0">$0</option><option value="100000">$100,000</option><option value="200000">$200,000</option><option value="300000">$300,000</option><option value="400000">$400,000</option><option value="500000">$500,000</option><option value="600000">$600,000</option><option value="700000">$700,000</option><option value="800000">$800,000</option><option value="900000">$900,000</option><option value="1000000">$1,000,000</option><option value="2000000">$2,000,000</option><option value="3000000">$3,000,000</option><option value="4000000">$4,000,000</option><option value="5000000">$5,000,000</option><option value="10000000">$10,000,000</option><option value="20000000">$20,000,000</option><option value="50000000">$50,000,000</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="4" class="quicksearch_button_cell"><input type="button" id="quicksearch_button" value="Search" class="sbr-sbmt quicksearch_button"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php print '<script id="divLocal53475_" type="text/javascript" src="' . get_template_directory_uri() . '/js/idx_quicksearch.js"></script>'; ?>
</div>

<?php
/*
	<style>
		.smallOption {
			display: none;
		}
		.s-coll .smallOption {
			display: inline-block;
		}
		.s-coll .largeOption {
			display: none;
		}
	</style>

	<?php
	$cleanSearch == NULL;
	if ( isset( $_GET['idx-q-AddressMasks'] ) ) {
		$search_term = $_GET['idx-q-AddressMasks'];
		$cleanSearch = ucwords( preg_replace('/%/', '', $search_term) );
	}
	elseif ( isset( $_GET['idx-q-Cities'] ) ) {
		$search_term = $_GET['idx-q-Cities'];
		$cleanSearch = ucwords( $search_term );
	}
	else {
		$url = $_SERVER['REQUEST_URI'];
		$parts = parse_url( $url );
		$path_parts = explode( '/', $parts['path'] );
		if ( $path_parts[ count( $path_parts ) - 3 ] == 'city' || $path_parts[ count( $path_parts ) - 3 ] == 'zip' ) {
			$search_term = $path_parts[ count( $path_parts ) - 2 ];
			$cleanSearch = ucwords( strtr( urldecode( $search_term ), '-', ' ' ) );
		}
	}
	?>

	<div class="sbr s-coll clearfix">
	    <form method="get" action="<?php bloginfo('url'); ?>/idx/" id="idx-search-form">
	    	<input name="idx-q-Cities" id="idx-q-Cities" class="sbr-srch" type="text" placeholder="Search: City, Zipcode, Address" value="<?=$cleanSearch; ?>" />
	    	<!--input type="hidden" name="idx-q-search-for" id="idx-q-search-for" /-->
	        <div class="smallOption" id="smallOption">
				<label>
		            Property Type:
		        </label>
		        <select class="sbr-type" name="idx-q-PropertyTypes" id="idx-q-PropertyTypes">
		            <option value="" <?php if ( $_GET['idx-q-PropertyTypes'] == '' ) { echo 'selected="selected"'; } ?> >Show All</option>
					<option value="336" <?php if ( $_GET['idx-q-PropertyTypes'] == 336 ) { echo 'selected="selected"'; } ?> >Residential / Detached</option>
					<option value="339" <?php if ( $_GET['idx-q-PropertyTypes'] == 339 ) { echo 'selected="selected"'; } ?> >Residential / All Other Attached</option>
					<option value="341" <?php if ( $_GET['idx-q-PropertyTypes'] == 341 ) { echo 'selected="selected"'; } ?> >Lot / Land</option>
					<option value="343" <?php if ( $_GET['idx-q-PropertyTypes'] == 343 ) { echo 'selected="selected"'; } ?> >Rental</option>
		        </select>
		        <label>
		            Price:
		        </label>
	            <select class="sbr-price" name="idx-q-PriceMin" id="idx-q-PriceMin">
	                <?php idx_show_price_options( 'no min', $_GET['idx-q-PriceMin'] ); ?>
	            </select>
	            <select class="sbr-price" name="idx-q-PriceMax" id="idx-q-PriceMax">
	                <?php idx_show_price_options( 'no max', $_GET['idx-q-PriceMax'] ); ?>
	            </select>
		        <label>
		            Beds:
		        </label>
	            <select class="sbr-beds" name="idx-q-BedsMin" id="idx-q-BedsMin">
	                <option value="" <?php if ( $_GET['idx-q-BedsMin'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
	                <option value="0" <?php if ( $_GET['idx-q-BedsMin'] == '0' ) { echo 'selected="selected"'; } ?> >0</option>
	                <option value="1" <?php if ( $_GET['idx-q-BedsMin'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
	                <option value="2" <?php if ( $_GET['idx-q-BedsMin'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
	                <option value="3" <?php if ( $_GET['idx-q-BedsMin'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
	                <option value="4" <?php if ( $_GET['idx-q-BedsMin'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
	                <option value="5" <?php if ( $_GET['idx-q-BedsMin'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
	            </select>
	            <select class="sbr-beds" name="idx-q-BedsMax" id="idx-q-BedsMax">
	                <option value="" <?php if ( $_GET['idx-q-BedsMax'] == '' ) { echo 'selected="selected"'; } ?> >no max</option>
	                <option value="1" <?php if ( $_GET['idx-q-BedsMax'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
	                <option value="2" <?php if ( $_GET['idx-q-BedsMax'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
	                <option value="3" <?php if ( $_GET['idx-q-BedsMax'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
	                <option value="4" <?php if ( $_GET['idx-q-BedsMax'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
	                <option value="5" <?php if ( $_GET['idx-q-BedsMax'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
	                <option value="6" <?php if ( $_GET['idx-q-BedsMax'] == 6 ) { echo 'selected="selected"'; } ?> >6</option>
	            </select>
			</div>
			<div id="largeOption" class="largeOption">
				<div class="searchBarRow">
					<div class="searchBarCol col1">
						<h3>PROPERTY TYPE</h3>
						<select class="sbr-type" name="idx-q-PropertyTypes">
							<option value="" <?php if ( $_GET['idx-q-PropertyTypes'] == '' ) { echo 'selected="selected"'; } ?> >Show All</option>
							<option value="336" <?php if ( $_GET['idx-q-PropertyTypes'] == 336 ) { echo 'selected="selected"'; } ?> >Residential / Detached</option>
							<option value="339" <?php if ( $_GET['idx-q-PropertyTypes'] == 339 ) { echo 'selected="selected"'; } ?> >Residential / All Other Attached</option>
							<option value="341" <?php if ( $_GET['idx-q-PropertyTypes'] == 341 ) { echo 'selected="selected"'; } ?> >Lot / Land</option>
							<option value="343" <?php if ( $_GET['idx-q-PropertyTypes'] == 343 ) { echo 'selected="selected"'; } ?> >Rental</option>
				        </select>
					</div>
					<div class="searchBarCol col2">
						<h3>HOME FACTS</h3>
						<div class="eachField">
							<div class="labelField">
								<label>Beds:</label>
							</div>
							<div class="inputFieldMin">
		                        <select class="select_small" name="idx-q-BedsMin" id="idx-q-BedsMin">
		                            <option value="" <?php if ( $_GET['idx-q-BedsMin'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
					                <option value="0" <?php if ( $_GET['idx-q-BedsMin'] == 0 ) { echo 'selected="selected"'; } ?> >0</option>
					                <option value="1" <?php if ( $_GET['idx-q-BedsMin'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
					                <option value="2" <?php if ( $_GET['idx-q-BedsMin'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
					                <option value="3" <?php if ( $_GET['idx-q-BedsMin'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
					                <option value="4" <?php if ( $_GET['idx-q-BedsMin'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
					                <option value="5" <?php if ( $_GET['idx-q-BedsMin'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
		                        </select>
		                        <span class="selectDesc">min</span>
							</div>
	                        <div class="smallselect_mid">
	                            <span class="selectSep">-</span>
	                        </div>
							<div class="inputFieldMax">
		                        <select class="select_small" name="idx-q-BedsMax" id="idx-q-BedsMax">
		                            <option value="" <?php if ( $_GET['idx-q-BedsMax'] == '' ) { echo 'selected="selected"'; } ?> >no max</option>
					                <option value="1" <?php if ( $_GET['idx-q-BedsMax'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
					                <option value="2" <?php if ( $_GET['idx-q-BedsMax'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
					                <option value="3" <?php if ( $_GET['idx-q-BedsMax'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
					                <option value="4" <?php if ( $_GET['idx-q-BedsMax'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
					                <option value="5" <?php if ( $_GET['idx-q-BedsMax'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
					                <option value="6" <?php if ( $_GET['idx-q-BedsMax'] == 6 ) { echo 'selected="selected"'; } ?> >6</option>
		                        </select>
		                        <span class="selectDesc">max</span>
							</div>
							<div class="clear"></div>		
						</div>
						<div class="eachField">
							<div class="labelField">
								<label>Baths:</label>
							</div>
							<div class="inputFieldMin">
		                        <select class="select_small" name="idx-q-BathsMin" id="idx-q-BathsMin">
		                            <option value="" <?php if ( $_GET['idx-q-BathsMin'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
		                            <option value="1" <?php if ( $_GET['idx-q-BathsMin'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
		                            <option value="2" <?php if ( $_GET['idx-q-BathsMin'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
		                            <option value="3" <?php if ( $_GET['idx-q-BathsMin'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
		                            <option value="4" <?php if ( $_GET['idx-q-BathsMin'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
		                            <option value="5" <?php if ( $_GET['idx-q-BathsMin'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
		                        </select>
		                        <span class="selectDesc">min</span>
							</div>
	                        <div class="smallselect_mid">
	                            <span class="selectSep">-</span>
	                        </div>
							<div class="inputFieldMax">
		                        <select class="select_small" name="idx-q-BathsMax" id="idx-q-BathsMax">
		                            <option value="" <?php if ( $_GET['idx-q-BathsMax'] == '' ) { echo 'selected="selected"'; } ?> >no max</option>
									<option value="1" <?php if ( $_GET['idx-q-BathsMax'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
		                            <option value="2" <?php if ( $_GET['idx-q-BathsMax'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
		                            <option value="3" <?php if ( $_GET['idx-q-BathsMax'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
		                            <option value="4" <?php if ( $_GET['idx-q-BathsMax'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
		                            <option value="5" <?php if ( $_GET['idx-q-BathsMax'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
		                        </select>
		                        <span class="selectDesc">max</span>
							</div>
							<div class="clear"></div>		
						</div>
						<div class="eachField">
							<div class="labelField">
								<label>Price Range:</label>
							</div>
							<div class="inputFieldMin">
	                        <select class="select_medium" name="idx-q-PriceMin" id="idx-q-PriceMin">
	                            <option value="" <?php if ( $_GET['idx-q-PriceMin'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
	                            <option value="200000" <?php if ( $_GET['idx-q-PriceMin'] == 200000 ) { echo 'selected="selected"'; } ?> >200K</option>
	                            <option value="300000" <?php if ( $_GET['idx-q-PriceMin'] == 300000 ) { echo 'selected="selected"'; } ?> >300K</option>
	                            <option value="400000" <?php if ( $_GET['idx-q-PriceMin'] == 400000 ) { echo 'selected="selected"'; } ?> >400K</option>
	                            <option value="500000" <?php if ( $_GET['idx-q-PriceMin'] == 500000 ) { echo 'selected="selected"'; } ?> >500K</option>
	                            <option value="700000" <?php if ( $_GET['idx-q-PriceMin'] == 700000 ) { echo 'selected="selected"'; } ?> >700K</option>
	                            <option value="1000000" <?php if ( $_GET['idx-q-PriceMin'] == 1000000 ) { echo 'selected="selected"'; } ?> >1M</option>
	                            <option value="2000000" <?php if ( $_GET['idx-q-PriceMin'] == 2000000 ) { echo 'selected="selected"'; } ?> >2M</option>
	                            <option value="3000000" <?php if ( $_GET['idx-q-PriceMin'] == 3000000 ) { echo 'selected="selected"'; } ?> >3M</option>
	                            <option value="4000000" <?php if ( $_GET['idx-q-PriceMin'] == 4000000 ) { echo 'selected="selected"'; } ?> >4M</option>
	                            <option value="5000000" <?php if ( $_GET['idx-q-PriceMin'] == 5000000 ) { echo 'selected="selected"'; } ?> >5M</option>
	                        </select>
		                        <span class="selectDesc">min</span>
							</div>
	                        <div class="smallselect_mid">
	                            <span class="selectSep">-</span>
	                        </div>
							<div class="inputFieldMax">
		                        <select class="select_medium" name="idx-q-PriceMax" id="idx-q-PriceMax">
		                            <option value="">no max</option>
		                            <option value="300000" <?php if ( $_GET['idx-q-PriceMax'] == 300000 ) { echo 'selected="selected"'; } ?> >300K</option>
		                            <option value="400000" <?php if ( $_GET['idx-q-PriceMax'] == 400000 ) { echo 'selected="selected"'; } ?> >400K</option>
		                            <option value="500000" <?php if ( $_GET['idx-q-PriceMax'] == 500000 ) { echo 'selected="selected"'; } ?> >500K</option>
		                            <option value="700000" <?php if ( $_GET['idx-q-PriceMax'] == 700000 ) { echo 'selected="selected"'; } ?> >700K</option>
		                            <option value="1000000" <?php if ( $_GET['idx-q-PriceMax'] == 1000000 ) { echo 'selected="selected"'; } ?> >1M</option>
		                            <option value="2000000" <?php if ( $_GET['idx-q-PriceMax'] == 2000000 ) { echo 'selected="selected"'; } ?> >2M</option>
		                            <option value="3000000" <?php if ( $_GET['idx-q-PriceMax'] == 3000000 ) { echo 'selected="selected"'; } ?> >3M</option>
		                            <option value="4000000" <?php if ( $_GET['idx-q-PriceMax'] == 4000000 ) { echo 'selected="selected"'; } ?> >4M</option>
		                            <option value="5000000" <?php if ( $_GET['idx-q-PriceMax'] == 5000000 ) { echo 'selected="selected"'; } ?> >5M</option>
		                        </select>
		                        <span class="selectDesc">max</span>
							</div>
							<div class="clear"></div>		
						</div>
						<div class="eachField">
							<div class="labelField">
								<label>Sq. Feet:</label>
							</div>
							<div class="inputFieldMin">
		                        <select class="select_small" name="idx-q-ImprovedSqFtMin" id="idx-q-ImprovedSqFtMin">
		                            <option value="" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
									<option value="100" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 100 ) { echo 'selected="selected"'; } ?> >100</option>
		                            <option value="200" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 200 ) { echo 'selected="selected"'; } ?> >200</option>
		                            <option value="300" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 300 ) { echo 'selected="selected"'; } ?> >300</option>
		                            <option value="400" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 400 ) { echo 'selected="selected"'; } ?> >400</option>
		                            <option value="500" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 500 ) { echo 'selected="selected"'; } ?> >500</option>
									<option value="700" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 700 ) { echo 'selected="selected"'; } ?> >700</option>
									<option value="1000" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 1000 ) { echo 'selected="selected"'; } ?> >1000</option>
									<option value="1500" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 1500 ) { echo 'selected="selected"'; } ?> >1500</option>
									<option value="2000" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 2000 ) { echo 'selected="selected"'; } ?> >2000</option>
									<option value="3000" <?php if ( $_GET['idx-q-ImprovedSqFtMin'] == 3000 ) { echo 'selected="selected"'; } ?> >3000</option>
		                        </select>
		                        <span class="selectDesc">min</span>
							</div>
	                        <div class="smallselect_mid">
	                            <span class="selectSep">-</span>
	                        </div>
							<div class="inputFieldMax">
		                        <select class="select_small" name="idx-q-ImprovedSqFtMax" id="idx-q-ImprovedSqFtMax">
		                            <option value="" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
									<option value="100" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 100 ) { echo 'selected="selected"'; } ?> >100</option>
		                            <option value="200" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 200 ) { echo 'selected="selected"'; } ?> >200</option>
		                            <option value="300" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 300 ) { echo 'selected="selected"'; } ?> >300</option>
		                            <option value="400" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 400 ) { echo 'selected="selected"'; } ?> >400</option>
		                            <option value="500" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 500 ) { echo 'selected="selected"'; } ?> >500</option>
									<option value="700" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 700 ) { echo 'selected="selected"'; } ?> >700</option>
									<option value="1000" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 1000 ) { echo 'selected="selected"'; } ?> >1000</option>
									<option value="1500" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 1500 ) { echo 'selected="selected"'; } ?> >1500</option>
									<option value="2000" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 2000 ) { echo 'selected="selected"'; } ?> >2000</option>
									<option value="3000" <?php if ( $_GET['idx-q-ImprovedSqFtMax'] == 3000 ) { echo 'selected="selected"'; } ?> >3000</option>
		                        </select>
		                        <span class="selectDesc">max</span>
							</div>
							<div class="clear"></div>		
						</div>
						<div class="eachField">
							<div class="labelField">
								<label>Lot Size:</label>
							</div>
							<div class="inputFieldMin">
		                        <select class="select_small" name="idx-q-LotSqFtMin" id="idx-q-LotSqFtMin">
		                            <option value="" <?php if ( $_GET['idx-q-LotSqFtMin'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
									<option value="100" <?php if ( $_GET['idx-q-LotSqFtMin'] == 100 ) { echo 'selected="selected"'; } ?> >100</option>
		                            <option value="200" <?php if ( $_GET['idx-q-LotSqFtMin'] == 200 ) { echo 'selected="selected"'; } ?> >200</option>
		                            <option value="300" <?php if ( $_GET['idx-q-LotSqFtMin'] == 300 ) { echo 'selected="selected"'; } ?> >300</option>
		                            <option value="400" <?php if ( $_GET['idx-q-LotSqFtMin'] == 400 ) { echo 'selected="selected"'; } ?> >400</option>
		                            <option value="500" <?php if ( $_GET['idx-q-LotSqFtMin'] == 500 ) { echo 'selected="selected"'; } ?> >500</option>
									<option value="700" <?php if ( $_GET['idx-q-LotSqFtMin'] == 700 ) { echo 'selected="selected"'; } ?> >700</option>
									<option value="1000" <?php if ( $_GET['idx-q-LotSqFtMin'] == 1000 ) { echo 'selected="selected"'; } ?> >1000</option>
									<option value="1500" <?php if ( $_GET['idx-q-LotSqFtMin'] == 1500 ) { echo 'selected="selected"'; } ?> >1500</option>
									<option value="2000" <?php if ( $_GET['idx-q-LotSqFtMin'] == 2000 ) { echo 'selected="selected"'; } ?> >2000</option>
									<option value="3000" <?php if ( $_GET['idx-q-LotSqFtMin'] == 3000 ) { echo 'selected="selected"'; } ?> >3000</option>
		                        </select>
		                        <span class="selectDesc">min</span>
							</div>
	                        <div class="smallselect_mid">
	                            <span class="selectSep">-</span>
	                        </div>
							<div class="inputFieldMax">
		                        <select class="select_small" name="idx-q-LotSqFtMax" id="idx-q-LotSqFtMax">
		                            <option value="" <?php if ( $_GET['idx-q-LotSqFtMax'] == '' ) { echo 'selected="selected"'; } ?> >no min</option>
									<option value="100" <?php if ( $_GET['idx-q-LotSqFtMax'] == 100 ) { echo 'selected="selected"'; } ?> >100</option>
		                            <option value="200" <?php if ( $_GET['idx-q-LotSqFtMax'] == 200 ) { echo 'selected="selected"'; } ?> >200</option>
		                            <option value="300" <?php if ( $_GET['idx-q-LotSqFtMax'] == 300 ) { echo 'selected="selected"'; } ?> >300</option>
		                            <option value="400" <?php if ( $_GET['idx-q-LotSqFtMax'] == 400 ) { echo 'selected="selected"'; } ?> >400</option>
		                            <option value="500" <?php if ( $_GET['idx-q-LotSqFtMax'] == 500 ) { echo 'selected="selected"'; } ?> >500</option>
									<option value="700" <?php if ( $_GET['idx-q-LotSqFtMax'] == 700 ) { echo 'selected="selected"'; } ?> >700</option>
									<option value="1000" <?php if ( $_GET['idx-q-LotSqFtMax'] == 1000 ) { echo 'selected="selected"'; } ?> >1000</option>
									<option value="1500" <?php if ( $_GET['idx-q-LotSqFtMax'] == 1500 ) { echo 'selected="selected"'; } ?> >1500</option>
									<option value="2000" <?php if ( $_GET['idx-q-LotSqFtMax'] == 2000 ) { echo 'selected="selected"'; } ?> >2000</option>
									<option value="3000" <?php if ( $_GET['idx-q-LotSqFtMax'] == 3000 ) { echo 'selected="selected"'; } ?> >3000</option>
		                        </select>
		                        <span class="selectDesc">max</span>
							</div>
							<div class="clear"></div>		
						</div>	
					</div>
					<div class="searchBarCol col3">
						<h3>LISTING FACTS</h3>
						<div class="eachField">
							<div class="labelField">
								<label>Days on Market</label>
							</div>
							<div class="selectField">
								<select class="select_medium" name="idx-q-DaysOnMarketMin" id="idx-q-DaysOnMarketMin">
		                            <option value="" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == '' ) { echo 'selected="selected"'; } ?> >No Max</option>
		                            <option value="1" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 1 ) { echo 'selected="selected"'; } ?> >1</option>
		                            <option value="2" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 2 ) { echo 'selected="selected"'; } ?> >2</option>
									<option value="3" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 3 ) { echo 'selected="selected"'; } ?> >3</option>
									<option value="4" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 4 ) { echo 'selected="selected"'; } ?> >4</option>
									<option value="5" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 5 ) { echo 'selected="selected"'; } ?> >5</option>
									<option value="10" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 10 ) { echo 'selected="selected"'; } ?> >10</option>
									<option value="15" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 15 ) { echo 'selected="selected"'; } ?> >15</option>
									<option value="20" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 20 ) { echo 'selected="selected"'; } ?> >20</option>
									<option value="25" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 25 ) { echo 'selected="selected"'; } ?> >25</option>
									<option value="30" <?php if ( $_GET['idx-q-DaysOnMarketMin'] == 30 ) { echo 'selected="selected"'; } ?> >30</option>
		                        </select>
							</div>
							<div class="clear"></div>		
						</div>
						<div class="eachField">
							<div class="labelField">
								<label>Status</label>
							</div>
							<div class="selectField">
								<select class="select_medium" name="idx-q-status" id="idx-q-status">
		                            <option value="" <?php if ( $_GET['idx-q-status'] == '' ) { echo 'selected="selected"'; } ?> >Any Status</option>
		                            <option value="1" <?php if ( $_GET['idx-q-status'] == 1 ) { echo 'selected="selected"'; } ?> >Active Listing</option>
		                            <option value="2" <?php if ( $_GET['idx-q-status'] == 2 ) { echo 'selected="selected"'; } ?> >Sold</option>
		                        </select>
							</div>	
							<div class="clear"></div>	
						</div>
						<div class="clear"></div>	
					</div>
					<div class="clear"></div>		
				</div>
			</div>	
	        <a class="sbr-opt" href="#">More Options</a>
	        <input class="sbr-sbmt" type="submit" value="Search">
	        </div><!-- /sbr-home-facts -->
	    </form>
			<div class="hidden" style="display:none;">
				<div id="smallOptionStore">
				</div>
				<div id="largeOptionStore">
				</div>	
			</div>
	</div><!-- /.sbr -->
*/
?>