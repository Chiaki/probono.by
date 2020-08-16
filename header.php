<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package probono
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>   
	<!-- Plugins CSS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/plugins/plugins.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/linearicons/fonts.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet"  href="<?php echo get_template_directory_uri();?>/smart-form/contact/css/smart-forms.css">
	<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">

	<!-- Android -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon/favicon-36x36.png" sizes="36x36">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon/favicon-48x48.png" sizes="48x48">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon/favicon-72x72.png" sizes="72x72">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon/favicon-144x144.png" sizes="144x144">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicon/favicon-192x192.png" sizes="192x192">
	<link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicon/manifest.json">
	<!-- iOS/Safari -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicon/apple-icon-180x180.png">
	<!-- Windows Phone -->
	<meta name="msapplication-TileColor" content="#a78859">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/favicon/ms-icon-70x70.png?v=NmYO8WoKWA">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/favicon/ms-icon-144x144.png?v=NmYO8WoKWA">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/favicon/ms-icon-150x150.png?v=NmYO8WoKWA">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/favicon/ms-icon-310x310.png?v=NmYO8WoKWA">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri();?>/favicon/browserconfig.xml" />
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="preloader">
		<div id="preloader-inner"></div>
	</div><!--/preloader-->

	<nav class="navbar navbar-expand-lg navbar-light bg-white">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">
				<img src="<?php echo get_template_directory_uri();?>/images/logo.svg" alt="">
			</a>
			<div class="navbar-hotline">
				<div class="navbar-string">Круглосуточная горячая линия:</div>
				<div class="navbar-phone"><?php the_field('phone', 'option'); ?></div>
				<a href="tel:<?php the_field('phone', 'homepage-options'); ?>" class="btn btn-primary btn-rounded mt10 mb10">Позвонить</a>
			</div>
			<?php /*
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#law-firm-navbar" aria-controls="law-firm-navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			*/ ?>
			<?php /*
			<div class="collapse navbar-collapse" id="law-firm-navbar">
			
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Practice areas
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="practice-area-family-law.html">Family law</a>
							<a class="dropdown-item" href="practice-area-commercial.html">Commercial property</a>
							<a class="dropdown-item" href="practice-area-residential.html">Residential property</a>
							<a class="dropdown-item" href="practice-area-private.html">Private client</a>
							<a class="dropdown-item" href="practice-area-corporate.html">Corporate Recovery</a>
							<a class="dropdown-item" href="practice-area-employment.html">Employment</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="news.html">news</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto navbar-right">
					<li class="nav-item">
						<a class="nav-link" href="#">Request a Quote</a>
					</li>
					<li class="nav-item">
						<a href="tel:<?php the_field('phone', 'option'); ?>" class="nav-link"><i class="icon-phone-outgoing"></i> <?php the_field('phone', 'option'); ?></a>
					</li>
				</ul>
			</div>
			*/ ?>
		</div>
	</nav>

