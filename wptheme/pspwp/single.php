<?php
/**
 * The Template for displaying all single posts.
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
				<h1><?php the_title(); ?></h1>
				<hr class="greybar_hr" />
				<p class="date_auth"><?php the_time('M. jS Y'); ?> - Agent - <a href="#"><?php the_author(); ?></a></p>
				<div class="sharebuttons">
		            	<ul>
							<li><?php dd_twitter_generate('Compact','twitter_username',get_permalink(get_the_ID()), get_the_title(), get_the_ID()); ?></li>
			                <li><?php dd_fblike_generate('Like Button Count',get_permalink(get_the_ID()), get_the_title(), get_the_ID()) ?></li>
			                <li><?php dd_google1_generate('Compact (20px)',get_permalink(get_the_ID()), get_the_title(), get_the_ID()); ?></li>
			                <li><?php dd_linkedin_generate('Compact',get_permalink(get_the_ID()), get_the_title(), get_the_ID()); ?></li>
			            </ul>
		        </div>
				<div class="clearfix"></div>
				<?php the_post_thumbnail('profile-thumb'); ?>
				<?php the_content(); ?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>
			<?php endwhile; // end of the loop. ?>
          </div>
        </div>
  		<?php get_sidebar('right'); ?> 
	  	<div class="clearfix"></div>
	  <?php //include_once("tabbed_listings.php"); ?>
	</div>
</div>
<?php get_footer(); ?>