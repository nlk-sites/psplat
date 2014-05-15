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
							<a target="_blank" href="<?php echo 'http://www.facebook.com/pages/PS-Platinum-Properties/202142967222'; ?>" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.facebook.com']);">
							<img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"> Facebook</a>
						</p>
                		<p>
                			<a target="_blank" href="<?php echo 'https://twitter.com/psplatinum'; ?>" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://twitter.com']);">
                				<img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"> Twitter</a>
            			</p>
            		</div>
				</div>
				<div class="f_pod"><h3>&nbsp;</h3>
					<div class="textwidget">
						<p><a target="_blank" href="<?php echo 'https://www.linkedin.com/in/brettcombs'; ?>" onclick="javascript:_gaq.push(['_trackEvent','outbound-widget','http://www.linkedin.com']);">
							<img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png"> LinkedIn</a></p>
                		<p><a target="_blank" href="<?php echo 'http://vimeo.com/65088484'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/vimeo.png"> Vimeo</a></p>
                	</div>
				</div>
			<img class="f_divider" src="<?php bloginfo( 'template_url' ); ?>/images/footer_divider.png" width="9" height="139">
            
        </div>
    </footer>
    <gutter>
        <div class="container_ref">
            <?php dynamic_sidebar('copyrightsection'); ?> 
        </div>
    </gutter>





<?php wp_footer(); ?>

</body>
</html>