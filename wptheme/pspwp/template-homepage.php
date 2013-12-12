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

                        <?php //dynamic_sidebar('search-widget'); ?>

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

