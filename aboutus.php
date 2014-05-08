<?php
/*
Template Name: About Us
*/
?>

<?php include (TEMPLATEPATH . '/header2.php'); ?>
<div id="aboutuscontent">
<div id="leftborderdiv">
<div id="leftsidebar">

<div id="leftsidebarcontent"><?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(1); ?>
</div><!--End of div leftsidebarcontent-->

</div><!--End of div leftsidebar-->
<div id="bodycontent">

<p style="padding-left:20px;">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
                        <div id="text">
			<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
	<?php /*?><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?><?php */?><!--End of div text-->
</p></div><!--End of div text-->
<?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(2); ?>
</div><!--End of div bodycontent-->

<div class="clear"></div>
</div>
</div><!--End of div aboutuscontent-->
</div><!--End of div aboutuscontainer-->
<div id="bottomborder"></div>
<?php get_footer(); ?>