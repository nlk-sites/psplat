<?php

$psp_agent_options = get_option('psp_agent_options');

if ($psp_agent_options['idx']['top_search_js']) {
	$str = '<div class="sbr idx s-coll clearfix top-search">' . $psp_agent_options['idx']['top_search_js'] . '</div>';
	print $str;
} ?>