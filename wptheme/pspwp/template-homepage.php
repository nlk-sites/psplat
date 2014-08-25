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

                        <script id="divLocala9456_" type="text/javascript" src="http://widgets.diversesolutions.com/Scripts/Dynamic/widgetTLM.js?curDivID=divLocala9456_&curWidth=470&curHeight=200&type=quicksearch&targetDomain=FaFSw2D+etsEohaGyd9djQ==&aid=85189&ssid=11&productType=1&location=1&fields=013&widgetType=1&muteStyles=false&currentURL=http://www.psplatinum.com/search/"></script>

                        <p id="home-login-reg"><img src="http://cdn3.diverse-cdn.com/idx-v2/images/3-5/lock-small.png/0239a4" class="icon" height="18"><a href="http://www.psplatinum.com/listings/#ShowLogin">Login</a> or <a href="http://www.psplatinum.com/listings/#ShowRegister">Register</a><p>

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

