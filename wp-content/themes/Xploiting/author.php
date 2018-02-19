<?php 

get_header();
 ?>



<div class="catbanner author">
<div class="bread">
        
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home</a></li><?php $username = get_userdata( $post->post_author ); ?>  
  <li class="breadcrumb-item active"><?php echo $username->user_nicename; ?></li>
</ol>
</div>
</div>

<div class="authordetails">
    <div class="container">
        
        <div class="col-sm-8">
            <div class="authorborder">
        <div class="authorheader">
            
            <figure><?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
            </figure>


        </div>
         <span class="autho_name"><?php  the_author(); ?></span>

         <p class="author-description"><?php the_author_meta('description'); ?></p>
         <div class="author-bio">
            <div class="author-info">
               
                
               
                <ul class="icons">
                    <?php 
                        $facebook_profile  = get_the_author_meta( 'facebook_profile' );
                        if ($facebook_profile && $facebook_profile != ''  ) {
                            echo '<li class="rss"><a href="' . esc_url($facebook_profile) . '"><i class="fa fa-facebook" ></i></a></li>';
                        }
                        
                        $google_profile = get_the_author_meta( 'google_profile' );
                        if ( $google_profile && $google_profile != '' ) {
                            echo '<li class="google"><a href="' . esc_url($google_profile) . '" rel="author"><i class="fa fa-google-plus"></i></a></li>';
                        }
                        
                        $twitter_profile = get_the_author_meta( 'twitter_profile' );
                        if ( $twitter_profile && $twitter_profile != '' ) {
                            echo '<li class="twitter"><a href="' . esc_url($twitter_profile) . '"><i class="fa fa-twitter"></i></a></li>';
                        }
                        
                        $rss_url = get_the_author_meta( 'rss_url' );
                        if ( $rss_url && $rss_url != '' ) {
                            echo '<li class="facebook"><a href="' . esc_url($rss_url) . '"><i class="fa fa-instagram" style="font-size: 14px"></i></a></li>';
                        }
                        
                        $linkedin_profile = get_the_author_meta( 'linkedin_profile' );
                        if ( $linkedin_profile && $linkedin_profile != '' ) {
                            echo '<li class="linkedin"><a href="' . esc_url($linkedin_profile) . '"><i class="fa fa-linkedin" style="font-size: 14px"></i> </a></li>';
                        }
                    ?>
                </ul>
            </div>
<!--END .author-bio-->
</div>
</div>

 <?php
        //'category_name' => 'latest'
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
        <div class="categorypage authorcatpost">
                    <?php get_template_part('/content/cat'); ?>
        </div>      
                    <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>
</div>


    <div class="col-sm-4">
        
         <?php get_template_part('/content/sidebar'); ?>

    </div>
</div>
</div>





















 <?php 

 get_footer();
 ?>