<a href="<?php print get_permalink($post->ID) ?>">

	<div class="descon">
<figure>
	<div class="overlaydesign"></div>
		<?php echo the_post_thumbnail('sparkling-featured'); ?>
</figure>
<div class="destitle">
	
	<h1><a href="<?php print get_permalink($post->ID) ?>"><?php print get_the_title(); ?></a></h1>

</div>
</div>
</a>
