$(function(){

	var clicked;
	var $active;

	// load json
	loadData('featured-listings','#featured-listings.data-container');
	loadData('just-listed','#just-listed.data-container');
	loadData('just-reduced','#just-reduced.data-container');
	loadData('recently-sold','#recently-sold.data-container');

	function loadData(loading,selector) {
		$.getJSON('data/' + loading + '.json', function(data) {
			$.each(data.properties, function(i, node){

				var output 	=  '<div class="item">';
				output		+= '<a href="' + node.property_url + '"><img src="' + node.img_url + '" alt=""></a>';
				output		+= '<div class="meta">';
				output		+= '<h2>' + node.address + '</h2>';
				output 		+= '<h3>' + node.city_state + '</h3>';
				output 		+= '<p><strong>price:</strong> $' + numberWithCommas(node.price) + '</p>';
				output 		+= '<p><strong>bed/bath:</strong> ' + node.bedrooms + ' | ' + node.bathrooms + '</p>';
				output 		+= '<p><strong>sq/ft:</strong> ' + numberWithCommas(node.sq_ft) + ' sq/ft | Lot ' + numberWithCommas(node.lot) + ' sq/ft</p>';
				output		+= '<p><a href="' + node.property_video_url + '"><i></i> Watch Video</a> <a href="' + node.property_map_url +'"><i></i> View Map</a></p>';
				output		+= '</div>';
				output		+= '</div>';

				$(selector).append(output);

			});
		}).done(function(){
			$('.data-container').wrapChildren({
				childElem : 'div.item',
				sets : 2,
				wrapper : 'div class="grouped"'
			})
		}).done(function(){
			// clicks first tab
			$('ul.tab-control li:first-child a').click();
		});

		// formats number with commas
		function numberWithCommas(x) {
			return x.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
		};
	}

	// button and pager objects
	var $button = $('a.btn-more');
	var $pager = $('div.pager');

	// toggle expand/collapse .data-container
	$button.toggle(
		function(){
			expand();
		},
		function(){
			collapse();
		}
	);

	// tab control
	$('ul.tab-control li a').click(function(e){

		// prevent hashtag linking
		e.preventDefault();

		// marks the clicked anchor with active class
		$('ul.tab-control li a').removeClass('active');
		$(this).addClass('active');

		// friendly variable
		clicked = $(this).attr('href').replace('#','');

		// hides other .data-container and shows the clicked
		$('.data-container').hide();
		$active = $('#' + clicked + '.data-container').show();

		startSlides($active);

		// restores the .data-container
		restore();
	});
	
	// expand()
	function expand() {
		$button.html('<i class="icon active" /> Collapse');
		$pager.hide();
		$('.data-container').animate({
			'height' : '450px'
		}).css({
			'width' : '960px'
		});

		stopSlides($active);
	}

	// collapse()
	function collapse() {
		$button.html('<i class="icon" /> Expand');
		$pager.show();
		$('.data-container').animate({
			'height' : '150px'
		}).css({
			'width' : '2880px'
		});
	}

	// restore()
	function restore() {
		collapse();
		$button.unbind('click').toggle(
			function(){
				expand();
			},
			function(){
				collapse();
			}
		);
	}

	function startSlides(selector) {
		// $(selector).cycle('resumed');
		$(selector).cycle({
			'after' : onAfter,
			'fx' : 'none',
			'slideExpr' : '.grouped',
			'next' : 'a.slide-next',
			'prev' : 'a.slide-prev',
			'timeout' : 0
		});
	}

	function stopSlides(selector) {
		$(selector).find('.grouped').removeAttr('style');
		$(selector).cycle('pause');
	}

	function onAfter(curr, next, opts) {
		var msg = (opts.currSlide +1 ) + ' of ' + (opts.slideCount);
		$('span.current-page').html(msg);
	}
});