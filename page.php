<?php get_header() ?>

            <div id="content">
            	<div id="postimage">
            	</div>
            	<div id="posts">
            		<div class="container">
	            		 <div class="row">
	            		 	<div class="col-md-12">
		            			<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
			  	
							get_template_part( 'page-content', get_post_format() );
			  
						endwhile; endif; 
						?>
					</div>
				</div>
			</div>
            	</div>
            </div>
            
<?php get_footer() ?>