<?php
/*
Template Name: Single Page
*/
?>
<?php include (TEMPLATEPATH . '/header2.php');  ?>
<div id="blogcontent">
<?php get_sidebar(); ?>
<div id="bodycontent">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php previous_post_link('&laquo; %link') ?> | <?php next_post_link('%link &raquo;') ?>

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
			<p><?php /*?><?php the_time('F jS, Y') ?><?php */?> <!-- by <?php the_author() ?> --></p>
			<?php the_content('Read the rest of this entry &raquo;'); ?>
			

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

			<p style="margin-top:10px;padding:5px; border-top:1px solid #998133; border-left:1px solid #998133;">
				
				This entry was posted
				<?php /* This is commented, because it requires a little adjusting sometimes.
				You'll need to download this plugin, and follow the instructions:
				http://binarybonsai.com/wordpress/time-since/ */
				/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
				on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
				and is filed under <?php the_category(', ') ?>.
				You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

				<?php if ( comments_open() && pings_open() ) {
				// Both Comments and Pings are open ?>
				You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

				<?php } elseif ( !comments_open() && pings_open() ) {
				// Only Pings are Open ?>
				Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

				<?php } elseif ( comments_open() && !pings_open() ) {
				// Comments are open, Pings are not ?>
				You can skip to the end and leave a response. Pinging is currently not allowed.

				<?php } elseif ( !comments_open() && !pings_open() ) {
				// Neither Comments, nor Pings are open ?>
				Both comments and pings are currently closed.

				<?php } edit_post_link('Edit this entry','','.'); ?>

			</p>
				
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>
</div>
<?php /*?><?php get_sidebar(); ?><?php */?>
<div class="clear"></div>
<!-- </div>--><!--End of div leftborderdiv-->
</div><!--End of div aboutuscontent-->
</div><!--End of div aboutuscontainer-->
<div id="blogbottomborder"></div>




<?php get_footer(); ?>
