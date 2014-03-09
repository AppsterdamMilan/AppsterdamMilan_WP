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
		<link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png" type="image/png">

		<!-- Foglio di stile principale -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" >
		
		<!-- HTML5 Shiv -->
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
		<![endif]-->

		<!-- riferimento head per WordPress -->
		<?php wp_head(); ?>
	</head>
	<body>
	
	<section class="container">
		<section class="row">
			<header class="col-sm-3">
				<h1>
					<a href="<?php bloginfo('url'); ?>">
						<?php bloginfo('name') ?>
					</a>
				</h1>
				<?php wp_nav_menu(array(
					'theme_location' => 'principale',
					'container' => 'nav',
					'menu_class' => 'list-unstyled'
				)); ?>
				<p class="info"><small>&copy; Stichting Appsterdam <?php the_time('Y'); ?></small></p>
				<p class="info"><small>
					<a href="">Privacy</a> | <a href="">Terms and conditions</a>
				</small></p>
			</header>
			<section id="corpo" class="col-sm-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<h2><a href="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				</article>
				<?php endwhile; else: ?>
				<article>
					<h2>Ops...</h2>
					<p>Qui non ci sono i droidi che state cercando!</p>
				</article>
				<?php endif; ?>
			</section>
		</section>
	</section>
		
	
	<!-- riferimento footer per WordPress -->
	<?php wp_footer(); ?>

	</body>
</html>