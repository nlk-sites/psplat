<?php
/**
 * Template Name: MLS Details
 *
 * @package PSPWP
 */

get_header(); ?>

<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
	<div id="main_inner">
        <div class="left_main_accnt">
       	  <div id="listings">
            <?php while ( have_posts() ) : the_post(); ?>
				<div id="compareBrdCumBar">
        			<div style="float:left; width: 172px; overflow: hidden; height: 36px;">
					<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/compare_home_icon.png" width="40" height="36"></a><a href="<?php bloginfo('url'); ?>/idx"><img src="<?php bloginfo('template_url'); ?>/images/compare_search_results.png" width="117" height="36"></a><img src="<?php bloginfo('template_url'); ?>/images/arrow_rightt.jpg" width="11" height="36"></div>
					<div style="float: left; width: 470px;"><h1><?php the_title(); ?></h1></div>
					<div class="clearfix"></div>
        		</div>
				<hr class="greybar_hr" />
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
          </div>
        </div>
  		<?php get_sidebar('right'); ?> 
	  	<div class="clearfix"></div>
	  <?php //include_once("tabbed_listings.php"); ?>
	</div>
</div>
<style type="text/css">
	#compareBrdCumBar h1
	{
		color: #001f49;
		font-size: 14px;
		font-weight: 400;
		margin: 0;
		padding: 0;
		line-height: 36px;
	}
</style>	
<?php get_footer(); ?>
