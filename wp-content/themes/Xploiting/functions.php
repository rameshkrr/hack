<?php
	


/*	============================ FrontEnd ============================  */
						
/* ============================ Include Scripts ============================ */

function hack_addScript(){
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0', 'all' );
	wp_enqueue_style('font-awesome' , get_template_directory_uri(). '/css/fontawesome.min.css', array(), '5.0' , 'all');
	wp_enqueue_style('style',  get_template_directory_uri() . '/css/style-update.css' , array(), '2.5', 'all' );	
	wp_enqueue_style('other',  get_template_directory_uri() . '/css/other.css' , array(), '2.5', 'all' );						
	
	wp_enqueue_style('home',  get_template_directory_uri() . '/css/home.css' , array(), '3', 'all' );					
	wp_enqueue_style('font1',  'https://fonts.googleapis.com/css?family=Fira+Sans', array(), '3.6' , 'all' );

	wp_enqueue_style('font2',  'https://fonts.googleapis.com/css?family=Montserrat', array(), '3.6' , 'all' );

	wp_enqueue_style('font3',  'https://fonts.googleapis.com/css?family=Josefin+Sans', array(), '3.6' , 'all' );
	wp_enqueue_style('font4',  'https://fonts.googleapis.com/css?family=Merriweather', array(), '3.6' , 'all' );
	wp_register_script('jquery', get_template_directory_uri() .'/js/jquery.min.js',true);
	wp_register_script('bootstrapjs', get_template_directory_uri() .'/js/bootstrap.min.js',true);
	wp_register_script('type', get_template_directory_uri() .'/js/typed.js',true);
	wp_register_script('engine', get_template_directory_uri() .'/js/engine.js',true);

	wp_register_script('wow', get_template_directory_uri() .'/js/wow.js',true);
	
	
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs' );

	wp_enqueue_script( 'type' );

	wp_enqueue_script( 'engine' );

	wp_enqueue_script( 'wow' );
	}
add_action('wp_enqueue_scripts','hack_addScript');

/* =======================================Add Menu in Dashboard ================ */

function hack_theme_setup(){
	
	add_theme_support('menus');
	register_nav_menu('primary','primary navigation');
	register_nav_menu('secondary','footer navigation');	
}



add_action('init','hack_theme_setup' );
add_theme_support( 'post-thumbnails' ); 

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

function add_to_author_profile( $contactmethods ) {
	
	$contactmethods['rss_url'] = 'Instagram';
	$contactmethods['google_profile'] = 'Google Profile URL';
	$contactmethods['twitter_profile'] = 'Twitter Profile URL';
	$contactmethods['facebook_profile'] = 'Facebook Profile URL';
	$contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
	$contactmethods['pintrest_profile'] = 'Pintrest Profile URL';
	
	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);

	@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
