<?php 
/**
 *
 * Template Name: MLS Listings
 *
 * The template for displaying MLS Listings page and search listing.
 *
 *
 *
 * @package PSPWP
 */
 
get_header();
?>
<div id="main" role="main">
    <?php get_sidebar("searchbar"); ?>
    <?php get_sidebar('left'); ?>
    		
    <div class="right_main">
        <div id="listings">
            <?php while ( have_posts() ) : the_post(); ?>
				<div id="featured_left_header">
	                <h1><?php the_title(); ?></h1>
	            </div>
	            <div class="clearfix"></div>
				<hr class="greybar_hr" />
	            <?php the_content(); ?>
	            <div class="clearfix"></div>
			<?php endwhile; // end of the loop. ?>
        </div>
    </div>
</div>
<style type="text/css">
	#dsidx-listings .dsidx-primary-data {
    	background: none;
    	font-weight: normal;
    	padding-bottom: 3px;
    	padding-top: 3px;
	}
	
	#dsidx-listings .dsidx-primary-data .dsidx-address{
    	color: #001f49;
		font-size: 14px;
		font-weight: 400;
		padding-top: 5px;
		margin-bottom: 3px;
	}
	
	#dsidx-listings .dsidx-primary-data .dsidx-address a
	{
		color: #001f49;
		text-decoration: underline;
	}
	
	#dsidx-listings .dsidx-primary-data .dsidx-price {
		font-size: 16px;
		font-weight: bold;
		padding-top: 3px;
	}
	
	#dsidx-listings .dsidx-secondary-data
	{
		color: #555;
	}
	
	#dsidx-listings li hr {
	    background-color: #d2d1d1;
	    height: 1px;
	    margin: 14px auto;
	    width: 100%;
		border: 0 none;
	}
	
</style>	
<?php get_footer(); ?>
