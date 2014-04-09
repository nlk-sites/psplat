<?php
/**
* 
* Template Name: Single Agent Listing
*
* @package PSPWP Child
* 
* 
*/

$psp_agent_options = get_option('psp_agent_options');

get_header();
?>
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
			</div>
			<img src="<?php echo $psp_agent_options['details']['agent_image']; ?>" width="242" />
			<div class="featured_heading">
				<div class="featured_contact">Contact Information</div>
			</div>
			<div id="featured_info">
				<span class="featured_info_label">direct</span>&nbsp;<?php echo $psp_agent_options['contact']['phone_direct']; ?><br>
				<span class="featured_info_label">office</span>&nbsp;<?php echo $psp_agent_options['contact']['phone_office']; ?><br>
				<span class="featured_info_label">fax</span>&nbsp;<?php echo $psp_agent_options['contact']['fax']; ?><br>
				<span class="featured_info_label">ca bre#</span>&nbsp;<?php echo $psp_agent_options['details']['bre']; ?><br>
			</div>
			<hr class="lightbar_hr">
			<a href="mailto:<?php echo $psp_agent_options['contact']['email']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/email_me.png" width="242" height="29"></a>
			<hr class="lightbar_hr">
			<div id="featured_follow">
				<a target="_blank" href="<?php echo $psp_agent_options['social']['facebook']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/featured_listings_fb_icon.png" width="32" height="32"></a>
				<a target="_blank" href="<?php echo $psp_agent_options['social']['twitter']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/featured_listings_twitter_icon.png" width="32" height="32"></a>
				<a target="_blank" href="<?php echo $psp_agent_options['social']['linkedin']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/featured_listings_in_icon.png" width="32" height="32"></a>
				<span class="featured_follow_label">FOLLOW // <?php echo strtoupper($psp_agent_options['details']['name_display']); ?></span>
			</div>
			<hr class="lightbar_hr"><br><br>
				<?php if ( $psp_agent_options['social']['twitter_widget'] ) { ?>
					<div class="twittercontainer">
					<?php echo $psp_agent_options['social']['twitter_widget']; ?>
					</div>
                <?php } ?>
			<div class="clearfix"></div><br><br><br><br><br>
		</div>
		<div class="right_main_min">
			<div class="psp-slider">
				<?php 
				$slider = "[SlideDeck2 id=" . $psp_agent_options['details']['slidedeck'] . " iframe=1]";
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
					<!--img class="tab_search_mls_btn" src="<?php bloginfo( 'template_url' ); ?>/images/search_mls_bttn.png" width="104" height="22"-->
				</ul>
				<div id="tabs-1">
					<h1><?php echo strtoupper($psp_agent_options['details']['name_display']); ?></h1>
					<hr class="greybar_hr" />
					<?php echo apply_filters( 'the_content', stripslashes($psp_agent_options['details']['bio']) ); ?>
				</div>
				<div id="tabs-2">
					<h1>Testimonials</h1>
					<hr class="greybar_hr" />
					<?php echo apply_filters( 'the_content', stripslashes($psp_agent_options['details']['testimonials']) ); ?>
				</div>
				<div id="listings">
					<?php echo do_shortcode('[idx-listings linkid="'.$psp_agent_options['idx']['listings'].'" count="50" showlargerphotos="true"]'); ?>
				</div>
				<div id="listings2">
					<?php echo do_shortcode('[idx-listings linkid="'.$psp_agent_options['idx']['listings_sold'].'" count="50" showlargerphotos="true"]'); ?>
				</div>			
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>	
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
