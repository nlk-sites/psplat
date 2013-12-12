<?php

class wp_custom_navwalker extends Walker_Nav_Menu {
	
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		//if( 0 == $depth )  
        // 	$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";
		$indent = str_repeat( "\t", $depth );
		$output	   .= "\n$indent<div class=\"sub-mini\">\n";
		$output	   .= "\n$indent<div class=\"module-outer\">\n";
		$output	   .= "\n$indent<div class=\"module-inner\">\n";
		$output	   .= "\n$indent<div class=\"sub-section\">\n";
		$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";		
	}
	
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat( "\t", $depth );
		$output	   .= "\n$indent</ul>\n";
		$output	   .= "\n$indent</div>\n";
		$output	   .= "\n$indent</div>\n";
		$output	   .= "\n$indent</div>\n";
		$output	   .= "\n$indent<div class=\"sub-footer\"></div>\n";
		$output	   .= "\n$indent</div>\n";		
	}
}

?>
