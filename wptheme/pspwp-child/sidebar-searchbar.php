<?php

$psp_agent_options = get_option('psp_agent_options');

$theId = 'top-search-bar-idx-id';

$targetDomain = $psp_agent_options['idx']['encoded_link'];

$aid = $psp_agent_options['idx']['agent_id'];

?>
<style>
.ac-renderer .ac-row {
	display: block !important;
	float: none !important;
}
</style>
<div class="sbr idx s-coll clearfix top-search">
	<script id="<?php echo $theId; ?>" type="text/javascript" src="http://widgets.diversesolutions.com/Scripts/Dynamic/widgetTLM.js?curDivID=<?php echo $theId; ?>&amp;curWidth=470&amp;curHeight=200&amp;type=quicksearch&amp;targetDomain=<?php echo $targetDomain; ?>&amp;aid=<?php echo $aid; ?>&amp;ssid=11&amp;productType=1&amp;location=1&amp;fields=013&amp;widgetType=2&amp;muteStyles=false&amp;currentURL=<?php echo get_bloginfo('url'); ?>/search/"></script>
</div>