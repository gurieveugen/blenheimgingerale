<?php
/**
 * @package WordPress
 * @subpackage Starkers
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	
<script type="text/javascript">
<!--

function roll(img_name, img_src)
   {
   document[img_name].src = img_src;
   }

//-->
</script>
<script type="text/javascript">
var lastDiv;

function setLast() {
	lastDiv = "gold";
	}

function swap(fromDiv, toDiv) {
var	fromID = document.getElementById(fromDiv);
	fromID.style.display = "none";
var	toID = document.getElementById(toDiv);
	toID.style.display = "block";
	lastDiv = toDiv;
	return false;
	}
	
window.onload = setLast;
</script>


</head>

<body style="height:1000px">
<div id="container">
<img src="/wp-content/themes/Blenheim/Images/wemakeginger.png" width="825" height="65" alt="We make gingerale the old fashioned way" />
 
<a href="http://www.blenheimgingerale.com/blog/"><img src="/wp-content/themes/Blenheim/Images/visitblog.png" width="153" height="25" align="right" alt="Visit Our Blog" /></a>
</div>