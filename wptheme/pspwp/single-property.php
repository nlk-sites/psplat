<?php
/**
 * Property Detail page
 *
 * @package PSPWP
 */

get_header(); ?>

<div id="main" role="main">
  <?php get_sidebar("searchbar"); ?>
		<?php get_sidebar('left'); ?>
		<?php while ( have_posts() ) : the_post(); ?>
        <div class="right_main_min">
            <!--div class="videocode">
                <?php echo(types_render_field("video-code", array())); ?>
            </div-->
            <div class="psp-slider">
                <?php 
                    $slideid = types_render_field( "slidedeck-id-property", array() );
                    $slider = "[SlideDeck2 id=" . $slideid . " iframe=1]";
                    echo do_shortcode( $slider );
                ?>
            </div>
            <div class="clearfix"></div>
            <br/>
            <div style="display:none;">
                <?php
                $galleryimages = get_post_meta(get_the_ID(), 'wpcf-gallery-image');
                $firstimg = '#';
                if ($galleryimages):
                    foreach ($galleryimages as $galleryimage) {
                        if ($count = 1) {
                            $firstimg = $galleryimage;
                        }
                        $count += 1;
                        echo '<a class="fancybox" rel="gallery-'.get_the_ID().'" href="'.$galleryimage.'"><img src="'.$galleryimage.'" /></a>';
                    }
                endif;
                
                ?>
            </div>
            <?php if ($firstimg != '#'): ?>
            <a href="<?php echo $firstimg; ?>" class="fancybox" rel="gallery-<?php echo get_the_ID(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_photo_gallery.png" width="115" height="30" class="tab_search_mls_btn"></a>
            <?php endif; ?>
            <div id="tabs">
                <ul>
                    <li>
                        <a href="#tabs-3">Overview</a>
                    </li>
					<li>
                        <a href="#tabs-1">Listing Details</a>
                    </li>
                    <li>
                        <a href="#tabs-2">Community Info</a>
                    </li>
                </ul>
				<div id="tabs-3">
                    <?php echo types_render_field("overview", array()); ?>
                </div>
				<div id="tabs-1">
                	<div class="community_overview">
                		<div id="mls_details_right" style="width: 100%;">
			                	<div class="mls_details_details">
			                    	<h2><?php the_title(); ?></h2>
			            			<div class="compare_column_details_price"><img src="<?php bloginfo('template_url'); ?>/images/featured_listings_up_arrow.png" width="15" height="23">&nbsp;<span class="compare_column_details_price_txt">$<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-current-price', true))); ?></span></div>
			      					<span class="compare_column_details_price_subtxt">Original Price: $<?php echo number_format(floatval(get_post_meta(get_the_ID(), 'wpcf-orginal-price', true))); ?></span>
			                		<span class="compare_column_details_label">bed/bath</span>&nbsp;<span class="compare_column_details_txt"><?php echo types_render_field("bed", array()); ?> bedroom | <?php echo types_render_field("bath", array()); ?> bathroom</span><br>
			      					<span class="compare_column_details_label">sq/ft</span>&nbsp;<span class="compare_column_details_txt"><?php echo types_render_field("square-feet", array()); ?></span><br>
			                		<span class="compare_column_details_label">days on market</span>&nbsp;<span class="compare_column_details_txt"><?php echo types_render_field("days-on-market", array()); ?></span><br>
			            		</div>
			                </div>
                	</div>
					<div class="clear"></div>
					<hr/>
					<div class="clear"></div>
                    <?php the_content(); ?>
                </div>
                <div id="tabs-2">
                    <?php echo(types_render_field("community-info", array())); ?>
                </div>
            </div>
        </div>
	<?php endwhile; // end of the loop. ?>	
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>
