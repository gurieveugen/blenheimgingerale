<?php
/*
Template Name: Blog Template
*/
?>
<?php include (TEMPLATEPATH . '/header3.php');  ?>
<div id="blogcontent">
<?php get_sidebar(); ?>


<div id="bodycontent">
<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

              
<?php 
global $wp_query;
if ( $wp_query->current_post === 0 ) {
   $postclass = 'altdatetitle';
}else{
   $postclass = 'datetitle';
} ?>


<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<div id="<?php echo $postclass; ?>">
        <div id="titlecat">
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <h3 id="cat"><?php the_category(',  ') ?> </h3> 
        <p ><div class="addthis_toolbox addthis_default_style" style="margin:0; padding:0;display:inline; float:right; margin-right:20px;">
<a class="addthis_button_email"></a>
<span class="addthis_separator">|</span>
<a href="http://www.addthis.com/bookmark.php?v=250&amp;pub=xa-4af615822c108b19" class="addthis_button_compact" style="font-family:'Times New Roman', Times, serif; font-size:.8em; font-weight:bold;color:#a5401e">SHARE THIS ... </a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=xa-4af615822c108b19"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=davidairey" >
</script>
<script type="text/javascript">var addthis_config = {
     ui_cobrand: ""
}
</script></p>


        </div><!--End of div titlecat-->
            
      <div id="datecal"> 
      <img src="/wp-content/themes/Blenheim/Images/blogarrow.png" width="51" height="36" align="left" alt="Arrow" />
      <div class="date"><?php the_time ('d'); ?> <span style="font-size:.8em"><?php the_time ('M'); ?></span></div> 
          <div class="date"><?php the_time ('Y'); ?></div> 
      </div>  <!--End of div datecal-->
      
      </div><!--End of div datetitle-->
			
			<p><?php the_content('Read the rest of this entry &raquo;'); ?></p>
			<p id="comments" style="text-align:top"><img src="/wp-content/themes/Blenheim/Images/commentimg.png" width="10" height="10" alt="Image" style="margin-right:2px"/>  <?php comments_popup_link('No Comments ', 'Comment (1)', 'Comments (%)'); ?></p>
		</div>

	<?php endwhile; ?>

	<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>

<?php else : ?>

	<h2>Not Found</h2>
	<p>Sorry, but you are looking for something that isn't here.</p>
	<?php get_search_form(); ?>

<?php endif; ?>
</div>
<?php /*?><?php get_sidebar(); ?><?php */?>
<div class="clear"></div>
<!-- </div>--><!--End of div leftborderdiv-->
</div><!--End of div aboutuscontent-->
</div><!--End of div aboutuscontainer-->
<div id="blogbottomborder"></div>




<?php get_footer(); ?>