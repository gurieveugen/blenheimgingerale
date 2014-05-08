<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */

automatic_feed_links();


if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
                 'name' => 'About Us Left Sidebar',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
register_sidebar(array(
		'name' => 'About Us Right Sidebar Images', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    )); 
register_sidebar(array(
		'name' => 'Bottom Navigation', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    )); 
register_sidebar(array(
		'name' => 'Subscribe To Our Feed', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    )); 
register_sidebar(array(
		'name' => 'Get Our Newsletter', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    )); 
register_sidebar(array(
		'name' => 'Flickr', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    )); 
register_sidebar(array(
		'name' => 'Categories', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    ));
register_sidebar(array(
		'name' => 'Archives', 
		'before_widget' => '',
                'after_widget' => '',
		'before_title' => '',
                'after_title' => '',
    ));
register_sidebar(array(	'name' => 'Left Sidebar', 	'before_widget' => '<div class="leftsidebarcontent">',	'after_widget' => '</div>',	'before_title' => '<h1>',	'after_title' => '</h1>',    ));}
?>
