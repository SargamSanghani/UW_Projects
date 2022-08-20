<!DOCTYPE html>
<html lang="en-US">
<head>

		<meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?=get_the_title($post) ?> | <?=bloginfo('name')?></title>

	<meta name='robots' content='noindex,follow' />
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
	<div class="container">


		<header class="main">

		  <img src="<?=get_template_directory_uri()?>/images/header.jpg" alt="The Chopshop" />

			<span class="site_title">Chopshop</span>

		</header>