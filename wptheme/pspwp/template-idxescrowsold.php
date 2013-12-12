<?php
/**
 * 
 * Template Name: IDX Escrow Sold
 *
 * @package PSPWP
 * 
 * 
 */

get_header(); ?>

<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
	<div id="main_inner">
        <div class="left_main_accnt" style="width: 918px;">
       	  <div id="listings">
            <?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr class="greybar_hr" />
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<script src="http://idx.diversesolutions.com/scripts/controls/Remote-Frame.aspx?MasterAccountID=85189&amp;SearchSetupID=11&amp;LinkID=349827&amp;Height=2000"></script>
          </div>
        </div>
	  	<div class="clearfix"></div>
	  <?php //include_once("tabbed_listings.php"); ?>
	</div>
</div>
<?php get_footer(); ?>
