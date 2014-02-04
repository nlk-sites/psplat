<?php
/**
 * 
 * Template Name: Agent Listing
 *
 * @package PSPWP
 * 
 * 
 */

get_header(); ?>

<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
	<div id="main_inner">
        <div class="left_main_accnt">
       	  <div id="listings">
            <?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr class="greybar_hr" />
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
            <?php
				$args = array('post_type' => 'agent', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'asc');
				$the_query = new WP_Query( $args );
				$count = 0;
			?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="listing_pod">
	                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('agent-thumb', array('class' => 'prty_border' )); ?></a>
					<?php //echo(types_render_field( "product_image", array( "alt" => get_the_title(), "width" => "300", "height" => "200", "proportional" => "true" ) )); ?>
	                <div class="listing_pod_content">
	                    <span class="featured_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
	                    <span class="featured_subtitle"><?php echo(types_render_field( "designation", array())); ?></span>
	                    <span class="listing_info_label">office</span>&nbsp;<?php echo(types_render_field( "phone-office", array())); ?>&nbsp;&nbsp;<span class="listing_info_label  ">fax</span>&nbsp;<?php echo(types_render_field( "phone-office", array())); ?>
	                    <br>
						<?php
							$count += 1;
						?>
						<div id="inline<?php echo $count; ?>" style="text-align: center; display:none;"><?php echo(types_render_field( "video-code", array())); ?><h3><i><?php the_title(); ?></i></h3></div>	
	                    <div class="agent_links">
	                        <a class="showvideopopup" href="#inline<?php echo $count; ?>"><img src="<?php bloginfo('template_url'); ?>/images/psp_agents_video_link.png" width="102" height="20"></a><a href="mailto:<?php echo get_post_meta(get_the_ID(), 'wpcf-emailaddress', true); ?>"><img src="<?php bloginfo('template_url'); ?>/images/psp_agents_email_link.png" width="92" height="20"></a>
	                        <div class="clearfix"></div>
	                    </div>
	                    <div class="agent_links">
	                        <a href="<?php the_permalink(); ?>/#listings"><img src="<?php bloginfo('template_url'); ?>/images/agent_listings_bttn.png" width="119" height="22"></a><a href="<?php the_permalink(); ?>"><img class="listing_btn" src="<?php bloginfo('template_url'); ?>/images/agent_details_bttn.png" width="119" height="22"></a>
	                    </div>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <hr class="greybar_hr">
			<?php endwhile;  wp_reset_postdata(); ?>
          </div>
        </div>
		<?php get_sidebar('right'); ?> 
	  	<div class="clearfix"></div>
	  <?php //include_once("tabbed_listings.php"); ?>
	</div>
</div>
<?php get_footer(); ?>
