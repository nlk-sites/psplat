<?php
/**
 * Community Detail page
 *
 * @package PSPWP
 */

// For schools lookup
$communityzip = types_render_field( "community-zip", array( "raw"=>"true" ) );
$communitystate = types_render_field( "community-state", array( "raw"=>"true" ) );
$nearby_schools = curl_schools( $communityzip, $communitystate );
if ( $nearby_schools )
	$schools_xml = new SimpleXMLElement( $nearby_schools );




get_header(); ?>

<style>
	#communitysidebar div.dsidx-results-widget .dsidx-controls
	{
		display: none;
	}
	
	#communitysidebar div.dsidx-results-widget .dsidx-map .dsidx-details
	{
		display: none;
	}
	
</style>
<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
  		
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="left_bar" id="communitysidebar">
       	  <div class="featured_heading">
            	<span class="featured_title"><?php the_title(); ?></span>
                <span class="featured_subtitle"><?php echo(types_render_field( "address", array())); ?></span>
          </div>
           <?php the_post_thumbnail('agent-detail', array('class' => 'agentdetail')); ?>
           <?php dynamic_sidebar('sidebar_community'); ?>
		   <?php 
			   
					  		/* ?>
		   <div class="featured_heading">
		        <div class="featured_contact">
		            Need More Info?
		        </div>
		    </div>
		    <img src="<?php bloginfo( 'template_url' ); ?>/images/btn_right_req_info.png" width="242" height="33">
			<hr class="lightbar_hr">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/btn_right_showing.png" width="242" height="33">
			<hr class="lightbar_hr">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/btn_right_live_agent.png" width="242" height="29">
			<hr class="lightbar_hr">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/btn_right_print.png" width="242" height="33">
			<hr class="lightbar_hr">
			<img src="<?php bloginfo( 'template_url' ); ?>/images/btn_right_pdf.png" width="242" height="37">
			<hr class="lightbar_hr">
		    <br>
		    <br>
		    <div class="clearfix"></div>
		    <?php dynamic_sidebar('sidebar_community'); ?>
			<div class="featured_heading">
		        <div class="featured_contact">
		            Map Location
		        </div>
		    </div>
		    <img class="contact_map" src="<?php bloginfo( 'template_url' ); ?>/images/psp_contact_map.jpg" width="235" height="245">
		    <br>
          	<hr class="lightbar_hr"><br><br>
			<div class="clearfix"></div><?php */ ?>
        </div>
        <div class="right_main_min">
				<!--div class="videocode">
					<?php echo(types_render_field( "video-code", array())); ?>
				</div-->
				<div class="psp-slider">
					<?php 
						$slideid = types_render_field( "slidedeck-id-community", array() );
						$slider = "[SlideDeck2 id=" . $slideid . " iframe=1]";
						echo do_shortcode( $slider );
					?>
				</div>
				<div class="clearfix"></div>
                <br />
				<div id="tabs">
				  <ul>
				    <li><a href="#tabs-1">Overview</a></li>
				    <li><a href="#tabs-2">Concierge</a></li>
				    <li><a href="#clistings">Listings</a></li>
					<li><a href="#featured">Featured Listings</a></li>
					<?php if ( $nearby_schools ) { ?><li><a href="#nearschools">Nearby Schools</a></li><?php } ?>
				    <!-- <img class="tab_search_mls_btn" src="<?php bloginfo( 'template_url' ); ?>/images/search_mls_bttn.png" width="104" height="22"> -->
				  </ul>
				  <div id="tabs-1">
				    <?php the_content(); ?>
				  </div>
				  <div id="tabs-2">
				    <?php echo(types_render_field( "concierge", array())); ?>
				  </div>
				  <div id="clistings">
				    <?php echo(types_render_field( "mls-listing", array())); ?>
				  </div>
				  <div id="featured">
				  	<?php
						
						$args = array(
								'post_type' => 'property',
								'tax_query' => array(
									array(
										'taxonomy' => 'property-community',
										'field' => 'slug',
										'terms' => $post->post_name
									)
								)
							);
			
						$inner_query = new WP_Query( $args );
						
						if($inner_query->have_posts())
						{
							?>
								<h2>Featured Properties</h2>
							<?php
							while ($inner_query->have_posts()) : $inner_query->the_post();
                    			?>
									<div class="clearfix"></div>
						                <div class="featured_listing">
						                	<img class="featured_thumb" src="<?php bloginfo('template_url'); ?>/images/featured_sample_image.jpg" width="170" height="110">
						      				<div class="featured_title"><?php the_title(); ?></div>
						     	 			<div class="featured_price"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_up_arrow.png" width="15" height="23">&nbsp;<span class="featured_price_txt">$<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-current-price', true))); ?></span></div>
						      				<span class="featured_price_subtxt">Original Price: $<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-orginal-price', true))); ?></span>
						                    <span class="featured_label">bed/bath</span>&nbsp;<span class="featured_txt"><?php echo types_render_field("bed", array()); ?> bedroom | <?php echo types_render_field("bath", array()); ?> bathroom</span><br>
						      				<span class="featured_label">sq/ft</span>&nbsp;<span class="featured_txt"><?php echo types_render_field("square-feet", array()); ?></span><br>
						                    <span class="featured_label">days on market</span>&nbsp;<span class="featured_txt"><?php echo types_render_field("days-on-market", array()); ?></span><br>
						    				
						           		</div>
						                <div class="featured_links">
						                  <a target="_blank" href="http://maps.google.com/?q=<?php echo urlencode(get_post_meta(get_the_ID(), 'wpcf-address', true)); ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_view_map.png" width="115" height="23"></a>
						                  <a class="showvideopopup" href="#inline<?php echo $count; ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_watch_video.png" width="115" height="30"></a>
										  <div id="inline<?php echo $count; ?>" style="text-align: center; display:none;"><?php echo(types_render_field( "video-code", array())); ?><h3><i><?php the_title(); ?></i></h3></div>
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
										  <?php if($firstimg != '#'): ?>
										  <a href="<?php echo $firstimg; ?>" class="fancybox" rel="gallery-<?php echo get_the_ID(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_photo_gallery.png" width="115" height="30"></a>
										  <?php endif;?>
						                  <a href="<?php the_permalink(); ?>"><img class="property_details_btn" src="<?php bloginfo('template_url'); ?>/images/featured_listings_prop_details_bttn.png" width="114" height="22"></a>
						                </div>
						        		<div class="clearfix"></div>
						            	<hr class="greybar_hr">
								<?php
							endwhile;	
						}
						else
						{
							?>
								<h2>Sorry! There are no featured properties at this time</h2>
							<?php
						}
					?> 	
				  </div>
				  <div id="nearschools">
				  	<div class="clearfix"></div>
					  	<div id="schooltabs">
					  		<ul>
							    <li><a href="#servinghome">Serving this Home</a></li>
				    			<li><a href="#elementaryschool">Nearby Elementary</a></li>
				    			<li><a href="#middleschool">Nearby Middle</a></li>
								<li><a href="#highschool">Nearby High</a></li>
							</ul>
						  	<div id="servinghome">
						  		<?php if ( $schools_xml ) { ?>
						  			<table>
						  				<tbody>
						  					<tr>
						  						<th>School Name</th>
						  						<th>Type</th>
						  						<th>Grades</th>
						  						<th>Parent Rating</th>
						  						<th>Distance</th>
						  					</tr>
				  							<?php
						  						foreach ( $schools_xml->school as $school ) {
						  							$name = $school->name;
						  							$address = explode( ", ", $school->address );
						  							$phone = $school->phone;
						  							$type = $school->type;
						  							$grade_range = explode( "-", $school->gradeRange);
						  							$grades = $grade_range[0] . " to " . $grade_range[1];
						  							$rating = $school->parentRating;
						  							$distance = $school->distance . " mi";
						  							?>
						  							<tr>
						  								<td><p><b><?=$name; ?></b><br />
						  									<?php
						  										echo $address[0] . ',<br />';
						  										echo $address[1] . ', ' . $address[2] . '<br />';
						  										echo $phone;
						  									?>
						  								</p></td>
						  								<td><p><?php echo ucfirst($type); ?></p></td>
						  								<td><p><?=$grades; ?></p></td>
						  								<td>
						  									<p>
						  									<?php
						  										for ( $i = 1; $i <= $rating; $i++ ) {
						  											echo '<span class="bluestar">★</span>';
						  										}
						  										for ( $i = 5; $i > $rating; $i-- ) {
						  											echo '<span class="whitestar">★</span>';
						  										}
						  									?>
						  								</p>
						  								</td>
						  								<td><p><?=$distance; ?></p></td>
						  							</tr>
						  						<?php }
					  						?>
					  					</tbody>
					  				</table>

					  				<?php
			  						} else { ?>
			  							<h3>School data currently not available.</h3>
			  					<?php } ?>
					  		</div>
					  		<div id="elementaryschool">
					  			<?php if ( $schools_xml ) { ?>
						  			<table>
						  				<tbody>
						  					<tr>
						  						<th>School Name</th>
						  						<th>Type</th>
						  						<th>Grades</th>
						  						<th>Parent Rating</th>
						  						<th>Distance</th>
						  					</tr>
				  							<?php
						  						foreach ( $schools_xml->school as $school ) {
						  							$name = $school->name;
						  							$address = explode( ", ", $school->address );
						  							$type = $school->type;
						  							$grade_range = explode( "-", $school->gradeRange);
						  							$grades = $grade_range[0] . " to " . $grade_range[1];
						  							$rating = $school->parentRating;
						  							$distance = $school->distance . " mi";
						  							if ( $grade_range[0] == "K" || $grade_range[0] == "PK" ) {
						  							?>
						  							<tr>
						  								<td><p><b><?=$name; ?></b><br />
						  									<?php
						  										echo $address[0] . ',<br />';
						  										echo $address[1] . ', ' . $address[2] . '<br />';
						  										echo $phone;
						  									?>
						  								</p></td>
						  								<td><p><?php echo ucfirst($type); ?></p></td>
						  								<td><p><?=$grades; ?></p></td>
						  								<td>
						  									<p>
						  									<?php
						  										for ( $i = 1; $i <= $rating; $i++ ) {
						  											echo '<span class="bluestar">★</span>';
						  										}
						  										for ( $i = 5; $i > $rating; $i-- ) {
						  											echo '<span class="whitestar">★</span>';
						  										}
						  									?>
						  								</p>
						  								</td>
						  								<td><p><?=$distance; ?></p></td>
						  							</tr>
						  							<?php }
						  						}
					  						?>
					  					</tbody>
					  				</table>
					  				<?php
			  						} else { ?>
			  							<h3>School data currently not available.</h3>
			  					<?php } ?>
					  		</div>
					  		<div id="middleschool">
					  			<?php if ( $schools_xml ) { ?>
						  			<table>
						  				<tbody>
						  					<tr>
						  						<th>School Name</th>
						  						<th>Type</th>
						  						<th>Grades</th>
						  						<th>Parent Rating</th>
						  						<th>Distance</th>
						  					</tr>
				  							<?php
						  						foreach ( $schools_xml->school as $school ) {
						  							$name = $school->name;
						  							$address = explode( ", ", $school->address );
						  							$type = $school->type;
						  							$grade_range = explode( "-", $school->gradeRange);
						  							$grades = $grade_range[0] . " to " . $grade_range[1];
						  							$rating = $school->parentRating;
						  							$distance = $school->distance . " mi";
						  							if ( ( $grade_range[0] <= 6 || $grade_range[0] == "K" || $grade_range[0] == "PK" ) && $grade_range[1] >= 8 ) {
						  							?>
						  							<tr>
						  								<td><p><b><?=$name; ?></b><br />
						  									<?php
						  										echo $address[0] . ',<br />';
						  										echo $address[1] . ', ' . $address[2] . '<br />';
						  										echo $phone;
						  									?>
						  								</p></td>
						  								<td><p><?php echo ucfirst($type); ?></p></td>
						  								<td><p><?=$grades; ?></p></td>
						  								<td>
						  									<p>
						  									<?php
						  										for ( $i = 1; $i <= $rating; $i++ ) {
						  											echo '<span class="bluestar">★</span>';
						  										}
						  										for ( $i = 5; $i > $rating; $i-- ) {
						  											echo '<span class="whitestar">★</span>';
						  										}
						  									?>
						  								</p>
						  								</td>
						  								<td><p><?=$distance; ?></p></td>
						  							</tr>
						  							<?php }
						  						}
					  						?>
					  					</tbody>
					  				</table>
					  				<?php
			  						} else { ?>
			  							<h3>School data currently not available.</h3>
			  					<?php } ?>
					  		</div>
					  		<div id="highschool">
					  			<?php if ( $schools_xml ) { ?>
						  			<table>
						  				<tbody>
						  					<tr>
						  						<th>School Name</th>
						  						<th>Type</th>
						  						<th>Grades</th>
						  						<th>Parent Rating</th>
						  						<th>Distance</th>
						  					</tr>
				  							<?php
						  						foreach ( $schools_xml->school as $school ) {
						  							$name = $school->name;
						  							$address = explode( ", ", $school->address );
						  							$type = $school->type;
						  							$grade_range = explode( "-", $school->gradeRange);
						  							$grades = $grade_range[0] . " to " . $grade_range[1];
						  							$rating = $school->parentRating;
						  							$distance = $school->distance . " mi";
						  							if ( $grade_range[1] >= 9 ) {
						  							?>
						  							<tr>
						  								<td><p><b><?=$name; ?></b><br />
						  									<?php
						  										echo $address[0] . ',<br />';
						  										echo $address[1] . ', ' . $address[2] . '<br />';
						  										echo $phone;
						  									?>
						  								</p></td>
						  								<td><p><?php echo ucfirst($type); ?></p></td>
						  								<td><p><?=$grades; ?></p></td>
						  								<td>
						  									<p>
						  									<?php
						  										for ( $i = 1; $i <= $rating; $i++ ) {
						  											echo '<span class="bluestar">★</span>';
						  										}
						  										for ( $i = 5; $i > $rating; $i-- ) {
						  											echo '<span class="whitestar">★</span>';
						  										}
						  									?>
						  								</p>
						  								</td>
						  								<td><p><?=$distance; ?></p></td>
						  							</tr>
						  							<?php }
						  						}
					  						?>
					  					</tbody>
					  				</table>
					  				<?php
			  						} else { ?>
			  							<h3>School data currently not available.</h3>
			  					<?php } ?>
					  		</div>
				  		</div>
				  </div>
		</div>
	<?php endwhile; // end of the loop. ?>	
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
