<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Set di caratteri -->
		<meta charset="<?php bloginfo( 'charset' ); ?>" >

		<!-- Titolo e descrizione -->
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		
		<!-- Metadati e collegamenti vari -->
		<link rel="profile" href="http://gmpg.org/xfn/11" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/logo_mi.svg" type="image/png">

		<!-- Foglio di stile principale -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
		
		<!-- HTML5 Shiv -->
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/bower_components/html5shiv-dist/html5shiv.js"></script>
		<![endif]-->

		<!-- riferimento head per WordPress -->
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
				<!-- <div class="widget embed">
					<iframe width="100%" height="430" src="http://meetu.ps/2GCTlB" frameborder="0"></iframe>
				</div> -->
			</header>