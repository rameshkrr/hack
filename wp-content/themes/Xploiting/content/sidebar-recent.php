

<div class="img-thumb-sidebar">
	 <?php echo the_post_thumbnail('sparkling-featured'); ?>
</div>
<div class="sidbar-recent-text">
	<h5><a href="<?php print get_permalink($post->ID) ?>"><?php print get_the_title(); ?></a></h5>
	<?php print get_the_date(); ?>
</div>