<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<!-- Responsive baby! -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/scripts/html5.js" type="text/javascript"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<!-- Making the header responsive with Responsive Nav -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scripts/responsive-nav/responsive-nav.css">
	<script src="<?php bloginfo('template_directory'); ?>/scripts/responsive-nav/responsive-nav.js"></script>

	<!-- Font Awesome -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- My awesome style -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/style.css">

</head>
<body>

	<div class="row">
		<div class="col-sm-3" id="left-navbar">
			<header>
				<div id="header-top">
					<img src="<?php bloginfo('template_directory'); ?>/images/celine-m-s.png" id="avatar">
					<h1><p><a href=" <?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p></h1>
					<h2><p><a href=" <?php echo home_url(); ?>"><?php bloginfo('description'); ?></a></p></h2>
				</div>

				<nav id="pages" class="nav-collapse">
					<?php wp_nav_menu(); ?>
				</nav>
					<div>
						<ul class="rs">
							<li><a href="https://www.facebook.com/celine.loiseau3" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="https://twitter.com/CelineMartinetS" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="https://plus.google.com/+CelineMartinetSanchez" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="http://fr.linkedin.com/in/celinemartinet1/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
			</header>
		</div>