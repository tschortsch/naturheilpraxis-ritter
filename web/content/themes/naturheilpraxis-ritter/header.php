<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !IE]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

	<link rel="icon" sizes="128x128" href="<?php echo esc_attr( get_stylesheet_directory_uri() ); ?>/assets/images/favicon-128.png">
	<link rel="icon" sizes="192x192" href="<?php echo esc_attr( get_stylesheet_directory_uri() ); ?>/assets/images/favicon-192.png">
	<link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?php echo esc_attr( get_stylesheet_directory_uri() ); ?>/assets/images/favicon-128.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Naturheilpraxis Ritter</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Angebot</a></li>
				<li><a href="#">Preise</a></li>
				<li><a href="#">Termin finden</a></li>
				<li><a href="#">Über mich</a></li>
				<li><a href="#">Kontakt</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>