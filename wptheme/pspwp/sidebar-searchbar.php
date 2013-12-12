<style>

	.smallOption

	{

		display: none;

	}

	

	.s-coll .smallOption

	{

		display: inline-block;

	}

	

	.s-coll .largeOption

	{

		display: none;

	}

	

</style>

<div class="sbr s-coll clearfix">

    <form method="get" action="<?php bloginfo('url'); ?>/idx/" id="idx-search-form">

    	<input name="idx-q-Cities" id="idx-q-Cities" class="sbr-srch" type="text" placeholder="Search: City, Zipcode, Address" />

        <div class="smallOption" id="smallOption">

			<label>

	            Property Type:

	        </label>

	        <select class="sbr-type" name="idx-q-PropertyTypes" id="idx-q-PropertyTypes">

	            <option value="">Show All</option>

				<option value="336">Residential / Detached</option>

				<option value="339">Residential / All Other Attached</option>

				<option value="341">Lot / Land</option>

				<option value="343">Rental</option>

	        </select>

	        <label>

	            Price:

	        </label>

            <select class="sbr-price" name="idx-q-PriceMin" id="idx-q-PriceMin">

                <?php idx_show_price_options( 'no min'); ?>

            </select>

            <select class="sbr-price" name="idx-q-PriceMax" id="idx-q-PriceMax">

                <?php idx_show_price_options( 'no max'); ?>

            </select>

	        <label>

	            Beds:

	        </label>

            <select class="sbr-beds" name="idx-q-BedsMin" id="idx-q-BedsMin">

                <option value="">no min</option>

                <option value="0">0</option>

                <option value="1">1</option>

                <option value="2">2</option>

                <option value="3">3</option>

                <option value="4">4</option>

                <option value="5">5</option>

            </select>

            <select class="sbr-beds" name="idx-q-BedsMax" id="idx-q-BedsMax">

                <option value="">no max</option>

                <option value="1">1</option>

                <option value="2">2</option>

                <option value="3">3</option>

                <option value="4">4</option>

                <option value="5">5</option>

                <option value="6">6</option>

            </select>

		</div>

		<div id="largeOption" class="largeOption">

			<div class="searchBarRow">

				<div class="searchBarCol col1">

					<h3>PROPERTY TYPE</h3>

					<select class="sbr-type" name="idx-q-PropertyTypes">

			            <option value="">Show All</option>

						<option value="336">Residential / Detached</option>

						<option value="339">Residential / All Other Attached</option>

						<option value="343">Rental</option>

						<option value="341">Lot / Land</option>

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

	                            <option value="">no min</option>

	                            <option value="1">1</option>

	                            <option value="2">2</option>

	                            <option value="3">3</option>

	                            <option value="4">4</option>

	                            <option value="5">5</option>

	                        </select>

	                        <span class="selectDesc">min</span>

						</div>

                        <div class="smallselect_mid">

                            <span class="selectSep">-</span>

                        </div>

						<div class="inputFieldMax">

	                        <select class="select_small" name="idx-q-BedsMax" id="idx-q-BedsMax">

	                            <option value="">no max</option>

								<option value="1">1</option>

	                            <option value="2">2</option>

	                            <option value="3">3</option>

	                            <option value="4">4</option>

	                            <option value="5">5</option>

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

	                            <option value="">no min</option>

	                            <option value="1">1</option>

	                            <option value="2">2</option>

	                            <option value="3">3</option>

	                            <option value="4">4</option>

	                            <option value="5">5</option>

	                        </select>

	                        <span class="selectDesc">min</span>

						</div>

                        <div class="smallselect_mid">

                            <span class="selectSep">-</span>

                        </div>

						<div class="inputFieldMax">

	                        <select class="select_small" name="idx-q-BathsMax" id="idx-q-BathsMax">

	                            <option value="">no max</option>

								<option value="1">1</option>

	                            <option value="2">2</option>

	                            <option value="3">3</option>

	                            <option value="4">4</option>

	                            <option value="5">5</option>

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

                            <option value="">no min</option>

                            <option value="200000">200K</option>

                            <option value="300000">300K</option>

                            <option value="400000">400K</option>

                            <option value="500000">500K</option>

                            <option value="700000">700K</option>

                            <option value="1000000">1M</option>

                            <option value="2000000">2M</option>

                            <option value="3000000">3M</option>

                            <option value="4000000">4M</option>

                            <option value="5000000">5M</option>

                        </select>

	                        <span class="selectDesc">min</span>

						</div>

                        <div class="smallselect_mid">

                            <span class="selectSep">-</span>

                        </div>

						<div class="inputFieldMax">

	                        <select class="select_medium" name="idx-q-PriceMax" id="idx-q-PriceMax">

	                            <option value="">no max</option>

	                            <option value="300000">300K</option>

	                            <option value="400000">400K</option>

	                            <option value="500000">500K</option>

	                            <option value="700000">700K</option>

	                            <option value="1000000">1M</option>

	                            <option value="2000000">2M</option>

	                            <option value="3000000">3M</option>

	                            <option value="4000000">4M</option>

	                            <option value="5000000">5M</option>

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

	                            <option value="">no min</option>

								<option value="100">100</option>

	                            <option value="200">200</option>

	                            <option value="300">300</option>

	                            <option value="400">400</option>

	                            <option value="500">500</option>

								<option value="700">700</option>

								<option value="1000">1000</option>

								<option value="1500">1500</option>

								<option value="2000">2000</option>

								<option value="3000">3000</option>

	                        </select>

	                        <span class="selectDesc">min</span>

						</div>

                        <div class="smallselect_mid">

                            <span class="selectSep">-</span>

                        </div>

						<div class="inputFieldMax">

	                        <select class="select_small" name="idx-q-ImprovedSqFtMax" id="idx-q-ImprovedSqFtMax">

	                            <option value="">no max</option>

								<option value="100">100</option>

	                            <option value="200">200</option>

	                            <option value="300">300</option>

	                            <option value="400">400</option>

	                            <option value="500">500</option>

								<option value="700">700</option>

								<option value="1000">1000</option>

								<option value="1500">1500</option>

								<option value="2000">2000</option>

								<option value="3000">3000</option>

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

	                            <option value="">no min</option>

								<option value="100">100</option>

	                            <option value="200">200</option>

	                            <option value="300">300</option>

	                            <option value="400">400</option>

	                            <option value="500">500</option>

								<option value="700">700</option>

								<option value="1000">1000</option>

								<option value="1500">1500</option>

								<option value="2000">2000</option>

								<option value="3000">3000</option>

	                        </select>

	                        <span class="selectDesc">min</span>

						</div>

                        <div class="smallselect_mid">

                            <span class="selectSep">-</span>

                        </div>

						<div class="inputFieldMax">

	                        <select class="select_small" name="idx-q-LotSqFtMax" id="idx-q-LotSqFtMax">

	                            <option value="">no max</option>

								<option value="100">100</option>

	                            <option value="200">200</option>

	                            <option value="300">300</option>

	                            <option value="400">400</option>

	                            <option value="500">500</option>

								<option value="700">700</option>

								<option value="1000">1000</option>

								<option value="1500">1500</option>

								<option value="2000">2000</option>

								<option value="3000">3000</option>

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

	                            <option value="">No Max</option>

	                            <option value="1">1</option>

	                            <option value="2">2</option>

								<option value="3">3</option>

								<option value="4">4</option>

								<option value="5">5</option>

								<option value="10">10</option>

								<option value="15">15</option>

								<option value="20">20</option>

								<option value="25">25</option>

								<option value="30">30</option>

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

	                            <option value="">Any Status</option>

	                            <option value="1">Active Listing</option>

	                            <option value="2">Sold</option>

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

