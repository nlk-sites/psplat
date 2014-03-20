<?php 

/*

 * Template Name: Homepage Template

 *

 *

 */



get_header();

?>

<div id="content">

    <div id="inner-content" class="wrap clearfix">

        <div id="main" class="eightcol first clearfix" role="main">

            <div id="home_top_container">

                <div id="home_top_right">

                    <div id="qsrch">

                        <img id="qsrch_title" src="<?php bloginfo('template_url'); ?>/images/start_here.png" width="145" height="28">

                        <div id="div_divLocal3777e_" class="showme" >

                            <div id="QuickSearch_divLocal3777e_" style="padding: 0px;">

                                <div id="QuickSearch_divLocal3777e__QuickSearch" style="width: 240px; background-color: white; margin: 0px auto;">

                                    <table style="width: 100%; height: 100%;">

                                        <tbody>

                                            <tr>

                                                <th style="font-family: arial, sans-serif; font-size: 16px; font-weight: bold; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1px; text-align: left; width: 150px;">Location</th>

                                            </tr>

                                            <tr>

                                                <td style="position: relative;">

                                                    <input id="search-locations" placeholder="Enter Location, Address, MLS #" class="search-locations" aria-haspopup="true" style="width: 100%; font-family: arial, sans-serif; font-size: 12px; padding: 4px 0px; border: 1px solid gray;">

                                                </td>

                                            </tr>

                                            <tr>

                                                <td>
                                                    
                                                    <table style="">

                                                        <tbody>

                                                            <tr>

                                                                <th colspan="3" style="font-family: arial, sans-serif; font-size: 16px; font-weight: bold; border-bottom-style: solid; border-bottom-color: black; border-bottom-width: 1px; text-align: left;">Property</th>

                                                            </tr>

                                                            <tr>

                                                                <td style="font-family: arial, sans-serif; font-size: 11px; width: 70px; text-align: left;">BEDS</td>

                                                                <td style="font-family: arial, sans-serif; font-size: 11px; width: 70px; text-align: left;">BATHS</td>

                                                            </tr>

                                                        </tbody>

                                                    </table>
                                                
                                                </td>

                                            </tr>

                                            <tr>

                                                <td>

                                                    <table style="padding: 0px; border-spacing: 0px;">

                                                        <tbody>

                                                            <tr>

                                                                <td style="font-family: arial, sans-serif; font-size: 16px; width: 70px; vertical-align: top;">

                                                                    <select id="quicksearch_beds_list" type="list" style="font-family: arial, sans-serif; font-size: 12px; padding: 4px;">
                                                                        
                                                                        <option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option>

                                                                    </select>

                                                                </td>

                                                                <td style="font-family: arial, sans-serif; font-size: 16px; width: 70px; vertical-align: top;">

                                                                    <select id="quicksearch_baths_list" type="list" style="font-family: arial, sans-serif; font-size: 12px; padding: 4px;">
                                                                        
                                                                        <option value="1">1+</option><option value="2">2+</option><option value="3">3+</option><option value="4">4+</option><option value="5">5+</option><option value="6">6+</option>

                                                                    </select>

                                                                </td>

                                                                <td style="font-family: arial, sans-serif; font-size: 16px; width: 90px; vertical-align: top;"></td>

                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td>

                                                    <table style="padding: 0px; border-spacing: 0px;">

                                                        <tbody>

                                                            <tr>

                                                                <td style="font-family: arial, sans-serif; font-size: 11px;">PRICE</td>

                                                            </tr>

                                                            <tr>

                                                                <td style="font-family: arial, sans-serif; font-size: 16px; vertical-align: top;">

                                                                    <select id="quicksearch_minprice_list" type="list" style="font-family: arial, sans-serif; font-size: 12px; padding: 4px;">
                                                
                                                                        <option value="0">No Min</option><option value="100000">$100,000</option><option value="200000">$200,000</option><option value="300000">$300,000</option><option value="400000">$400,000</option><option value="500000">$500,000</option><option value="600000">$600,000</option><option value="700000">$700,000</option><option value="800000">$800,000</option><option value="900000">$900,000</option><option value="1000000">$1,000,000</option><option value="2000000">$2,000,000</option><option value="3000000">$3,000,000</option><option value="4000000">$4,000,000</option><option value="5000000">$5,000,000</option><option value="10000000">$10,000,000</option><option value="20000000">$20,000,000</option><option value="50000000">$50,000,000</option>
                    
                                                                    </select>

                                                                </td>

                                                                <td style="font-family: arial, sans-serif; font-size: 11px;"> - </td>

                                                                <td style="font-family: arial, sans-serif; font-size: 16px; vertical-align: top;">

                                                                    <select id="quicksearch_maxprice_list" type="list" style="font-family: arial, sans-serif; font-size: 12px; padding: 4px;">
                                            
                                                                        <option value="0">No Max</option><option value="100000">$100,000</option><option value="200000">$200,000</option><option value="300000">$300,000</option><option value="400000">$400,000</option><option value="500000">$500,000</option><option value="600000">$600,000</option><option value="700000">$700,000</option><option value="800000">$800,000</option><option value="900000">$900,000</option><option value="1000000">$1,000,000</option><option value="2000000">$2,000,000</option><option value="3000000">$3,000,000</option><option value="4000000">$4,000,000</option><option value="5000000">$5,000,000</option><option value="10000000">$10,000,000</option><option value="20000000">$20,000,000</option><option value="50000000">$50,000,000</option>
                                
                                                                    </select>

                                                                </td>

                                                            </tr>

                                                        </tbody>

                                                    </table>

                                                </td>

                                            </tr>

                                            <tr>

                                                <td colspan="4" style="text-align: right; padding: 5px;">

                                                    <input type="button" id="quicksearch_button" value="Search for Properties" style="font-family: arial, sans-serif; font-size: 12px; font-weight: bold; color: white; background-color: rgb(39, 128, 230); width: 170px; height: 32px; border: 1px solid black;">

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                        <script id="divLocal3777e_" type="text/javascript" src="http://widgets.diversesolutions.com/Scripts/Dynamic/widgetTLM.js?curDivID=divLocal3777e_&curWidth=470&curHeight=200&type=quicksearch&targetDomain=ead8tKOmNFVti8YtUKx7IvAuBhuhcfwvTR9x0lZYrqo=&aid=85189&ssid=11&productType=1&location=1&fields=013&widgetType=1&muteStyles=false&currentURL=http://www.psplatinum.com/search/"></script>

                        <?php //dynamic_sidebar('search-widget'); ?>

						<?php /*

                        <form method="get" action="<?php bloginfo('url'); ?>/idx/" id="idx-search-form">

                            <div class="qsrch_row">

                                <div class="qsrch_field ui-widget">

                                    <input name="idx-q-Cities" id="idx-q-Cities" class="qsrch_srch cityText" type="text" placeholder="Address, City, or Zip" />

                                </div>

                            </div>

							<div class="qsrch_row">

                                <div class="label_field">

                                	<label>Price Range</label>

								</div>

								<div class="qsrch_field">

                                    <div class="xselect_medium">

                                        <select class="select_medium" name="idx-q-PriceMin" id="idx-q-PriceMin">

                                            <?php idx_show_price_options( 'no minimum' ); ?>

										</select>	

                                    </div>

                                </div>

                                <div class="qsrch_field">

                                    <div class="xselect_medium">

                                        <select class="select_medium" name="idx-q-PriceMax" id="idx-q-PriceMax">

                                            <?php idx_show_price_options( 'no maximum' ); ?>
                                            
										</select>

                                    </div>

                                </div>

                            </div>

                            <div class="qsrch_row">

                                <div class="qsrch_field">

                                    <div class="xselect_medium">

                                    	<label>Beds</label>

                                        <div class="smallselect_left">

                                        	<select class="select_small" name="idx-q-BedsMin" id="idx-q-BedsMin">

                                        		<option value="">no min</option>

	                                        	<option value="1">1</option>

												<option value="2">2</option>

												<option value="3">3</option>

												<option value="4">4</option>

												<option value="5">5</option>

												<option value="6">6</option>

	                                        </select>

											<span class="selectDesc">min</span>	

                                        </div>

										<div class="smallselect_mid">

											<span class="selectSep">-</span>

										</div>

										<div class="smallselect_right">

                                        	<select class="select_small" name="idx-q-BedsMax" id="idx-q-BedsMax">

	                                        	<option value="">no max</option>

												<option value="1">1</option>

												<option value="2">2</option>

												<option value="3">3</option>

												<option value="4">4</option>

												<option value="5">5</option>

												<option value="6">6</option>

	                                        </select>

											<span class="selectDesc">max</span>	

                                        </div>

										<div class="clear"></div>		

                                    </div>

                                </div>

								<div class="qsrch_field" style="margin-left: 10px;">

                                    <div class="xselect_medium">

                                    	<label>Baths</label>

                                        <div class="smallselect_left">

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

										<div class="smallselect_right">

                                        	<select class="select_small" name="idx-q-BathsMax" id="idx-q-BathsMax">

	                                        	<option value="">no max</option>

												<option value="1">1</option>

												<option value="2">2</option>

												<option value="3">3</option>

												<option value="4">4</option>

												<option value="5">5</option>

                                                <option value="6">6</option>

	                                        </select>

											<span class="selectDesc">max</span>	

                                        </div>

										<div class="clear"></div>		

                                    </div>

                                </div>

                            </div>

                            <div class="qsrch_row">

                                <div class="qsrch_field">

                                    <div class="xselect_long">

                                    	<label>Property Type</label>

                                        <select class="select_long" name="idx-q-PropertyTypes" id="idx-q-PropertyTypes">

                                            <option value="">please select</option>

                                            <option value="336">Residential / Detached</option>

											<option value="339">Residential / All Other Attached</option>

											<option value="343">Rental</option>

											<option value="341">Lot / Land</option>

										</select>

                                    </div>

                                </div>

                            </div>

                            <div class="qsrch_row">

                                <div class="qsrch_field">

                                    <input class="search_bttn" name="search" type="submit" value="go">

                                </div>

                            </div>

                        </form>

                        */ ?>

                    </div>

                </div>

                <div id="splash-container">

                    <div class="slideshow-wrap" id="jqb_object">

                        <div class="jqb_slides slider-container">

                            <!-- Slide images -->

                            <div class="slider-container-inner">

                                <?php

								$args = array('post_type' => 'slider', 'posts_per_page' => 4, 'order_by' => 'menu_order', 'order' => 'asc');

								$the_query = new WP_Query( $args );

								$count = 0;

								?>

								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

									<?php

										$count += 1;

										$imagesrc = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'slider-image' );

									?>

									<div class="slide<?php echo $count; ?>" style="background-image: url('<?php echo $imagesrc[0]; ?>');">

										<?php the_content(); ?>

									</div>

								<?php endwhile;  wp_reset_postdata(); ?>

                            </div>

                        </div>

                        <div class="slideshow-progress-bar-wrap">

                            <div class="highlight-bar">

                                <div class="edge left">

                                </div>

                                <div class="edge right">

                                </div>

                            </div>

                            <div class="slideshow-progress-bar">

                            </div>

                        </div>

                    </div>

                    <div class="clearfix">

                    </div>

                    <?php get_sidebar("tabbedlisting"); ?>

                    <div class="clearfix">

                    </div>

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>

                    	<?php the_content(); ?>

                	<?php endwhile; ?>

                <?php else : ?>

                <article id="post-not-found" class="hentry clearfix">

                    <header class="article-header">

                        <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>

                    </header>

                    <section class="entry-content">

                        <p>

<?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?>

                        </p>

                    </section>

                    <footer class="article-footer">

                        <p>

<?php _e("This is the error message in the index.php template.", "bonestheme"); ?>

                        </p>

                    </footer>

                </article>

                <?php endif; ?>

                <div id="welcome_box_right" style="position: relative;">

                	<h1 class="twitterOverlay"><a href="https://twitter.com/psplatinum" target="_blank">Follow</a></h1>

                	<?php dynamic_sidebar('buys_of_the_week'); ?>

                    <?php /* ?>

					<div class="newsbox">

						<div class="headingbox">

							<h3>News Updates</h3>

							<a href="<?php bloginfo('url'); ?>/blog" class="viewall">View All</a>

							<div class="clearfix"></div>

						</div>

						<div class="newsList">

							<?php

								$args = array('post_type' => 'post', 'posts_per_page' => 6);

								$the_query = new WP_Query( $args );

							?>

							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

								<div class="eachNews">

									<h5 class="headingtitle"><span><?php the_time('m.d.y'); ?></span> - posted by, <?php the_author(); ?></h5>

									<p><?php echo get_the_title(); ?>&nbsp;<a class="readmore" href="<?php the_permalink(); ?>">Read More</a></p>

								</div>

							<?php endwhile;  wp_reset_postdata(); ?>	

						</div>

					</div><?php */ ?>

                </div>

            </div><!-- end of home_top_container -->

        </div><!-- end of #main -->

        <div class="clearfix">

        </div>

    </div>

    <!-- end #main -->

</div>

<!-- end #inner-content -->

</div>

<!-- end #content -->

<?php get_footer(); ?>

