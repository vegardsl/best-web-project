<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Droplet
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Boostrap Core CSS . We always need to reference files in the THEME (underscores) folder -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dropletreviews' ); ?></a>

	<header class="site-header" role="banner">
		<!-- ========== NAVBAR ========== -->
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header pull-left">
		      <a class="navbar-brand"><img src="assets/img/logo-banner-vector.svg"></a>
		    </div>
		

		<?php 
			wp_nav_menu( array(
				'theme_location'  =>  'primary',
				'container' =>	'nav',
				'container_class'	=> 'nav'
				'menu_class' => 'nav navbar-nav navbar-right pull-right'
				) );
		?>
<!-- 			<ul class="nav navbar-nav navbar-right pull-right">
		      <li><a href="contact.html">Contact us</a></li>
		    </ul> -->
			
		  </div><!-- /.container-fluid -->
		</nav>
	</header>

	<div id="content" class="site-content">
