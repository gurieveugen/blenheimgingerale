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
</head>

<body>
<div id="aboutuscontainer">
<div id="header">
<a href="http://www.blenheimgingerale.com/"><img src="/wp-content/themes/Blenheim/Images/toplogo.png" width="119" height="122" align="left" alt="Blenheim"  style="margin-left:15px"/></a>
<a href="feed://www.blenheimgingerale.com/feed/"><img src="/wp-content/themes/Blenheim/Images/blogsubscriberss.png" width="153" height="25" align="right" alt="Subscribe Rss" style="margin-right:15px" /></a>
</div><!--End of div header-->
<div id="bottomnavigation">
<?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(3); ?>
</div>
