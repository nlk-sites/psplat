<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package PSPWP
 */

get_header(); ?>
<style>
	body[class*="13855"] .left_main_accnt
	{
		width: 918px !important;
	}
	
	body[class*="13855"] .right_bar
	{
		display: none !important;
	}
	
</style>
<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
	<div id="main_inner">
        <div class="left_main_accnt">
       	  <div id="listings">
            <?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr class="greybar_hr" />
				<?php 
					$quote = get_post_meta( get_the_ID(), 'quote', true);
					if ( !empty($quote) ) { ?>
						<div id="quote">
							<?=$quote; ?>
						</div>
					<?php }
				?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
          </div>
        </div>
  		<?php get_sidebar('right'); ?> 
	  	<div class="clearfix"></div>
	  <?php //include_once("tabbed_listings.php"); ?>
	</div>
</div>
<?php get_footer(); ?>
