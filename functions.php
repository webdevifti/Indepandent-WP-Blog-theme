<?php

function indepandent_theme_support(){
	// Supporting the title
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	// if site has a logo just uncomment the line below;
	//add_theme_support('custom-logo');
}
add_action('after_setup_theme','indepandent_theme_support');

// Register the theme Navigation Menus
function indepandent_menus(){
	$menu_locations = array(
		'primary' => 'Main Top menu'
	);
	register_nav_menus($menu_locations);
}
add_action('init','indepandent_menus');

// Calling the widgets
function indepandent_widgets(){
	register_sidebar(
		array(
			'name' => 'Widget For Sidebar',
			'id' => 'sidebar-widget-1',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			'before_widget' => '<div class="widgets">',
			'after_widget' => '</div>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Widget For Sidebar',
			'id' => 'footer-widget-1',
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			'before_widget' => '<div class="col-md-4">',
			'after_widget' => '</div>'
		)
	);
}
add_action('widgets_init','indepandent_widgets');

// All the css file registered
function indepandent_register_styles(){
	$css_version = wp_get_theme()->get('Version');
	wp_enqueue_style('indepandent_css_styles', get_template_directory_uri()."/style.css", array('indepandent_bootstrap_styles'),$css_version,'all');

	wp_enqueue_style('indepandent_bootstrap_styles', get_template_directory_uri()."/assets/css/bootstrap.min.css", array(),'3.3.7','all');

	wp_enqueue_style('indepandent_fontawsome_styles', get_template_directory_uri()."/assets/css/font-awesome.min.css", array(),'4.7.0','all');


}

add_action('wp_enqueue_scripts','indepandent_register_styles');

// All the javascript file registered here
function indepandent_register_scripts(){
	wp_enqueue_script('indepandent_jquery', get_template_directory_uri()."/assets/js/jquery-3.3.1.min.js",array(),"3.3.1",true);
	wp_enqueue_script('indepandent_js_bootstrap', get_template_directory_uri()."/assets/js/bootstrap.min.js",array(),"3.3.7",true);
}

add_action('wp_enqueue_scripts','indepandent_register_scripts');


?>