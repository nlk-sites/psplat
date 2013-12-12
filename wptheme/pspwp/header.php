<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package PSPWP
 */
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--meta name="viewport" content="width=device-width"-->
<!--meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"-->
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery_custom_light/jquery-ui-1.8.19.custom.css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery_custom_light/jquery.ui.tabs.css">
<script src="<?php bloginfo( 'template_url' ); ?>/js/libs/modernizr-2.0.6.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery_custom_light/jquery-ui-1.8.19.custom.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/jquery_custom_light/jquery.ui.tabs.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/home.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/nav.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/slider.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/login.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/structure.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/featured.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/listings.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/account.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/blog.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/contact.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/compare.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/mls_details.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/mls_results.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/pagination.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/side-panel.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/video-js/video-js.min.css" type="text/css">

<!--meta name="viewport" content="initial-scale=1.0, user-scalable=no" /-->

<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<style>
	.dsidx-standalone-disclaimer
	{
		display: none;
	}
	
	nav{
	width: 100%;
	left: 0;
	top: 22px;
	}
	
	#megaMenu {
		background: none;
	}
	
	#megaMenu.megaMenuHorizontal ul.megaMenu > li.menu-item > a, #megaMenu.megaMenuHorizontal ul.megaMenu > li.menu-item > span.um-anchoremulator {
    	border-left: 0px;
		background: url(<?php bloginfo('template_url'); ?>/images/main-nav-hover.png) no-repeat top center transparent;
		font-family: "Trebuchet MS", Helvetica, sans-serif  !important;
		text-decoration: none  !important;
		font-size: 14px  !important;
		color: #90a2ba  !important;
		text-transform: uppercase !important;
		padding-top: 20px  !important;
	}
	
	#megaMenu.megaMenuHorizontal ul.megaMenu > li.menu-item > a:hover
	{
		background-position: bottom center !important;
		color: white  !important;
	}
	
	#megaMenu ul.megaMenu li.menu-item.ss-nav-menu-reg li.menu-item.megaReg-with-sub > a:after, #megaMenu ul.megaMenu li.menu-item.mega-with-sub > a:after, #megaMenu ul.megaMenu li.menu-item.ss-nav-menu-mega > a:after, #megaMenu ul.megaMenu li.menu-item.ss-nav-menu-reg li.menu-item.megaReg-with-sub > span.um-anchoremulator:after, #megaMenu ul.megaMenu li.menu-item.mega-with-sub > span.um-anchoremulator:after, #megaMenu ul.megaMenu li.menu-item.ss-nav-menu-mega > span.um-anchoremulator:after 
{
    border-width: 0px;
	padding-left: 0px;
}

	#megaMenu ul li.menu-item.ss-nav-menu-reg ul.sub-menu li.menu-item > a,
#megaMenu ul li.menu-item.ss-nav-menu-reg ul.sub-menu li.menu-item > span.um-anchoremulator {
  border-bottom: 1px solid #4d5761;
}

#megaMenu.megaMenuHorizontal ul.megaMenu > li.menu-item > ul.sub-menu.sub-menu-1 {
	border-bottom: 10px solid #001F4B;
    padding: 15px;
}

#megaMenu .ss-nav-menu-with-img img { display: none; }

#megaMenu .ss-nav-menu-with-img > a > .wpmega-link-title, #megaMenu .ss-nav-menu-with-img > a > .wpmega-link-description, #megaMenu .ss-nav-menu-with-img > a > .wpmega-item-description, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-link-title, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-link-description, #megaMenu .ss-nav-menu-with-img > span.um-anchoremulator > .wpmega-item-description
{
	padding: 5px 0;
    width: 100%;
	/*text-align: center;
	padding-bottom: 5px;*/
	border-bottom: 1px solid #4d5761;
}
#megaMenu .wpmega-widgetarea img { border: 3px solid #fff; box-shadow: 2px 2px 2px rgba(0,0,0,0.6) }
#megaMenu ul li.menu-item.ss-nav-menu-mega ul li.menu-item.ss-nav-menu-item-depth-1 { padding: 11px 22px }
#megaMenu ul.megaMenu li.menu-item.ss-nav-menu-mega ul.sub-menu li.menu-item.ss-nav-menu-item-depth-1.ss-sidebar { width: auto }
#megaMenu ul.megaMenu > li.menu-item.ss-nav-menu-mega > ul.sub-menu-1, #megaMenu ul.megaMenu li.menu-item.ss-nav-menu-reg ul.sub-menu {
	background: url(<?php bloginfo('template_url'); ?>/images/navt.png) repeat 0 0;
}
#megaMenu ul.megaMenu > li.menu-item.ss-nav-menu-item-0 { margin-left: 230px }
#megaMenu .ss-colgroup .ss-col, #megaMenu .wpmega-nonlink li.widget, #megaMenu ul.megaMenu li.menu-item.ss-nav-menu-mega.mega-colgroup > ul > li { padding: 0 }
	.ui-autocomplete {
    left: 238px !important;
    top: 119px !important;;
    z-index: 100 !important;;
}
</style>
<script type="text/javascript">
jQuery(function() {
	jQuery('#agentmenuimg').each(function() {
		var agentog = jQuery(this).attr('src');
		jQuery(this).data('agentog', agentog).bind('reset', function() {
			jQuery(this).attr('src',jQuery(this).data('agentog'));
		});
	});
	jQuery('#menu-item-162 a img').each(function() {
		jQuery(this).parent().bind({
			'mouseenter': function() {
				jQuery('#agentmenuimg').attr('src',jQuery(this).children('img').attr('src'));
			},
			'mouseleave': function() {
				jQuery('#agentmenuimg').trigger('reset');
			}
		});
	});
});
</script>
</head>

<body <?php body_class(); ?>>
	<header>
		<a class="logo ir" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
	  <nav>
		<?php 
			wp_nav_menu( array(
				//'menu'       => 'mainmenu',
				'theme_location'  => 'primary',
				'depth'      => 2,
				'container'  => false,
				'menu_class' => 'main-nav',
				'fallback_cb' => 'wp_page_menu',
				//Process nav menu using our custom nav walker
				//'walker' => new wp_custom_navwalker()
				)
			); 
		?>
	  </nav>
	</header>
<div id="container">
