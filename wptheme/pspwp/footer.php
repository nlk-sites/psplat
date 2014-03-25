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
				<?php dynamic_sidebar('footersection3'); ?>
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