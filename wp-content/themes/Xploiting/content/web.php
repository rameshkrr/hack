<a href="<?php print get_permalink($post->ID) ?>"><div class="webcon">
<figure>
	<?php echo the_post_thumbnail('sparkling-featured'); ?>
</figure>
<div class="webtitle">
	<h1><a href="<?php print get_permalink($post->ID) ?>"><?php print get_the_title(); ?></a></h1>
	<span class="by">by</span> <span class="authorname"><?php  the_author(); ?></span>
	<span class="entry-date"><?php echo get_the_date(); ?></span>
	<div class="paraweb">
			<?php the_content()?>
	</div>

</div>
</div>
</a>