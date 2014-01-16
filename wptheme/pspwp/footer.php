<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package PSPWP
 */
?>

	 </div><div class="clearfix"></div>
	<!-- end of #container --> 

    <footer>
        <div class="container_ref" id="footerHandle">
            <img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139" style="margin-left:-4px;">
            	<?php dynamic_sidebar('footersection1'); ?>
				<?php dynamic_sidebar('footersection2'); ?>
			<img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139" style="margin-left:-4px;">
				<?php dynamic_sidebar('footersection3'); ?>
			<img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139">
            
        </div>
    </footer>
    <gutter>
        <div class="container_ref">
            <?php dynamic_sidebar('copyrightsection'); ?> 
        </div>
    </gutter>

<!-- scripts concatenated and minified via ant build script--> 
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery-ui-1.8.17.custom.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/libs/ui/jquery.ui.tabs.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.tools.min.js"></script>
<!-- <script src="http://cdn.jquerytools.org/1.2.7/all/jquery.tools.min.js"></script> -->
<script src="<?php bloginfo('template_url'); ?>/js/slides.jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/mustache.js"></script>
<script src="<?php bloginfo('template_url'); ?>/video-js/video.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/cycle.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/side-panel.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/slider.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/galleria-1.2.8.min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancy/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancy/jquery.fancybox.pack.js?v=2.1.5"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancy/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancy/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancy/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fancy/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/fancy/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<style>
	.fancybox-nav span {
		visibility: visible !important;
	}
</style>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery(".showvideopopup").fancybox({
			fitToView	: true,
			autoSize	: true,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
		
		jQuery("a.fancybox").fancybox(
			{
				 nextEffect : 'fade',
            	 prevEffect : 'fade',
				 type: 'image',
				 arrows : true,
				 loop : true,
			}
		);

	});
</script> 
<script>
	/*
			var cbpAnimatedHeader = (function() {

			    var docElem = document.documentElement,
			        rightsidebar = document.querySelector( '.right_bar' ),
					leftsidebar = document.querySelector( '.left_bar' ),
			        didScroll = false,
			        changeHeaderOn = 125;
				
				var right_offset = 0; 
				
				if(jQuery( '.right_bar' ))
				{
					right_offset = jQuery( '.right_bar' ).offset();
				}
				var left_offset = 0;
				
				if(jQuery( '.left_bar' ))
				{
					left_offset = jQuery( '.left_bar' ).offset();
				}
					
			 
			    function init() {
			        window.addEventListener( 'scroll', function( event ) {
			            if( !didScroll ) {
			                didScroll = true;
			                setTimeout( scrollPage, 250 );
			            }
			        }, false );
			    }
			 
			    function scrollPage() {
					var docheight = jQuery( window ).height();
			        var sy = scrollY();
			        if ( sy >= changeHeaderOn) {
			            jQuery('body').addClass('fixed-right-bar' );
						jQuery('body').addClass('fixed-left-bar' );
						if(right_offset)
						{
							jQuery('.right_bar').css('left', right_offset.left );	
							jQuery('.right_bar').css('max-height', docheight );	
						}
						
						if(left_offset)
						{
							jQuery('.left_bar').css('left', left_offset.left );
							jQuery('.left_bar').css('max-height', docheight );	
						}
						
			        }
			        else {
			            jQuery('body').removeClass('fixed-right-bar' );
						jQuery('body').removeClass('fixed-left-bar' );
			        }
			        didScroll = false;
			    }
			 
			    function scrollY() {
			        return window.pageYOffset || docElem.scrollTop;
			    }
			 
			    init();
			 
			})();
			
			function isScrolledIntoView(elem)
			{
			    var docViewTop = jQuery(window).scrollTop();
			    var docViewBottom = docViewTop + jQuery(window).height();
			
			    var elemTop = jQuery(elem).offset().top;
			    var elemBottom = elemTop + jQuery(elem).height();
			
			    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
			}
			*/
		</script>
<!-- end scripts--> 

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(function() { 	
	jQuery('#agentmenuimg, #comenuimg').each(function() {
		var agentog = jQuery(this).attr('src');
		jQuery(this).data('agentog', agentog).bind('reset', function() {
			jQuery(this).attr('src',jQuery(this).data('agentog'));
		});
	});
	jQuery('#menu-item-162 a img').each(function() {
		//console.log('js for '+ jQuery(this).attr('src'));
		jQuery(this).parent().bind({
			'mouseover': function() {
				jQuery('#agentmenuimg').attr('src',jQuery(this).children('img').attr('src'));
			},
			'mouseout': function() {
				jQuery('#agentmenuimg').trigger('reset');
			}
		});
	});
	jQuery('#menu-item-161 a img').each(function() {
		//console.log('js for '+ jQuery(this).attr('src'));
		jQuery(this).parent().bind({
			'mouseover': function() {
				jQuery('#comenuimg').attr('src',jQuery(this).children('img').attr('src'));
			},
			'mouseout': function() {
				jQuery('#comenuimg').trigger('reset');
			}
		});
	});
});
</script>
</body>
</html>