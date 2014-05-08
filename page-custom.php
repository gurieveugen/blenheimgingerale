<?php
/*
Template Name: Custom
*/
?>

<?php include (TEMPLATEPATH . '/header2.php'); ?>

<div id="aboutuscontent">
<div id="leftborderdiv">
<div id="leftsidebar">
<?php dynamic_sidebar('Left Sidebar'); ?><div id="leftsidebarcontent"><h1>Our Philosophy</h1>
<p style="text-align:left">     <img src="/wp-content/themes/Blenheim/Images/b.png" width="15" height="16" alt="T" />lenheim’s philosophy is to preserve the rich heritage and family tradition of making an old-time ginger ale that has captured the heart of South Carolina and the many visitors to our state since the 1800’s <br/> <br/>     <img src="/wp-content/themes/Blenheim/Images/o.png" width="18" height="16" alt="H" />ur product will always remain pure and true to its
historical beginnings, while moving into the future with new creations and an expanding operation to ensure Good Ole’ Blenheim will be around for all to enjoy for a very long time.</p>
</div><!--End of div leftsidebarcontent-->

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