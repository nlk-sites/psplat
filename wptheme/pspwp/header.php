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

<!--meta name="viewport" content="initial-scale=1.0, user-scalable=no" /-->

<?php //wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<header>
		<a class="logo ir" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		<!--nav-->
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
		<!--/nav-->
	</header>
<div id="container">