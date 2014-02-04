<?php
/**
 * Template Name: Property Listing Page
 *
 * @package PSPWP
 */

get_header(); ?>

<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
		<?php get_sidebar('left'); ?>
			<div class="right_main">
	         	<div id="listings">
	            	<div id="featured_left_header">
	                	<h1>our featured listings</h1>
	                </div>
					<div class="clearfix"></div>
					<hr class="greybar_hr">
					<div class="clearfix"></div>
	                <!--
					<div id="qsort">
	                    <div class="qsort_field">
	                        <label for="listing_type">Listing Type</label>
	                        <div class="select_medium">
	                            <select>
	                                <option>Any </option>
	                                <option>1</option>
	                                <option>2</option>
	                            </select>
	                        </div>
	                    </div>
	                    
	                    <div class="qsort_field">
	                        <label for="listing_type">Area of Interest</label>
	                        <div class="select_medium">
	                            <select>
	                                <option>Any </option>
	                                <option>1</option>
	                                <option>2</option>
	                            </select>
	                        </div>
	                    </div>
	                    
	                    <div class="qsort_field">
	                        <label for="listing_type">Sort By</label>
	                        <div class="select_medium">
	                            <select>
	                                <option>Any </option>
	                                <option>1</option>
	                                <option>2</option>
	                            </select>
	                        </div>
	                    </div>
	            	</div>
	                <div class="clearfix"></div>
	                <hr class="greybar_hr">
	                -->
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'property',
							'posts_per_page' => 6,
							'paged' => $paged,
							'orderby' => 'menu_order',
							'order' => 'asc',
							'meta_query' => array(
									array(
										'key' => 'wpcf-property-status',
										'value' => 'New',
										'compare' => 'LIKE'
										)
								)
							);
						$the_query = new WP_Query( $args );
						$count = 0;
					?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<?php $count += 1;?>
						<div class="clearfix"></div>
		                <div class="featured_listing">
		                	<a href="<?php the_permalink(); ?>">
		                	<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								  the_post_thumbnail( array(178,119), array('class'	=> "featured_thumb") );
								}
								else { ?>
									<img class="featured_thumb" src="<?php bloginfo('template_url'); ?>/images/featured_sample_image.jpg" width="178" height="119" />
								<?php }
							?>
							</a>
		                	<!--img class="featured_thumb" src="<?php bloginfo('template_url'); ?>/images/featured_sample_image.jpg" width="170" height="110"-->
		      				<div class="featured_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		     	 			<div class="featured_price"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_up_arrow.png" width="15" height="23">&nbsp;<span class="featured_price_txt">$<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-current-price', true))); ?></span></div>
		      				<span class="featured_price_subtxt">Original Price: $<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-orginal-price', true))); ?></span>
		                    <span class="featured_label">bed/bath</span>&nbsp;<span class="featured_txt"><?php echo types_render_field("bed", array()); ?> bedroom | <?php echo types_render_field("bath", array()); ?> bathroom</span><br>
		      				<span class="featured_label">sq/ft</span>&nbsp;<span class="featured_txt"><?php echo types_render_field("square-feet", array()); ?></span><br>
		           		</div>
		                <div class="featured_links">
		                  <a target="_blank" href="http://maps.google.com/?q=<?php echo urlencode(get_post_meta(get_the_ID(), 'wpcf-address', true)); ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_view_map.png" width="115" height="23"></a>
		                  <a class="showvideopopup" href="<?php the_permalink(); ?>#tabs-1"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_watch_video.png" width="115" height="30"></a>
						  <?php /* <div id="inline<?php echo $count; ?>" style="text-align: center; display:none;"><?php echo(types_render_field( "video-code", array())); ?><h3><i><?php the_title(); ?></i></h3></div> */ ?>
		                  <?php /*
		                  <div class="galleryContainer" style="display: none;">
						  	<?php
								$galleryimages = get_post_meta(get_the_ID(), 'wpcf-gallery-image');
								$firstimg = '#';
								if($galleryimages):
									foreach($galleryimages as $galleryimage)
									{
										if($count = 1)
										{
											$firstimg = $galleryimage;
										}
										$count += 1;
										echo '<a class="fancybox" rel="gallery-'.get_the_ID().'" href="'.$galleryimage.'"><img src="'.$galleryimage.'" /></a>';	
									}
								endif;	
								
							?>
						  </div>
						  */ ?>
						  <?php //if($firstimg != '#'): ?>
						  <a href="<?php the_permalink(); ?>#tabs-1" class="" rel="gallery-<?php echo get_the_ID(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_photo_gallery.png" width="115" height="30"></a>
						  <?php //endif;?>
		                  <a href="<?php the_permalink(); ?>"><img class="property_details_btn" src="<?php bloginfo('template_url'); ?>/images/featured_listings_prop_details_bttn.png" width="114" height="22"></a>
		                </div>
		        		<div class="clearfix"></div>
		            	<hr class="greybar_hr">
	                <?php endwhile; // end of the loop. 
						//wp_reset_postdata();
						if(function_exists('wp_pagenavi')) { ?>
					        <div id="pagination">
					            <?php wp_pagenavi(array( 'query' => $the_query )); wp_reset_query(); ?>
					        </div>
					  <?php }
					?>
	        </div>
		</div>
</div>
<?php get_footer(); ?>
