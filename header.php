<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starbase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Bootstrap CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starbase' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

			<a class="navbar-brand" href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="logo" class="nav-logo"></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#starbaseNav" aria-controls="starbaseNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	<?php
		wp_nav_menu( array(
			'theme_location'  => 'menu-1',
			'depth'           => 1,
			'container' 		  => 'ul',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'starbaseNav',
			'menu_id'         => 'menu',
			'menu_class'      => 'navbar-nav ml-auto nav-items-center',
			'fallback_cb'		  => 'WP_Bootstrap_Navwalker::fallback',
			'walker'			    => new WP_Bootstrap_Navwalker(),
		) );
	?>
</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">