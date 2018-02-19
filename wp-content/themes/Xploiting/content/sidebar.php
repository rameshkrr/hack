<div class="socialicons">
  
        
        <h4 class="socialbg">SOCIAL NETWORKS</h4>

        
        <div class="social-widget"> <a href="" target="_blank">
            <i class="fa fa-facebook" style="font-size: 14px"></i><span style="font-size: 14px">Facebook</span></a>

         <a href="#" target="_blank">
            <i class="fa fa-twitter" style="font-size: 14px"></i><span style="font-size: 14px">Twitter</span></a> 

         <a href="#" target="_blank">
            <i class="fa fa-google-plus" style="font-size: 14px"></i><span style="font-size: 14px">Google +</span></a> 

         <a href="#" target="_blank">
            <i class="fa fa-instagram" style="font-size: 14px"></i><span style="font-size: 14px">Instagram</span></a> 

         <a href="#" target="_blank">
            <i class="fa fa-linkedin" style="font-size: 14px"></i><span style="font-size: 14px">Linkedin</span></a> 

         <a href="#" target="_blank">
            <i class="fa fa-rss" style="font-size: 14px"></i><span style="font-size: 14px">RSS</span></a>
        </div>

    </div>
   <div class="searchbar">
 <?php get_search_form(); ?>

    </div>



	<div class="recentposthome">

        
        <div class="recent">
            <h4>RECENT POSTS</h4>
        </div>
        <ul class="recentposts">
            
            <?php
        query_posts(array('posts_per_page' => 5 )); //'category_name' => 'latest'
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
    
    
                    <?php get_template_part('/content/recent'); ?>
             
                    <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>

        </ul>
    </div>

 

    <div class="sidead">
        
        <img src="<?php echo get_template_directory_uri(); ?>/img/ads.png">

    </div>




