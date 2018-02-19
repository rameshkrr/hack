<a href="<?php print get_permalink($post->ID) ?>">
	<div class="col-sm-6">
<figure>

		<?php echo the_post_thumbnail('sparkling-featured'); ?>
</figure>


</div>

<div class="col-sm-6">
	
	<h5 class="catviewtitle"><a href="<?php print get_permalink($post->ID) ?>"><?php print get_the_title(); ?></a></h5>
	<span class="by">by</span> <span class="authorname"><?php  the_author(); ?></span>
		<span class="entry-date"><?php echo get_the_date(); ?></span>
		<div class="contentcatview">
			
			<?php 

				the_excerpt();

			?>

		</div>
</div>

<div class="clearfix"></div>
</a>