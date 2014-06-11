<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" >
	<meta charset="UTF-8">

	<!-- Responsive baby! -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Making the header responsive with Responsive Nav -->
	<link rel="stylesheet" href="scripts/responsive-nav/responsive-nav.css">
	<script src="scripts/responsive-nav/responsive-nav.js"></script>

	<!-- Font Awesome -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- My awesome style -->
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">

</head>
<body>

	<div class="row">
		<div class="col-sm-3">
			<header>
				<div id="header-top">
					<img src="images/celine-m-s.png" id="avatar">
					<p>Celine M.S.</p>
					<p>Photographies</p>
				</div>

				<nav id="pages" class="nav-collapse">
					<ul>
						<li>Portraits</li>
						<li>Paysages</li>
						<li>Moments</li>
						<li>Portes</li>
						<span style="line-height: 2em">Séparateur</span>
						<li>Qui suis-je ?</li>
						<li>Mon autre vie</li>
					</ul>

					<div id="cart">Panier</div>

				</nav>
					<div>
						<ul class="rs">
							<li><i class="fa fa-facebook-square"></i></li>
							<li><i class="fa fa-twitter-square"></i></li>
							<li><i class="fa fa-google-plus-square"></i></li>
							<li><i class="fa fa-linkedin-square"></i></li>
						</ul>
					</div>
			</header>
		</div>