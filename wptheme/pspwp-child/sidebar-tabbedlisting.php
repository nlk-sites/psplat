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
		<?php dynamic_sidebar('featured-listing'); ?>
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