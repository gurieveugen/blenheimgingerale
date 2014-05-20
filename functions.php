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

// =========================================================
// REQUIRE
// =========================================================
require_once 'includes/page_factory.php';

// =========================================================
// Security page
// =========================================================
$GLOBALS['security'] = new PageFactory('Security', array('icon_code' => 'f132', 'parent_page' => ''));
$GLOBALS['security']->addFields('Question & answer', array(
	array('name' => 'Question', 'type' => 'text'),
	array('name' => 'Answer', 'type' => 'text')));

add_action('pre_comment_on_post', 'preCommentCheck');



function preCommentCheck()
{	
	$options = $GLOBALS['security']->getAll();
	if(!isset($_POST['question']) || $_POST['question'] != $options['question_&_answer']['answer']) 
	{
		wp_die('Wrong security answer!');			
	}
	
}
/**
 * Send debug information to email
 * @param  mixed $args --- debug info
 * @return boolean     --- return mail function result
 */
function mailDebug($args)
{
	return mail('tatarinfamily@gmail.com', 'debug', print_r($args, true));
}
?>
