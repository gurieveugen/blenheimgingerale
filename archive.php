<?php
/*
Template Name: Archives
*/
?>
<?php include (TEMPLATEPATH . '/header2.php');  ?>
<div id="blogcontent">
<?php get_sidebar(); ?>
<div id="bodycontent">
	<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
	<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2>Archive for <?php the_time('F, Y'); ?></h2>
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2>Archive for <?php the_time('Y'); ?></h2>
	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h2>Author Archive</h2>
	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2>Blog Archives</h2>
	<?php } ?>


		<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>

		<?php while (have_posts()) : the_post(); ?>
	<?php 
global $wp_query;
if ( $wp_query->current_post === 0 ) {
   $postclass = 'altdatetitle';
}else{
   $postclass = 'datetitle';
} ?>
		
		<div <?php post_class() ?>>
                <div id="<?php echo $postclass; ?>">
                <div id="titlecat">
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
			<?php the_content() ?>
			<p id="comments" style="text-align:top"><img src="/wp-content/themes/Blenheim/Images/commentimg.png" width="10" height="10" alt="Image" style="margin-right:2px"/>  <?php comments_popup_link('No Comments ', 'Comment (1)', 'Comments (%)'); ?></p>
		</div>

		<?php endwhile; ?>

		<?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?>

	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>
</div>
<?php /*?><?php get_sidebar(); ?><?php */?>
<div class="clear"></div>
<!-- </div>--><!--End of div leftborderdiv-->
</div><!--End of div aboutuscontent-->
</div><!--End of div aboutuscontainer-->
<div id="blogbottomborder"></div>


<?php get_footer(); ?>