<div class="singl-post-frontbar">
	<center>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="cat-crumb">
			<?php 
				$category = get_the_category(); 
				echo $category[0]->cat_name;
			 ?>
		</li>
	</ul>
	<h3><?php the_title(); ?></h3>
	<span class="writ">Written By</span><a class="aulink" href=" <?php echo get_author_posts_url( $post->post_author ); ?>"> <?php the_author(); ?></a>
	</center>
</div>

<!-- post thumbnail -->
<?php the_post_thumbnail('sparkling-featured', array('class' => 'post-thumbnail img-responsive')); ?>



<!-- Body Content -->
<?php the_content(); ?>

<div class="comment-single-bar">
<center>
<p class="comments-count"><i class="fa fa-comment"></i>
<?php
if ( comments_open()) :
	echo get_comments_number();
else :
	echo '0';
endif;
?> Comments
</p>
<ul class="social-share-single-post">
	<li><i class="fa fa-facebook"></i></li>
	<li><i class="fa fa-twitter"></i></li>
	<li><i class="fa fa-instagram"></i></li>
</ul>
</center>
</div>