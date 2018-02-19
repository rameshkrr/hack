
<?php get_header();

?>
<div class="catbanner">

		<div class="bread">
		
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active"><?php printf(__(' %s'),single_cat_title('',false)); ?></li>
</ol>
</div>
</div>

<div class="categorycontent">
	
	<div class="container">
		<center>
		<img class="ad" src="<?php echo get_template_directory_uri(); ?>/img/ad.png">
		</center>
		<div class="catposts">
		<div class="col-sm-8">
		 <?php
       
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
    
        <div class="categorypage">
                    <?php get_template_part('/content/cat'); ?>
        </div>      
                    <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>

</div>
</div>

<div class="col-sm-4">
	
	 <?php get_template_part('/content/sidebar'); ?>


</div>
</div>

	</div>

<?php get_footer();
?>