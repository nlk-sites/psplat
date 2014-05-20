<!--[if lte IE 8]><style>#tab-slides { display: none; }</style><![endif]-->

<div id="tab-slides" style="z-index:50000">
  <ul class="tab-control">
    <li><a href="#tabs-slides-1">featured listings</a></li>
	<li><a href="#tabs-slides-4">just listed</a></li>
	<li><a href="#tabs-slides-2">recently reduced</a></li>
	<li><a href="#tabs-slides-3">recently sold</a></li>
  </ul>

  <div id="tabs-slides-1" class="tab featuredListings">
    <div class="slide-container">
		<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-up" data-observed="true" style="color: rgb(153, 153, 153);">previous</a>

		<div class="textwidget">

			<ol class="dsidx-results">

		    	<?php
			    $args = array('post_type'=>'property', 'posts_per_page'=>6, 'orderby'=>'menu_order', 'order'=>'asc');
			    $the_query = new WP_Query($args);
			    $count = 0;

				while ( $the_query->have_posts() ) : $the_query->the_post(); 
					$count += 1;
				?>
				<li class="dsidx-prop-summary" style="list-style-type: none; margin-bottom: 15px; position: relative;">
					
					<div class="dsidx-prop-title" style="margin-bottom: 3px;">
						<?php 
								if ( get_post_meta(get_the_ID(), 'wpcf-current-price-range', true) != '' ) {
									$price = explode('-', get_post_meta(get_the_ID(), 'wpcf-current-price-range', true));
									$newprice = array();
									foreach ($price as $k => $v) {
										$newprice[] = '$' . number_format(floatval(preg_replace("/[^0-9.]/", "", $v)));
									}
									$pricestr = implode(' - ', $newprice);
									echo $pricestr;
								}
								elseif ( get_post_meta(get_the_ID(), 'wpcf-current-price', true) != '' ) {
									echo '$' . number_format(floatval(preg_replace("/[^0-9]/", "", get_post_meta(get_the_ID(), 'wpcf-current-price', true))));
								}
								else {
									echo 'N/A';
								}
							?>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>

					<div style="float: left; text-align: center; margin-right: 10px; overflow: hidden; min-height: 188px;">
						<a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail( array(170,115), array('class' => 't_thumb') ); ?></a>
					</div>

					<div class-"dsidx-prop-features" style="white-space: nowrap;">
						<div><?php echo types_render_field("bed", array()); ?> beds, <?php echo types_render_field("bath", array()); ?> baths</div>

						<div>Home size: <?php echo types_render_field("square-feet", array()); ?></div>
				        <div id="inline<?php echo $count; ?>" style="text-align: center; display:none;"><?php echo(types_render_field( "video-code", array())); ?><h3><i><?php the_title(); ?></i></h3></div>
						<a class="showvideopopup t_link" href="#inline<?php echo $count; ?>"><img src="<?php bloginfo('template_url'); ?>/images/t_video_link.png" width="92" height="20"></a>
						<a target="_blank" class="t_link" href="http://maps.google.com/?q=<?php echo urlencode(get_post_meta(get_the_ID(), 'wpcf-address', true)); ?>"><img src="<?php bloginfo('template_url'); ?>/images/t_map_link.png" width="92" height="20"></a>

					</div>

				</li>
				
				<?php endwhile; wp_reset_postdata(); ?>
			</ul>



		</div>



		<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-down" data-observed="true" style="color: rgb(0, 0, 0);">next</a>
    </div> <!-- .slide-container -->
  </div> <!-- #tabs-1.tab -->

  <div id="tabs-slides-2" class="tab recentlyReduced">
    <div class="slide-container">
    	<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-up" data-observed="true" style="color: rgb(153, 153, 153);">previous</a>
		<?php dynamic_sidebar('recently-reduced'); ?>
		<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-down" data-observed="true" style="color: rgb(0, 0, 0);">next</a>
    </div> <!-- .slide-container -->
  </div> <!-- #tabs-2.tab -->

  <div id="tabs-slides-3" class="tab recentlySold">
    <div class="slide-container">
    	<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-up" data-observed="true" style="color: rgb(153, 153, 153);">previous</a>
		<?php dynamic_sidebar('recently-sold'); ?>
		<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-down" data-observed="true" style="color: rgb(0, 0, 0);">next</a>

    </div> <!-- .slide-container -->
  </div> <!-- #tabs-3.tab -->

  <div id="tabs-slides-4" class="tab justListed">
    <div class="slide-container">
    	<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-up" data-observed="true" style="color: rgb(153, 153, 153);">previous</a>
		<?php dynamic_sidebar('just-listed'); ?>
		<a href="javascript:void(0)" class="dsidx-slideshow-control dsidx-move-down" data-observed="true" style="color: rgb(0, 0, 0);">next</a>
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