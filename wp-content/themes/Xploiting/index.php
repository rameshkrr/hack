<?php get_header();
?>

	  
	  <div class="xplo">
	  	<div class="glitch2" id="loading"></div>
	  <div class="bg-1" style="width: 100%;overflow: hidden;">
		  <div class="wow fadeIn" style="position: relative; z-index: 2; visibility: visible; animation-name: fadeIn;">
			
				
			  <div id="mainpage" >
					
					
					<div class="about about2" data-title="TRUST ONLY YOURSELF"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">TRUST ONLY YOURSELF</font></font></div>
				  <div class="about about3" data-title="BE OUTSIDE THE ACCESS ZONE"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">BE OUTSIDE THE ACCESS ZONE</font></font></div>
				
				  <div class="about about7" data-title="AVOID THE CAMERAS"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">AVOID THE CAMERAS</font></font></div>
				  <div class="container-fluid">
					  <div class="row">
						  <div class="col-md-12">
						  	<div class="the">
							  <div class="text1" data-title="The"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></div>
							  </div>
							  <div class="text2" data-title="Xploiting"><font style="vertical-align: inherit;">The-X<font style="vertical-align: inherit;"></font></font></div>
							  <div class="text3" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></div>
						  </div>
					  </div>
				  </div>
				  
				  <div class="form-next">
					  <a href="#" class="button">
						 
						  <font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hello_World();</font></font></font>
					

						</a>
				  </div>
				  
			  </div>
			  	
								 </div>
								 </div>
								</div>
<div class="category">
	<div class="container ">
		<div class="" >
		<h1 class="text-center"> <span class="typed"></span></h1>
		</div>
		<div class="topp">
		<div class="col-sm-4 col-xs-6 ">
			
			<a href="<?php echo esc_url( get_category_link( 3 ));?>">
			<div class="catcontent">
				<div class="overlaycat"></div>
				<img src="<?php echo get_template_directory_uri(); ?>/img/malware.png"><br>
				<h3><a href="<?php  echo esc_url( get_category_link( 3 ));?>"><?php echo get_cat_name(3);?></a></h3>
			</div>
</a>
		</div>

		<div class="col-sm-4 col-xs-6">
				<a href="<?php echo esc_url( get_category_link( 5 ));?>">
			<div class="catcontent">
				<img src="<?php echo get_template_directory_uri(); ?>/img/web.png"><br>
				<h3><a href="<?php echo esc_url( get_category_link( 5 ));?>"><?php echo get_cat_name(5);?></a></h3>
			</div>
		</a>
		</div>

		<div class="col-sm-4 col-xs-6">
				<a href="<?php echo esc_url( get_category_link( 4 ));?>">
			<div class="catcontent">
				<img src="<?php echo get_template_directory_uri(); ?>/img/website-design-symbol.png"><br>
				<h3><a href="<?php echo esc_url( get_category_link( 4 ));?>"><?php echo get_cat_name(4);?></a></h3>
			</div>
		</a>
		</div>

		<div class="col-sm-4 col-xs-6">
				<a href="<?php echo esc_url( get_category_link( 6 ));?>">
			<div class="catcontent">
			<img src="<?php echo get_template_directory_uri(); ?>/img/console.png"><br>
				<h3><a href="<?php echo esc_url( get_category_link( 6 ));?>"><?php echo get_cat_name(6);?></a></h3>
			</div>
		</a>

		</div>


		<div class="col-sm-4 col-xs-6">
			
				<a href="<?php echo esc_url( get_category_link( 7 ));?>">
			<div class="catcontent">
				<img src="<?php echo get_template_directory_uri(); ?>/img/andro.png"><br>
				<h3><a href="<?php echo esc_url( get_category_link( 7 ));?>"><?php echo get_cat_name(7);?></a></h3>
			</div>
		</a>
		</div>
		<div class="col-sm-4 col-xs-6">
			
				<a href="<?php echo esc_url( get_category_link( 8 ));?>">
			<div class="catcontent">
				<img src="<?php echo get_template_directory_uri(); ?>/img/robot.png"><br>
				<h3><a href="<?php echo esc_url( get_category_link( 8 ));?>"><?php echo get_cat_name(8);?></a></h3>
			</div>
		</a>
		</div>
	</div>
</div>
</div>
<section id="design">
    
    <div class="container">
        <div class="col-sm-12">
        <h2 class="dess">
Feautured Post
</h2>
<div class="col-sm-4 ">
         <?php
        query_posts(array('posts_per_page' => 2 )); //'category_name' => 'latest'
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
    
        <div class="design">
                    <?php get_template_part('/content/des'); ?>
        </div>      
                    <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>
    </div>
    <div class="col-sm-4 ">
         <?php
        query_posts(array('posts_per_page' => 2 ,'cat' => 4)); //'category_name' => 'latest'
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
    
        <div class="design paddingleft">
                    <?php get_template_part('/content/des'); ?>
        </div>      
                    <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>
    </div>
      <div class="col-sm-4 ">
         <?php
        query_posts(array('posts_per_page' => 1 ,'cat' => 3)); //'category_name' => 'latest'
        if(have_posts()) : while(have_posts()) : the_post();
        ?>
    
        <div class="design paddingleft2">
                    <?php get_template_part('/content/des'); ?>
        </div>      
                    <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>
        <img class="adhome" src="<?php echo get_template_directory_uri(); ?>/img/ads.png">
    </div>

    </div>


</div>
</section>



				<?php
				get_footer();
				?>
	 </body></html>