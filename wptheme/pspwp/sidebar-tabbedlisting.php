<script src="<?php bloginfo('template_url'); ?>/bxslider/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="<?php bloginfo('template_url'); ?>/bxslider/jquery.bxslider.css" rel="stylesheet" />


<style>
	.slide-container .t_spacer:last-child
	{
		display: none;
	}
	
	.bx-wrapper .bx-viewport 
	{
	    background: none !important;
	    border: 0 none;
	    box-shadow: none;
	    left: -5px;
	}
	
	.t_property {
		margin: 0px;
	}
	
	.bx-wrapper .bx-controls-direction a {
		right: -40px;
	}
	
	.bx-wrapper .bx-next {
		right: -40px;
		display: block !important; 
	}
	
	.bx-wrapper .bx-prev {
		left: -40px;
		display: block !important;
	}
	
	.tab {
    	min-height: 148px;
	}		
</style>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.bxslider').bxSlider({
		  minSlides: 2,
		  maxSlides: 2,
		  slideWidth: 420,
		  slideHeight: 130,
		  slideMargin: 30,
		  pager: false
		});
		
	});
</script>	

<div id="tab-slides" style="z-index:50000">



  <ul class="tab-control">

    <li><a href="#tabs-slides-1">featured listings</a></li>
	
	<li><a href="#tabs-slides-4">just listed</a></li>
	
    <li><a href="#tabs-slides-2">recently reduced</a></li>

    <li><a href="#tabs-slides-3">recently sold</a></li>

  </ul>

  <div id="tabs-slides-1" class="tab featuredListings">
    <div class="slide-container">
    	<ul class="bxslider">
    	<?php
	    $args = array('post_type'=>'property', 'posts_per_page'=>50, 'orderby'=>'menu_order', 'order'=>'asc');
	    $the_query = new WP_Query($args);
	    $count = 0;

		while ( $the_query->have_posts() ) : $the_query->the_post(); 
			$count += 1;
		?>
		<li>
			<div class="t_property">
		        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(170,115), array('class' => 't_thumb') ); ?></a>
		        <div class="t_title" style="margin-bottom: 10px;">
		           <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        </div>
		        <div>
		        	<span class="t_label">price</span>&nbsp;<span class="t_txt">
					<?php 
						if ( get_post_meta(get_the_ID(), 'wpcf-current-price-range', true) != '' ) {
							$price = explode('-', get_post_meta(get_the_ID(), 'wpcf-current-price-range', true));
							$newprice = array();
							foreach ($price as $k => $v) {
								$newprice[] = '$' . number_format(floatval(preg_replace("/[^0-9.]/", "", $v)));
							}
							$pricestr = implode(' - ', $newprice);
							echo $pricestr;
						} else {
							echo '$' . number_format(floatval(preg_replace("/[^0-9]/", "", get_post_meta(get_the_ID(), 'wpcf-current-price', true))));
						}
					?>
	        		</span>&nbsp;&nbsp;|&nbsp;&nbsp;<span class="t_label">sq/ft</span>&nbsp;<span class="t_txt"><?php echo types_render_field("square-feet", array()); ?></span>
		        	<br>
		        	<span class="t_label">bed/bath</span>&nbsp;<span class="t_txt"><?php echo types_render_field("bed", array()); ?> bed | <?php echo types_render_field("bath", array()); ?> bath</span>
		        	<br>
		        </div>
		        <div id="inline<?php echo $count; ?>" style="text-align: center; display:none;"><?php echo(types_render_field( "video-code", array())); ?><h3><i><?php the_title(); ?></i></h3></div>
				<a class="showvideopopup t_link" href="#inline<?php echo $count; ?>"><img src="<?php bloginfo('template_url'); ?>/images/t_video_link.png" width="92" height="20"></a>
				<a target="_blank" class="t_link" href="http://maps.google.com/?q=<?php echo urlencode(get_post_meta(get_the_ID(), 'wpcf-address', true)); ?>"><img src="<?php bloginfo('template_url'); ?>/images/t_map_link.png" width="92" height="20"></a>
		    </div>
		</li>
		
		<!--
		<div class="t_spacer">
	        <img src="<?php bloginfo('template_url'); ?>/images/tabs_large_divider.png" width="15" height="142">
	    </div> -->
		<?php endwhile; wp_reset_postdata(); ?>
		</ul>
    </div> <!-- .slide-container -->



  </div> <!-- #tabs-1.tab -->



  <div id="tabs-slides-2" class="tab recentlyReduced">



    <div class="slide-container">
		<?php dynamic_sidebar('recently-reduced'); ?> 
    </div> <!-- .slide-container -->



  </div> <!-- #tabs-2.tab -->



  <div id="tabs-slides-3" class="tab recentlySold">



    <div class="slide-container">
		<?php dynamic_sidebar('recently-sold'); ?>

    </div> <!-- .slide-container -->



  </div> <!-- #tabs-3.tab -->



  <div id="tabs-slides-4" class="tab justListed">



    <div class="slide-container">
		<?php dynamic_sidebar('just-listed'); ?>
		<?php //echo do_shortcode('[idx-listings city="" statuses="1" orderby="DateAdded" orderdir="DESC" count="6" showlargerphotos="false"]'); ?>

    </div> <!-- .slide-container -->



  </div> <!-- #tabs-4.tab -->



  <div id="tab-mini-bar">
	
	<div style="height: 0px">
	&nbsp;
	</div>	
    <a href="#" class="btn-more"><i class="icon"></i> <span>Expand</span></a>

    <div class="pager">

        <a class="slide-prev"></a> <span class="current-page">1 of 1</span> <a class="slide-next"></a>

    </div>

    <div class="clearfix"></div>

  </div>



</div> <!-- #tabs -->