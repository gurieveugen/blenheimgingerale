<?php
/*
Template Name: Custom New
*/
?>

<?php include (TEMPLATEPATH . '/header2.php'); ?>

<div id="aboutuscontent">
<div id="leftborderdiv">
<div id="leftsidebar">
<?php dynamic_sidebar('Left Sidebar'); ?>
</div><!--End of div leftsidebar-->
<div id="bodycontent">
<div style="margin-left:0px;">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
                           <div class="entry" style="margin:0; style=0;">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                          </div>
		</div>
		<?php endwhile; endif; ?>
	<?php /*?><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?><?php */?></div>
    </div><!--End of div bodycontent-->

<div class="clear"></div>
</div>
</div><!--End of div aboutuscontent-->
</div><!--End of div aboutuscontainer-->
<div class="clear"></div>
<div id="bottomborder"></div>
<?php get_footer(); ?>