<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?php bloginfo('name'); ?>
            <?php wp_title(' | '); ?>
    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
	<script src="<?php bloginfo( 'url' ); ?>/wp-includes/js/comment-reply.js"></script>
</head>

	  <body>
	
<div class="menu1">	
	<div class="col-sm-1">
		<ul class="pull-left">
			<li><a href="<?php echo get_home_url(); ?>"><img src="http://sketchshot.com/hackers/wp-content/themes/Xploiting/img/logok.png"></a></li>
		</ul>

	</div>
	<div class="col-sm-11">
		
	<?php
		wp_nav_menu( array(
			'theme_location' => 'primary', // Defined when registering the menu
			//'menu_id'        => 'primary',
			//'container'      => false,
			'depth'          => 2,
			'menu_class'     => 'menustyle',
			//'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
			//'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
		) );
		?>
	
</div>
<!-- <div class="col-sm-1">
	<ul class="search pull-right">
		<a href="#"><i class="fa fa-search"></i></a>
	</ul>

</div> -->
</div>
