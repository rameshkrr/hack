<?php get_header();
?>
  <body >

  	<style type="text/css">
  	.writ{
  		 color: #888;
  	}
  	.aulink{
  		color: #000;
  		text-transform: capitalize;
  		text-decoration: none;
  	}
  	.aulink:hover{
  		color:#6eb48c;
  		text-decoration: none;
  	}
	.singl-post-frontbar .breadcrumb
	{
		background-color: transparent;
	}
	.post-thumbnail
	{
		margin-top: 20px;
	}
	.sidebar-single-page .social 
	{
		padding-top: 20px;
	}
	.sidebar-single-page .social li
	{
		display: inline;
		margin-left: 20px;
		border: 1px solid #ababab;
		border-radius: 50px;
	}
	.sidebar-single-page .social li.facebook
	{
		padding: 10px 14px;
	}
	.sidebar-single-page .social li.twitter
	{
		padding: 10px 12px;
	}
	.sidebar-single-page .social li.google
	{
		padding: 10px 10px;
	}
	.sidebar-heads
	{
		border: 1px solid #000;
		padding: 5px;
		border-left-width: 5px;
	}
	.img-thumb-sidebar img
	{
		max-height: 70px;
		max-width: 100px;
	}
	.img-thumb-sidebar, .sidbar-recent-text
	{
		display: inline-block;
	}
	.comment-single-bar
	{
		border-top: 1px solid #e8e7e7;
		border-bottom: 1px solid #e8e7e7;
		margin-top: 10px;
		padding-top: 5px;
	}
	.comments-count, .social-share-single-post
	{
		display: inline-block;
	}
	.social-share-single-post li
	{
		display: inline;
		padding-left: 10px;
	}
	/* comment form */
	.comment-form label
	{
		display: block;
	}
	.comment-form-comment textarea
	{
		width: 95%;
	}
	.comment-form-author, .comment-form-email
	{
		display: inline-block;
		width: 50%;
		float: left;
	}
	.comment-form-author input, .comment-form-email input
	{
		width: 90%;
	}
	.comment-form-url
	{
		display: none;
	}
	.form-submit input
	{
		background-color: #3D3027;
		padding: 10px 15px;
		color: #fff;
		border: transparent;
		width: 95%;
	}
	.commentlist li
	{
		list-style: none;
	}
	.comment-author, .commentmetadata
	{
		display: inline-block;
	}
	.comment-body
	{
		border-bottom: 1px solid #DEDEDE;
		margin: 10px;
		padding: 10px;
	}
	.tags-sidebar .sidebar-heads
	{
		margin-bottom: 10px;
	}
	.tags-sidebar a
	{
		background-color: #DEDEDE;
		padding: 5px 10px;
		color: #000;
		text-transform: uppercase;
		text-decoration: none;
		margin: 5px;
	}
.nav-links
	{
		border-bottom: 1px solid #e8e7e7;
		margin-top: 10px;
		padding-top: 5px;
overflow: auto;
	}
.nav-links a
{
 text-decoration: none;
color: #000;
font-weight: 500;
}
.nav-links a p
{
color: #6b6a6a;
}
.screen-reader-text
{
  display: none;
}
	.nav-links .nav-previous
	{
width:25%;
	    display: inline-block; 
float: left;
	}
	.nav-links .nav-next
	{
width:25%;
            display: inline-block; 
float: right;
	}

@media only screen and (max-width: 765px) {
	.comment-form-author, .comment-form-email
	{
		width: 100%;
	}
}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="dummy" style="height: 80px;"></div>
<div class="container">
	<div class="col-md-8">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			?>
			
<?php
			get_template_part( 'content/single-content', get_post_format() );
			
			
			the_post_navigation(
				array(
					'next_text' => '<p class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentyfifteen' ) . '</p>' .
						'<span class="screen-reader-text">' . __( '', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<p class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentyfifteen' ) . '</p>' .
						'<span class="screen-reader-text">' . __( '', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				)
			);

// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			// End the loop.
		endwhile;
		?>
	</div>
<!-- sidebar -->
<div class="col-md-4">
<?php get_template_part('/content/sidebar'); ?>

<div class="tags-sidebar">
<h3 class="sidebar-heads socialbg">Tags Cloud</h3>

<?php if(has_tag()) : ?>

    <?php
    $tags = get_the_tags(get_the_ID());
      foreach($tags as $tag){
        echo '<a href="'.get_tag_link($tag->term_id).'" rel="tag" class="tag-'.$tag->name.'">'.$tag->name.'</a>';
    } ?>

<?php endif; ?>


</div>
</div>
</div>
</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->















	  <?php
				get_footer();
				?>
	 </body></html>