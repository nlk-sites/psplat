<?php
/**
 * 
 * Template Name: Contact
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
       	  <div id="contact">
            <?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr class="greybar_hr" />
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
            <?php
				$args = array('post_type' => 'office-location', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'asc');
				$the_query = new WP_Query( $args );
				$count = 0;
			?>
			<?php 
				while ( $the_query->have_posts() ) : $the_query->the_post();
					if ($count % 2 == 0) {
						$floatto = 'fleft';
					}
					else {
						$floatto = 'fright';
					}
			?>
				<div class="contact_pod <?=$floatto; ?>">
					<?php //echo(types_render_field( "product_image", array( "alt" => get_the_title(), "width" => "300", "height" => "200", "proportional" => "true" ) )); ?>
	                <div class="contact_pod_content">
	                    <h2><?php the_title(); ?></h2>
	                    <?php the_post_thumbnail('contact-thumb', array('class' => 'prty_border' )); ?>
	                    <div class="grey-block">
	                    	<div class="pad-fix">
	                    		<span class="contact_info_label">Address</span><br />
	                    		<?php echo(types_render_field( "contact-address", array())); ?><br />
	                    		<?php echo(types_render_field( "contact-city-state", array())); ?><br />
	                    		<br />
		                    	<span class="contact_info_label">office</span>&nbsp;<?php echo(types_render_field( "contact-phone", array())); ?><br />
		                    	<span class="contact_info_label">fax</span>&nbsp;<?php echo(types_render_field( "contact-fax", array())); ?>
			                    <br />
								
								<div id="inline<?php echo $count; ?>" style="text-align: center; display:none;"><?php echo(types_render_field( "video-code", array())); ?><h3><i><?php the_title(); ?></i></h3></div>	
			                    <div class="contact_links">
			                        <a href="<?php the_permalink(); ?>"><img class="contact_btn" src="<?php bloginfo('template_url'); ?>/images/send_email_bttn.png" width="114" height="22"></a>
			                    </div>
			                </div>
		                </div>
	                </div>
	            </div>
	            <?php $count++; ?>
			<?php endwhile;  wp_reset_postdata(); ?>
          </div>
        </div>
		<?php get_sidebar('contact'); ?>
	  	<div class="clearfix"></div>
	  	<?php get_sidebar("tabbedlisting"); ?>
	  	<div class="clearfix"></div>
	  <?php //include_once("tabbed_listings.php"); ?>
	</div>
</div>
<?php get_footer(); ?>
