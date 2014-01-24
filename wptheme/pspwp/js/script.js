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
    var slide_height = 125;
    var slide_container_height = slide_height * 4; /* be sure to account for margins! */
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
        //resetTabs(activate_tab);
        tabCollapse();
    });
    
    // clicks the first child/tab
    jQuery('ul.tab-control li:first-child a').click();
    
    // expand/collapse tab
    /*
    jQuerybutton.toggle(function(){
        tabExpand();
        
    }, function(){
        tabCollapse();
        
    });
    */
    jQuerybutton.click(function(e){
        e.preventDefault();
        if ( jQuery(this).hasClass('xpand') ) {
            tabCollapse();
        }
        else {
            tabExpand();
        }
    });
    // expand the tab
    // changes the label of the button to 'collapse'
    // stops the slideshow
    function tabExpand(){
        jQuerybutton.addClass('xpand').html('<i class="icon active"></i> Collapse');
        jQuery('.slide-container').animate({
            'height': slide_container_height + 'px'
        }, 500);
    }
    
    // collapse the tab
    // changes the label of the button to 'expand'
    // resumes the slideshow
    function tabCollapse(){
        jQuerybutton.removeClass('xpand').html('<i class="icon"></i> Expand');
		jQuery('.slide-container').animate({
            'height': slide_height + 'px'
        }, 500);
    }
    
    // per each tab click, resets the state
    // changes the label of the button to 'expand'
    function resetTabs(obj){
        tabCollapse();
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
"Vista",
"08750",
"22020",
"22414",
"22710",
"33037",
"33040",
"33043",
"33050",
"33904",
"39390",
"48290",
"49707",
"63732",
"77445",
"85364",
"88888",
"90003",
"90011",
"90025",
"90026",
"90028",
"90029",
"90037",
"90040",
"90046",
"90048",
"90049",
"90064",
"90068",
"90069",
"90077",
"90201",
"90212",
"90222",
"90247",
"90250",
"90274",
"90278",
"90280",
"90603",
"90620",
"90630",
"90631",
"90680",
"90723",
"90731",
"90745",
"90804",
"90805",
"91001",
"91010",
"91016",
"91024",
"91042",
"91104",
"91107",
"91205",
"91301",
"91306",
"91316",
"91321",
"91335",
"91342",
"91345",
"91351",
"91360",
"91364",
"91367",
"91377",
"91384",
"91387",
"91505",
"91506",
"91605",
"91606",
"91701",
"91722",
"91731",
"91737",
"91739",
"91745",
"91750",
"91752",
"91767",
"91768",
"91784",
"91786",
"91901",
"91902",
"91905",
"91906",
"91910",
"91911",
"91913",
"91914",
"91915",
"91916",
"91917",
"91931",
"91932",
"91934",
"91935",
"91941",
"91942",
"91945",
"91948",
"91950",
"91962",
"91963",
"91977",
"91978",
"91980",
"92003",
"92004",
"92007",
"92008",
"92009",
"92010",
"92011",
"92014",
"92019",
"92020",
"92021",
"92024",
"92025",
"92026",
"92027",
"92028",
"92029",
"92033",
"92036",
"92037",
"92040",
"92054",
"92056",
"92057",
"92058",
"92059",
"92060",
"92061",
"92064",
"92065",
"92066",
"92067",
"92069",
"92070",
"92071",
"92075",
"92078",
"92081",
"92082",
"92083",
"92084",
"92086",
"92091",
"92101",
"92102",
"92103",
"92104",
"92105",
"92106",
"92107",
"92108",
"92109",
"92110",
"92111",
"92113",
"92114",
"92115",
"92116",
"92117",
"92118",
"92119",
"92120",
"92121",
"92122",
"92123",
"92124",
"92126",
"92127",
"92128",
"92129",
"92130",
"92131",
"92139",
"92154",
"92171",
"92173",
"92201",
"92203",
"92210",
"92211",
"92220",
"92223",
"92225",
"92227",
"92231",
"92234",
"92236",
"92240",
"92242",
"92243",
"92244",
"92249",
"92250",
"92251",
"92252",
"92253",
"92254",
"92257",
"92259",
"92260",
"92262",
"92264",
"92266",
"92270",
"92274",
"92275",
"92276",
"92277",
"92301",
"92307",
"92308",
"92309",
"92311",
"92313",
"92314",
"92315",
"92324",
"92335",
"92337",
"92344",
"92345",
"92347",
"92352",
"92363",
"92365",
"92371",
"92373",
"92376",
"92377",
"92392",
"92394",
"92395",
"92407",
"92408",
"92411",
"92415",
"92424",
"92503",
"92505",
"92506",
"92507",
"92508",
"92509",
"92530",
"92532",
"92536",
"92539",
"92543",
"92544",
"92545",
"92548",
"92549",
"92551",
"92553",
"92555",
"92557",
"92561",
"92562",
"92563",
"92567",
"92570",
"92571",
"92582",
"92583",
"92584",
"92585",
"92586",
"92587",
"92590",
"92591",
"92592",
"92595",
"92596",
"92602",
"92603",
"92604",
"92610",
"92618",
"92620",
"92624",
"92627",
"92629",
"92630",
"92637",
"92646",
"92647",
"92648",
"92651",
"92653",
"92656",
"92660",
"92663",
"92672",
"92673",
"92675",
"92677",
"92679",
"92688",
"92691",
"92692",
"92694",
"92703",
"92704",
"92706",
"92707",
"92708",
"92780",
"92782",
"92801",
"92804",
"92806",
"92807",
"92808",
"92832",
"92833",
"92835",
"92840",
"92844",
"92865",
"92866",
"92867",
"92868",
"92869",
"92870",
"92879",
"92880",
"92881",
"92882",
"92883",
"92886",
"92887",
"93003",
"93010",
"93033",
"93063",
"93065",
"93203",
"93249",
"93271",
"93286",
"93308",
"93311",
"93313",
"93428",
"93449",
"93454",
"93505",
"93528",
"93535",
"93536",
"93543",
"93544",
"93546",
"93551",
"93552",
"93555",
"93602",
"93611",
"93635",
"93657",
"93702",
"93923",
"93940",
"94019",
"94022",
"94024",
"94070",
"94086",
"94087",
"94109",
"94509",
"94521",
"94534",
"94551",
"94553",
"94559",
"94561",
"94564",
"94577",
"94578",
"94583",
"94587",
"94589",
"94605",
"94706",
"94803",
"94904",
"94928",
"94947",
"94973",
"95023",
"95030",
"95051",
"95123",
"95133",
"95134",
"95206",
"95207",
"95212",
"95228",
"95242",
"95301",
"95337",
"95340",
"95355",
"95361",
"95386",
"95422",
"95451",
"95464",
"95503",
"95628",
"95776",
"95819",
"95822",
"95838",
"95842",
"95928",
"96057",
"96067",
"96080",
"96093",
"96130",
"96150",
];

/* Old Values: "Balboa Park","Bankers Hill","Bay Ho","Bay Park","Birdland","Black Mountain Ranch","Burlingame","Carmel Mountain Ranch","Carmel Valley","Centre City","City Heights","Clairemont","College Area","Del Mar Heights","Del Mar Mesa","Downtown San Diego","East Elliott","Egger Highlands","El Cerrito","Emerald City","Gateway","Golden Hill","Harbor Island","Harborview","Hillcrest","Horton Plaza","Kearny Mesa","Kensington","La Jolla","Lake Murray","Linda Vista","Logan Heights","Marston Hills","Memorial","Midtown","Mira Mesa","Miramar","Miramar Ranch North","Mission Beach","Mission Hills","Mission Valley","Morena","Navajo","Nestor","Normal Heights","North City","North Park","North Clairemont","Oak Park","Ocean Beach","Ocean Crest","Ocean View Hills","Old Town","Otay Mesa","Otay Mesa West","Pacific Beach","Pacific Highlands Ranch","Palm City","Point Loma ","Rancho Bernardo","Rancho Encantada","Rancho PeÃ±asquitos","Redwood Village","Rolando","Rolando Park","Sabre Springs","San Pasqual Valley","San Ysidro","Scripps Ranch","Scripps Miramar Ranch","Serra Mesa","Shelter Island","Sherman Heights","Sorrento Mesa","Sorrento Valley","South Park","Southeast San Diego ","Jamacha-Lomita","Mountain View","Mt. Hope","Paradise Hills","Shelltown","Skyline","Southcrest","Stockton","Talmadge","Tierrasanta","Tijuana River Valley","Torrey Highlands","Torrey Hills","University City","University Heights","Uptown","Webster"]; */
jQuery(document).ready(function(){
	jQuery( "#idx-q-Cities" ).autocomplete({
		source: availableCities
	});
});
 	
