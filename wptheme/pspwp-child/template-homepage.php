<?php 

/*

 * Template Name: Homepage Template

 *

 *

 */

$psp_agent_options = get_option('psp_agent_options');

get_header();

?>

<div id="content">

    <div id="inner-content" class="wrap clearfix">

        <div id="main" class="eightcol first clearfix" role="main">

            <div id="home_top_container">

                <?php if ($psp_agent_options['idx']['front_search_js']) { ?>

                <div id="home_top_right">

                    <div id="qsrch">

                        <img id="qsrch_title" src="<?php bloginfo('template_url'); ?>/images/start_here.png" width="145" height="28">

                        <?php print $psp_agent_options['idx']['front_search_js']; ?>

                    </div>

                </div>

                <?php } ?>

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

                    <?php dynamic_sidebar('homepageleft'); ?>

                    <?php dynamic_sidebar('homepagemiddle'); ?>

                    <?php dynamic_sidebar('homepageright'); ?>

                    <div id="welcome_box_right" style="position: relative;">

                    	<?php if ( $psp_agent_options['social']['twitter_widget'] ) { 
                            echo $psp_agent_options['social']['twitter_widget'];
                        } else { ?>
                        <h1 class="twitterOverlay"><a href="<?php echo ( $psp_agent_options['social']['twitter'] ) ? $psp_agent_options['social']['twitter'] : 'https://twitter.com/psplatinum'; ?>" target="_blank">Follow</a></h1>
                        <a class="twitter-timeline" href="<?php echo ( $psp_agent_options['social']['twitter'] ) ? $psp_agent_options['social']['twitter'] : 'https://twitter.com/psplatinum'; ?>" data-widget-id="387290994468585473">Tweets by @psplatinum</a>
                        <script>
                            !function(d,s,id){
                                var js,
                                    fjs=d.getElementsByTagName(s)[0],
                                    p=/^http:/.test(d.location)?'http':'https';
                                if(!d.getElementById(id)){
                                    js=d.createElement(s);
                                    js.id=id;
                                    js.src=p+"://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js,fjs);
                                }
                            }(document,"script","twitter-wjs");
                        </script>
                        <?php } ?>

                    </div>

                    <div class="clearfix">

                    </div>

                    <?php if (have_posts()): while (have_posts()): the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                    <?php endif; ?>

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

