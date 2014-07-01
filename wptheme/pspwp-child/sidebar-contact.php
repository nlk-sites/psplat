<?php
$psp_agent_options = get_option('psp_agent_options');
?>
<div class="left_bar">
			<div class="featured_heading">
				<span class="featured_title"><?php echo strtoupper($psp_agent_options['details']['name_display']); ?></span>
			</div>
			<img src="<?php echo $psp_agent_options['details']['agent_image']; ?>" width="242" />
			<div class="featured_heading">
				<div class="featured_contact">Contact Information</div>
			</div>
			<div id="featured_info">
				<span class="featured_info_label">direct</span>&nbsp;<?php echo $psp_agent_options['contact']['phone_direct']; ?><br>
				<span class="featured_info_label">office</span>&nbsp;<?php echo $psp_agent_options['contact']['phone_office']; ?><br>
				<span class="featured_info_label">fax</span>&nbsp;<?php echo $psp_agent_options['contact']['fax']; ?><br>
				<span class="featured_info_label">ca bre#</span>&nbsp;<?php echo $psp_agent_options['details']['bre']; ?><br>
			</div>
			<hr class="lightbar_hr">
			<a href="mailto:<?php echo $psp_agent_options['contact']['email']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/email_me.png" width="242" height="29"></a>
			<hr class="lightbar_hr">
			<div id="featured_follow">
				<a target="_blank" href="<?php echo $psp_agent_options['social']['facebook']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/featured_listings_fb_icon.png" width="32" height="32"></a>
				<a target="_blank" href="<?php echo $psp_agent_options['social']['twitter']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/featured_listings_twitter_icon.png" width="32" height="32"></a>
				<a target="_blank" href="<?php echo $psp_agent_options['social']['linkedin']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/featured_listings_in_icon.png" width="32" height="32"></a>
				<span class="featured_follow_label">FOLLOW // <?php echo strtoupper($psp_agent_options['details']['name_display']); ?></span>
			</div>
			<hr class="lightbar_hr"><br><br>
				<?php if ( $psp_agent_options['social']['twitter_widget'] ) { ?>
					<div class="twittercontainer">
					<?php echo $psp_agent_options['social']['twitter_widget']; ?>
					</div>
                <?php } ?>
			<div class="clearfix"></div><br><br><br><br><br>
</div>
