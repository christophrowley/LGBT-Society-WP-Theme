<?php
/* 
 *	Designed and built by Chris Rowley
 *	Template Name: Header
 */
?>
<!DOCTYPE html>

<?php 
	show_admin_bar( false );
	remove_admin_login_header()
?>

<head>
	<title>
		UCLan:LGBT<?php is_front_page() ? '' : wp_title(' - '); ?> 
	</title>

	<script type="text/javascript" src="//use.typekit.net/yck3tbp.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="<?php bloginfo('template_directory')?>/assets/scripts/fastclick.js"></script>

	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory')?>/assets/images/fav.png"/>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/styles/panelio.css">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/styles/responsivegrid.css">


	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<meta name="twitter:card" content="about"/>
	<meta name="twitter:description" content="Dot Ones is an IT support company based in Mayfair, providing support, maintenance and monitoring to small and medium sized companies (SMEs) in London."/>
	<meta name="twitter:title" content="UCLan:LGBT"/>
	<meta name="twitter:site" content="@UCLanLGBT"/>
	<meta name="twitter:domain" content="UCLan:LGBT"/>
	<meta name="twitter:image:src" content="http://uclanlgbt.co.uk/wp-content/themes/lgbt2015/logo.svg"/>
	<meta name="twitter:creator" content="@UCLanLGBT"/>

	<meta property="og:title" content="UCLan:LGBT"/>
	<meta property="og:url" content="http://uclanlgbt.com/"/>
	<meta property="og:image" content="http://uclanlgbt.com/wp-content/themes/uclanlgbt/assets/images/logo-small.png"/>
	<meta property="og:description" content="A multi-award winning student society bringing together supporters of the LGBT* community."/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php include 'includes/panel.php'; ?>
	<?php include 'includes/nav_bar.php'; ?>
	<div id="container">