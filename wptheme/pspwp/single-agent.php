<?php
/**
 * Agent Detail page
 *
 * @package PSPWP
 */

get_header(); ?>
<style>
	#featured_follow img
	{
		margin: 0px 5px;
	}
</style>
<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="left_bar">
       	  <div class="featured_heading">
            	<span class="featured_title"><?php the_title(); ?></span>
                <span class="featured_subtitle"><?php echo(types_render_field( "designation", array())); ?></span>
          </div>
           <?php echo(types_render_field( "detail-page-image", array())); ?>
           <div class="featured_heading">
           	   <div class="featured_contact">Contact Information</div>
           	</div>
          	<div id="featured_info">
           		<span class="featured_info_label">direct</span>&nbsp;<?php echo(types_render_field( "phone-direct", array())); ?><br>
				<span class="featured_info_label">office</span>&nbsp;<?php echo(types_render_field( "phone-office", array())); ?><br>
                <span class="featured_info_label">fax</span>&nbsp;<?php echo(types_render_field( "fax", array())); ?><br>
                <span class="featured_info_label">ca bre#</span>&nbsp;<?php echo(types_render_field( "ca-bre", array())); ?><br>
            </div>
            <hr class="lightbar_hr">
            <a href="mailto:<?php echo get_post_meta(get_the_ID(), 'wpcf-emailaddress', true); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/email_me.png" width="242" height="29"></a>
            <hr class="lightbar_hr">
          <div id="featured_follow">
          	<a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'wpcf-facebook', true); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/featured_listings_fb_icon.png" width="32" height="32"></a><a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'wpcf-twitter', true); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/featured_listings_twitter_icon.png" width="32" height="32"></a><a target="_blank" href="<?php echo get_post_meta(get_the_ID(), 'wpcf-linkedin', true); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/featured_listings_in_icon.png" width="32" height="32"></a>
          	<span class="featured_follow_label">FOLLOW // <?php echo strtoupper(get_the_title()); ?></span>
          </div>
		  <hr class="lightbar_hr"><br><br>
		  <?php dynamic_sidebar('agent-widgets'); ?>
		<div class="clearfix"></div><br><br><br><br><br>
        </div>
        <div class="right_main_min">
				<!--div class="videocode"><?php echo(types_render_field( "video-code", array())); ?></div-->
				<div class="psp-slider">
					<?php 
						$slideid = types_render_field( "slidedeck-id-agent", array() );
						$slider = "[SlideDeck2 id=" . $slideid . " iframe=1]";
						echo do_shortcode( $slider );
					?>
				</div>
				<div class="clearfix"></div>
                <br />
				<div id="tabs">
				  <ul>
				    <li><a href="#tabs-1">Biography</a></li>
				    <li><a href="#tabs-2">Testimonials</a></li>
				    <li><a href="#listings">My Listings</a></li>
					<li><a href="#listings2">My Sold Listings</a></li>
				    <li><a href="#tabs-4">My Blog</a></li>
				    <!--img class="tab_search_mls_btn" src="<?php bloginfo( 'template_url' ); ?>/images/search_mls_bttn.png" width="104" height="22"-->
				  </ul>
				  <div id="tabs-1">
				    <?php the_content(); ?>
				  </div>
				  <div id="tabs-2">
				    <?php echo(types_render_field( "testimonials", array())); ?>
				  </div>
				  <div id="listings">
				    <?php echo(types_render_field("listings", array())); ?>
				  </div>
				  <div id="listings2">
				    <?php echo(types_render_field("sold-listings", array())); ?>
				  </div>
				  <div id="tabs-4">
				    <?php //echo(types_render_field( "blog", array())); ?>
					<h1>My Blog</h1>
					<hr class="greybar_hr">
					<?php
						$user = get_user_by( 'email', get_post_meta(get_the_ID(), 'wpcf-emailaddress', true) );
						if($user)
						{
							$authors_posts = get_posts( array( 'author' => $user->ID, 'posts_per_page' => 10 ) );
							
							if($authors_posts)
							{
							    foreach ( $authors_posts as $authors_post ) {
							       
									?>
										<div class="eachPost">
											<h1><?php echo get_the_title($authors_post->ID); ?></h1>
								            <p class="date_auth"><?php the_time('M. jS Y'); ?></p>
								            <div class="sharebuttons">
								            	<ul>
													<li><?php dd_twitter_generate('Compact','twitter_username',get_permalink($authors_post->ID), get_the_title(), $authors_post->ID); ?></li>
									                <li><?php dd_fblike_generate('Like Button Count',get_permalink($authors_post->ID), get_the_title($authors_post->ID), $authors_post->ID) ?></li>
									                <li><?php dd_google1_generate('Compact (20px)',get_permalink($authors_post->ID), get_the_title($authors_post->ID), $authors_post->ID); ?></li>
									                <li><?php dd_linkedin_generate('Compact',get_permalink($authors_post->ID), get_the_title($authors_post->ID), $authors_post->ID); ?></li>
									            </ul>
								            </div>
											<div class="clearfix"></div>
											<?php echo apply_filters('the_content', $authors_post->post_excerpt); ?>
											<p><a href="<?php echo get_permalink($authors_post->ID); ?>">Read Full Article</a></p>
									
										</div>
										<hr class="greybar_hr">
									<?php
							    }
							}
						    
						}
						else
						{
							echo '<h3><i>I will write some cool posts soon. Thank you for your patience.</i></h3>';
						}
					?>
				  </div>
				</div>
				
		</div>
	<?php endwhile; // end of the loop. ?>	
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
