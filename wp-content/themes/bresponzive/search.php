<?php get_header(); ?>
<div id="blocks-wrapper" class="clearfix">
	<div id="blocks-left" class="eleven columns clearfix">	 		
 			
			<!--Search Results content-->
 <h2 class="blogpost-wrapper-title">
 							<?php printf(__('Busque resultados por "%s" ', 'bresponZive'), get_search_query()); ?>
  						</h2>
  		      
				<?php   get_template_part( 'includes/blog', 'loop' );?>
		 
 			
 	<!--/.blogposts-wrapper-->
   </div>
    
 <?php get_sidebar();?>
 <?php get_footer(); ?>