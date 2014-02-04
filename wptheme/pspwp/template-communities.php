<?php
/**
 * 
 * Template Name: Community Listing
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
				$args = array('post_type' => 'community', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'asc');
				$the_query = new WP_Query( $args );
			?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="listing_pod">
                	<?php the_post_thumbnail(array(119, 119), array('class' => 'prty_border' )); ?>
                  <div class="listing_pod_content">
                    	<span class="featured_title"><?php the_title(); ?></span>
                		<span class="featured_subtitle"><?php echo(types_render_field( "address", array())); ?></span>
                    	<?php echo(types_render_field( "teaser-text", array())); ?>
                    <a href="<?php the_permalink(); ?>#clistings"><img class="listing_btn" src="<?php bloginfo('template_url'); ?>/images/search_mls_bttn.png" width="104" height="22"></a><a href="<?php the_permalink(); ?>"><img class="listing_btn" src="<?php bloginfo('template_url'); ?>/images/community_details_btn.png" width="139" height="22"></a></div>
                </div><br><br>
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
