<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Charset -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" >

		<!-- Title and description -->
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		
		<!-- Metadati and links -->
		<link rel="profile" href="http://gmpg.org/xfn/11" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/logo_mi.png" type="image/png">

		<!-- Mobile -->
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/logo_mi.svg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="icon" sizes="192x192" href="<?php bloginfo('template_url'); ?>/img/logo_mi.svg">
		<meta name="mobile-web-app-capable" content="yes">

		<!-- Main stylesheet -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
		
		<!-- HTML5 Shiv -->
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/bower_components/html5shiv-dist/html5shiv.js"></script>
		<![endif]-->

		<!-- WordPress head hook -->
		<?php wp_head(); ?>
	</head>
	<body>
	
	<section class="container">
		<section class="row">
			<header class="col-md-3">
				<h1>
					<a href="<?php bloginfo('url'); ?>">
						
						<img src="<?php bloginfo('template_url'); ?>/img/logo_mi.svg" alt="<?php bloginfo('name') ?>">
					</a>
				</h1>
				<button class="btn btn-primary btn-lg visible-xs visible-sm">
					<span class="fa fa-bars"></span>
				</button>
				<?php wp_nav_menu(array(
					'theme_location' => 'principale',
					'container' => 'nav',
					'menu_class' => 'list-unstyled'
				)); ?>
				<p class="social">
					<a target="_blank" href="https://www.facebook.com/AppsterdamMilan"><span class="fa fa-facebook-square"></span></a>
					<a target="_blank" href="https://twitter.com/AppsterdamMilan"><span class="fa fa-twitter"></span></a>
					<a target="_blank" href="https://github.com/AppsterdamMilan"><span class="fa fa-github"></span></a>
				</p>
				<p class="info"><small>&copy; Stichting Appsterdam <?php the_time('Y'); ?></small></p>
				<p class="info"><small>
					<a href="">Privacy</a> | <a href="">Terms and conditions</a>
				</small></p>
			</header>