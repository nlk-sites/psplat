



jQuery(function(){

	jQuery('.side-panel-controls a').click(function(e){

		e.preventDefault();

		var clicked = jQuery(this).attr('href');

		jQuery('.side-panel-tab').hide();

		jQuery(clicked).show();

		jQuery('.side-panel-controls a').removeClass('active');

		jQuery(this).addClass('active');

	});



	jQuery('.side-panel').hover(slidePanelOut,slidePanelBack);



	function slidePanelOut() {

		jQuery('.side-panel').stop(true, true).delay(300).animate({

			'right' : 0

		});

		jQuery('.side-panel-controls li:first-child a').click();

	}

	function slidePanelBack() {

		jQuery('.side-panel').stop(true, true).delay(400).animate({

			'right' : '-425px'

		});

		jQuery('.side-panel-controls a').removeClass('active');

	}

});



