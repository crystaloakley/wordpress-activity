<!DOCTYPE html>
<html>
<head>

	<title><?php bloginfo('name'); ?></title>
	<meta charset="UTF-8">
	<meta name="language" content="english">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="TODO">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stylesheets/screen.css">
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/stylesheets/print.css">
	
	<!--[if lt IE 9]>
		<?php /* Support for HTML5 tags on IE 8 and lower */ ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
	<![endif]-->

	<!-- GOOGLE ANALYTICS -->
	<script>
		var accountID = 'TODO'; // EXAMPLE - UA-7648699-1
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    	
		ga('create', accountID, 'auto');
		ga('send', 'pageview');
    	
	</script>
	<!-- END GOOGLE ANALYTICS -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<header class="site-header">
		<h1>THIS IS THE HEADER</h1>
	</header>