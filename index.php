<?php get_header(); ?>
  
	<div class="content">
	    <div class="main-content">
		  
		  <?php get_template_part('category_list'); ?>
		     	  
			<?php get_template_part('post_loop'); ?>
			
		  	
		</div> <!-- main content -->
	 
	        <?php get_template_part('left_sidebar_home'); ?>
			
    </div> <!-- content  -->
  
<?php get_footer(); ?> 