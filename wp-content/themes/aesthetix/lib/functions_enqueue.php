<?php
// Add Theme Scripts
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts(){
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array(), NULL, false);
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('slider_animation', 'https://alexandrebuffet.fr/codepen/slider/slick-animation.min.js', array(), NULL, true);
	wp_enqueue_script('slider', get_template_directory_uri() . '/inc/slider/slick.min.js', array(), NULL, true);
	wp_enqueue_script('aos_js', get_template_directory_uri() . '/inc/animation/wow.min.js', array(), NULL, true);
	wp_enqueue_script('theme_main', get_template_directory_uri() . '/js/main.js', array(), NULL, true);
}
// Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'theme_styles');
function theme_styles(){
	wp_enqueue_style('slider_theme_css', get_template_directory_uri() . '/inc/slider/slick-theme.css', array(), '1.0', 'all');
	wp_enqueue_style('slider_css', get_template_directory_uri() . '/inc/slider/slick.css', array(), '1.0', 'all');
	wp_enqueue_style('main_theme_css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
	wp_enqueue_style('base_theme_css', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
	wp_enqueue_style('bootstrap_theme_css', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.css', array(), '1.0', 'all');
	wp_enqueue_style('animate_css', get_template_directory_uri() . '/inc/animation/animate.min.css', array(), '1.0', 'all');
}
?>
