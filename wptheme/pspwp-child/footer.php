<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package PSPWP Child
 */


$psp_agent_options = get_option('psp_agent_options');

?>

	 </div><div class="clearfix"></div>
	<!-- end of #container --> 

    <footer>
        <div class="container_ref" id="footerHandle">
            <img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139" style="margin-left:-4px;">
            	<div class="f_pod">
            		<h3 class="agent-name"><?php echo ( $psp_agent_options['details']['name_display'] ? $psp_agent_options['details']['name_display'] : ' ' ); ?></h3>
            		<h4 class="agent-bre"><?php echo ( $psp_agent_options['details']['bre'] ? $psp_agent_options['details']['bre'] : ' ' ); ?></h4>
					<div class="textwidget">
						<div class="footer_logo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/footer_logo.png" height="42px" width="186px">	
						</div>
					</div>
				</div>
				<div class="f_pod">
					<h3><a class="contact-office" href="<?php echo home_url(); ?>/contact-us/">Del Mar Plaza</a></h3>
					<div class="textwidget">
						<p class="contact-office">1555 Camino Del Mar<br>
						Suite 206<br>
						Del Mar, CA 92014<br>
						Phone (858)481-7939<br>
						Fax (858)481-5134</p>
					</div>
				</div>
				<div class="f_pod">
					<h3><a class="contact-office" href="<?php echo home_url(); ?>/contact-us/">15th Street – Del Mar</a></h3>
					<div class="textwidget">
						<p class="contact-office">1442 Camino Del Mar<br>
						Suite 209<br>
						Del Mar, CA 92014<br>
						Phone (858)481-7939<br>
						Fax (858)481-5134</p>
					</div>
				</div>
				<div class="f_pod">
					<h3><a class="contact-office" href="<?php echo home_url(); ?>/contact-us/">Prospect, La Jolla</a></h3>
					<div class="textwidget">
						<p class="contact-office">1298 Prospect St<br>
						Suite 1W<br>
						La Jolla, CA 92037<br>
						Phone (858)481-7939<br>
						Fax (858)481-5134</p>
					</div>
				</div>
			<img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139" style="margin-left:-4px;">
				<div class="f_pod">
					<h3>Follow Me </h3>
					<div class="textwidget">
						<p>
							<a target="_blank" href="<?php echo ( $psp_agent_options['social']['facebook'] ) ? $psp_agent_options['social']['facebook'] : 'http://www.facebook.com/pages/PS-Platinum-Properties/202142967222'; ?>" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);">
							<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"> Facebook</a>
						</p>
                		<p>
                			<a target="_blank" href="<?php echo ( $psp_agent_options['social']['twitter'] ) ? $psp_agent_options['social']['twitter'] : 'https://twitter.com/psplatinum'; ?>" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://twitter.com']);">
                				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"> Twitter</a>
            			</p>
            		</div>
				</div>
				<div class="f_pod"><h3>&nbsp;</h3>
					<div class="textwidget">
						<?php if ( $psp_agent_options['social']['linkedin'] ) { ?>
						<p><a target="_blank" href="<?php echo $psp_agent_options['social']['linkedin']; ?>" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);">
							<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"> LinkedIn</a></p>
						<?php } ?>
						<?php if ( $psp_agent_options['social']['vimeo'] ) { ?>
                		<p><a target="_blank" href="<?php echo $psp_agent_options['social']['vimeo']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/vimeo.png"> Vimeo</a></p>
                		<?php } ?>
                	</div>
				</div>
			<img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139">
            
        </div>
    </footer>
    <gutter>
        <div class="container_ref">
            <p>Copyright &copy; <?php echo date('Y'); ?>, Pacific Shores Platinum. All rights reserved.</p>
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