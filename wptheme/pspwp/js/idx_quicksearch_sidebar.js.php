<?php
header("Content-type: text/javascript");

//Get the WP-specifics, so that we can use constants and what not
$home_dir = preg_replace('^wp-content/themes/[a-z0-9\-/]+/js/^', '', getcwd());
include($home_dir . 'wp-load.php');
?>
var quickSearchScript, _ds_midx;
CreateObjectd140c = function () {
	_ds_midx = {
		isFramed: '',
		currentURL: "<?php get_bloginfo('url'); ?>search/",
		targetDomain: 'ead8tKOmNFVti8YtUKx7Ip9JBZtQ4nX1YcYX9ZpN9yM=',
		accountId: '85189',
		searchSetupId: '11',
		muteStyles: false,
		curDivID: 'divLocal8cb9a_',
		product: '1',
		location: '1',
		fields: '013',
		city: '',
		community: '',
		widgetType: '1'
	};
}
AddJavaScriptToDOMd140c = function (c, d, e) {
	if (1 != d) {
		var a = document.createElement("script"),
		b = document.getElementsByTagName("script")[0];
		a.async = !0;
		a.src = c;
		a.onload = a.onreadystatechange = function () {
			if (a.readyState) {
				if (a.readyState == "loaded" || a.readyState == "complete") {
					window[e] = 1;
				}
			} else {
				window[e] = 1;
			}
		};
		b.parentNode.insertBefore(a, b)
	}
	return 1;
};
CreateWidgetd140c = function () {
	(window.quickSearchFinished == 1) ? (window["ds.widget.view.quicksearch"].isProcessing = true, CreateObjectd140c(), new window["ds.widget.view.quicksearch"](_ds_midx), window["ds.widget.view.quicksearch"].isProcessing = false) : window.setTimeout("CreateWidgetd140c(false)", 20);
}
if (quickSearchScript != 1) {
	quickSearchScript = AddJavaScriptToDOMd140c("<?php get_template_directory_uri(); ?>/QuickSearch_v1_1_sidebar.js", quickSearchScript, 'quickSearchFinished') };
CreateWidgetd140c();
