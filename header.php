<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav>
			<input type="checkbox" id="show-menu">
			<label for="show-menu" class="menu-bar">
				<i class="fa fa-bars"></i>
			</label>
			<!-- IF you can raplace here a logo . just uncomment the lines below also image tags -->
			<?php 
			// if (function_exists('the_custom_logo')) {
			// 	$the_custom_logo_id = get_theme_mod('custom_logo');
			// 	$logo = wp_get_attachment_images_src($the_custom_logo_id);
			// }
			?>
			<!-- <img class="" src="<?php //echo $logo[0]; ?>" alt="Site Logo"> -->
			<a href="/wordpress/indepandent" class="logo"><?php bloginfo('name'); ?></a>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container' => '',
						'menu' => '<ul>',
					)
				);
			?>
		</nav>
	</header>