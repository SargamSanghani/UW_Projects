<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php bloginfo('name'); ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<link type="text/css" rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">

		<header class="main">

			<img src="<?= get_template_directory_uri() ?>/images/header.jpg" alt="The Chopshop" />

			<span class="site_title"><?php bloginfo('name'); ?></span>

		</header>

		<div id="content">