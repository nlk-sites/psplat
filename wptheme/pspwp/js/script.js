jQuery(document).ready(function(){
    // nav revamped
    jQuery('.main-nav > li').hover(function(){
        jQuery(this).toggleClass('active');
        jQuery(this).find('.sub').stop(true, true).slideDown(500);
        jQuery(this).find('.sub-mini').stop(true, true).slideDown(500);
    }, function(){
        jQuery(this).toggleClass('active');
    jQuery(this).find('.sub').stop(true, true).slideUp(300);
    jQuery(this).find('.sub-mini').stop(true, true).slideUp(300);
        
    });
		
    // tab + sliding combo
    
    var activate_tab;
    var slide_margin = 10 * 3;
    var slide_height = 240;
    var slide_container_height = slide_height * 3; /* be sure to account for margins! */
    var slide_duration = 0;
    var jQuerybutton = jQuery('a.btn-more');
    
    // hide all tabs
    jQuery('.tab').hide();
    
    // tab click function
    jQuery('ul.tab-control li a').click(function(e){
        e.preventDefault();
    jQuery('ul.tab-control li a').removeClass('active');
    jQuery(this).addClass('active');
    
    jQuery('.tab').hide();
    activate_tab = jQuery(this).attr('href');
    jQuery(activate_tab).show();
    // resets the tab/state of expand/collapse button
    resetTabs(activate_tab);
        
    });
    
    // clicks the first child/tab
    jQuery('ul.tab-control li:first-child a').click();
    
    // expand/collapse tab
    jQuerybutton.toggle(function(){
        tabExpand();
        
    }, function(){
        tabCollapse();
        
    });
    
    // expand the tab
    // changes the label of the button to 'collapse'
    // stops the slideshow
    function tabExpand(){
        jQuerybutton.html('<i class="icon active"></i> Collapse');
        
		/*
        jQuery('.slide').css({
        'display': 'block',
            
            'left': 'auto',
            
            'position': 'relative',
            
            'top': 'auto'
    });
        */
        //jQuery('#tab-mini-bar .pager').hide();
    jQuery('.slide-container').animate({
            'height': slide_container_height + 'px'
        }, 500);
        
    }
    
    // collapse the tab
    // changes the label of the button to 'expand'
    // resumes the slideshow
    function tabCollapse(){
        jQuerybutton.html('<i class="icon"></i> Expand');
    //jQuery('#tab-mini-bar .pager').show();
        
		jQuery('.slide-container').animate({
            'height': slide_height + 'px'
        }, 500);
		
		/*
        jQuery('.slide-container').animate({
            'height': slide_height + 'px'
        }, 500).cycle({
        'after': onAfter,
            
            'fx': 'nonde',
            
            'next': '.slide-next',
            
            'prev': '.slide-prev',
            
            'timeout': slide_duration
    });*/
        
    }
    
    // per each tab click, resets the state
    // changes the label of the button to 'expand'
    function resetTabs(obj){
        jQuerybutton.unbind('click').html('<i class="icon"></i> Expand').toggle(function(){
        tabExpand();
            
        }, function(){
        tabCollapse();
            
        });
    //jQuery('#tab-mini-bar .pager').show();
    // cycle plugin
    //jQuery('.slide-container').cycle('stop').animate({
        //    'height': slide_height + 'px'
        //});
    /*jQuery(obj).find('.slide-container').cycle({
        'after': onAfter,
            
            'fx': 'none',
            
            'next': '.slide-next',
            
            'prev': '.slide-prev',
            
            'timeout': slide_duration
    });
        */
    }
    
    function onAfter(curr, next, opts){
        var msg = (opts.currSlide + 1) + ' of ' + (opts.slideCount);
    jQuery('span.current-page').html(msg);
        
    }
    
    var x = 0;
    
    if (jQuery("#slides").length) {
        jQuery("#slides").slides({
        preload: true,
            
            preloadImage: 'images/loading.gif',
            
            play: 3.5 * 1000,
            
            pause: 2.5 * 1000,
            
            hoverPause: true,
            
            //generateNextPrev: true,
            
            generatePagination: false,
            
            animationStart: function(current){
            
                jQuery('.caption').animate({
                
                    bottom: -35
                
                }, 100);
                
                if (window.console && console.log) {
                
                    // example return of current slide number
                    
                    console.log('animationStart on slide: ', current);
                    
                };
                
                            },
            
            animationComplete: function(current){
            
                jQuery('.caption').animate({
                
                    bottom: 0
                
                }, 200);
                
                if (window.console && console.log) {
                
                    // example return of current slide number
                    
                    console.log('animationComplete on slide: ', current);
                    
                };
                
                            },
            
            slidesLoaded: function(){
            
                jQuery('.caption').animate({
                
                    bottom: 0
                
                }, 200);
                
            }
            
        });
        
    }
    
    jQuery('.s_slide').click(function(){
        jQuery('#thumbnails').hide();
    jQuery('#slides').show();
    jQuery("#mls_details_image_box_outer").animate({
            width: 408
        }, 200);
    jQuery('#mls_details_right').show();
    jQuery('#mls_details_image_box_footer .right').hide();
        
    });
    
    jQuery('.s_thumb').click(function(){
        jQuery('#slides').hide();
    jQuery('#thumbnails').show();
    jQuery('#mls_details_image_box_footer .right').show();
    
    if (x === 1) {
        jQuery('#mls_details_right').hide();
            
            jQuery("#mls_details_image_box_outer").animate({
                width: 650
            }, 200);
            
        }
        
    });
    
    jQuery("#expand_thumb").toggle(function(){
        jQuery('#mls_details_right').hide();
    jQuery("#thumbnails").animate({
            height: 400,
            width: 637
        }, 200);
    jQuery("#mls_details_image_box_outer").animate({
            width: 650
        }, 200);
    x = 1;
        
    }, function(){
        jQuery('#mls_details_right').show();
    jQuery("#thumbnails").animate({
            height: 227,
            width: 395
        }, 200);
    jQuery("#mls_details_image_box_outer").animate({
            width: 408
        }, 200);
    x = 0;
        
    });
    
    // gallery and video
    
    jQuery('.s_video').click(function(){
        jQuery('#gallery').hide();
    jQuery('#video').show();
    jQuery('#featured_details_image_box_footer .right').hide();
        
    });
    
    jQuery('.s_gallery').click(function(){
        jQuery('#video').hide();
    jQuery('#gallery').show();
    jQuery('#featured_details_image_box_footer .right').show();
        
    });
    
    jQuery('#fullscreen_thumb').click(function(){
        // Get the element that we want to take into fullscreen mode
    var element = document.getElementById('galleria');
    
    // These function will not exist in the browsers that don't support fullscreen mode yet, 
    // so we'll have to check to see if they're available before calling them.
    
    if (element.mozRequestFullScreen) {
        // This is how to go into fullscren mode in Firefox
            
            // Note the "moz" prefix, which is short for Mozilla.
            
            element.mozRequestFullScreen();
            
        }
        else 
            if (element.webkitRequestFullScreen) {
            
                // This is how to go into fullscreen mode in Chrome and Safari
                
                // Both of those browsers are based on the Webkit project, hence the same prefix.
                
                element.webkitRequestFullScreen();
                
            }
    // Hooray, now we're in fullscreen mode!
    });
    
    jQuery('#largeOptionStore').html(jQuery("#largeOption").html());
	jQuery("#largeOption").html('');
    jQuery(".sbr-opt").click(function(){
        jQuery(".sbr").toggleClass("s-coll");
    if (jQuery(".sbr").hasClass("s-coll")) {
        jQuery(".sbr-opt").html("More Options");
            //Copy more option to temp
			jQuery('#largeOptionStore').html(jQuery("#largeOption").html());
			jQuery("#largeOption").html('');
			
			jQuery('#smallOption').html(jQuery("#smallOptionStore").html());
			
        }
        else {
        	
			jQuery('#smallOptionStore').html(jQuery("#smallOption").html());
			jQuery("#smallOption").html('');
			
			jQuery('#largeOption').html(jQuery("#largeOptionStore").html());
			
            jQuery(".sbr-opt").html("Less Options");
            
        }
        
    });
    
    
    jQuery("#tabs").tabs();
    jQuery("#schooltabs").tabs();
    
    function fixHeights(){
        //equal heights across floats
    // get the heights of each column in an array
    // [ 20, 20. 560 ] in this example
    var heights = jQuery('.column').map(function(i, e){
        return jQuery(e).height();
            
        }).get();
    
    // set all column heights to the max height in heights
    jQuery('.column').css("min-height", (Math.max.apply(this, heights)));
        
    }
    
    //fixHeights();
    
    //initiate modals
    
    //jQuery("a[rel]").overlay({
    //    mask: '#000',
    //    effect: 'apple'
    //});
    
    
    
    
    //gallery
    
    if (jQuery('#galleria').length) {
        Galleria.loadTheme('js/themes/classic/galleria.classic.min.js');
    Galleria.run('#galleria');
        
    }
	
    
});
		var availableCities = ["Cardiff-by-the-Sea",
"Carmel Valley",
"Del Mar",
"Downtown",
"Encinitas",
"La Jolla",
"Mission Hills",
"Pacific Beach/Mission Beach",
"Point Loma (Pt Loma)",
"Rancho Santa Fe",
"Solana Beach",
"University City/UTC",
"-------------",
"Alpine",
"Bonita",
"Borrego",
"Boulevard",
"Campo",
"Cardiff-by-the-Sea",
"Carlsbad",
"Carmel Valley",
"Chula Vista",
"Clairemont/Bay Park",
"Coronado",
"Del Cerro",
"Del Mar",
"Descanso",
"Downtown",
"Dulzura",
"East San Diego",
"El Cajon",
"Encanto",
"Encinitas",
"Escondido",
"Fallbrook",
"Golden Hills",
"Imperial Beach",
"Jacumba",
"Jamul",
"Julian",
"La Jolla",
"La Mesa",
"Lakeside",
"Lemon Grove",
"Linda Vista",
"Logan Heights",
"Mira Mesa",
"Mission Hills",
"Mission Valley",
"Mt Laguna",
"National City",
"Normal Heights",
"Ocean Beach (OB)",
"Pacific Beach/Mission Beach",
"Pala",
"Palomar Mt",
"Paradise Hills",
"Pauma Valley",
"Pine Valley",
"Point Loma (Pt Loma)",
"Potrero",
"Poway",
"Ramona",
"Ranchita",
"Rancho Bernardo/4S Ranch/Santaluz/Crosby Estates",
"Rancho Bernardo/Sabre Springs/Carmel Mt Ranch",
"Rancho Penasquitos",
"Rancho Santa Fe",
"San Carlos",
"San Marcos",
"San Ysidro",
"Scripps Ranch",
"Solana Beach",
"Spring Valley",
"Talmadge/San Diego Central",
"Tecate",
"Tierrasanta",
"University City/UTC",
"Valley Center",
"Vista"];

/* Old Values: "Balboa Park","Bankers Hill","Bay Ho","Bay Park","Birdland","Black Mountain Ranch","Burlingame","Carmel Mountain Ranch","Carmel Valley","Centre City","City Heights","Clairemont","College Area","Del Mar Heights","Del Mar Mesa","Downtown San Diego","East Elliott","Egger Highlands","El Cerrito","Emerald City","Gateway","Golden Hill","Harbor Island","Harborview","Hillcrest","Horton Plaza","Kearny Mesa","Kensington","La Jolla","Lake Murray","Linda Vista","Logan Heights","Marston Hills","Memorial","Midtown","Mira Mesa","Miramar","Miramar Ranch North","Mission Beach","Mission Hills","Mission Valley","Morena","Navajo","Nestor","Normal Heights","North City","North Park","North Clairemont","Oak Park","Ocean Beach","Ocean Crest","Ocean View Hills","Old Town","Otay Mesa","Otay Mesa West","Pacific Beach","Pacific Highlands Ranch","Palm City","Point Loma ","Rancho Bernardo","Rancho Encantada","Rancho PeÃ±asquitos","Redwood Village","Rolando","Rolando Park","Sabre Springs","San Pasqual Valley","San Ysidro","Scripps Ranch","Scripps Miramar Ranch","Serra Mesa","Shelter Island","Sherman Heights","Sorrento Mesa","Sorrento Valley","South Park","Southeast San Diego ","Jamacha-Lomita","Mountain View","Mt. Hope","Paradise Hills","Shelltown","Skyline","Southcrest","Stockton","Talmadge","Tierrasanta","Tijuana River Valley","Torrey Highlands","Torrey Hills","University City","University Heights","Uptown","Webster"]; */
jQuery(document).ready(function(){
	jQuery( "#idx-q-Cities" ).autocomplete({
		source: availableCities
	});
});
 	
