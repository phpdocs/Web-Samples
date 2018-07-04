<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
		<title>How To Convert HTML Template to WordPress Theme - WPExplorer</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	</head>
	<body>
		<div id="wrap">
			<header class="header">
				<h1><?php bloginfo('name'); ?></h1>
				<p> <?php bloginfo('description'); ?></p>
				<p>This is header section. Put your logo and other details here.</p>
			</header><!-- .header -->
			<div>
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
			</div>