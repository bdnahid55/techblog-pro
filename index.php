<?php get_header(); ?>
              <!--------------Content--------------->
  
				<div class="fix maincontent">
				
					<div class="fix left_content floatleft">
                        
                        
                        <!-- post loop start-->
                        
						<?php get_template_part('customcontent'); ?>
                        
                        <!-- post loop end-->
                        
                        
                        <!-------------pagination----------------->
                        
                        <div class="fix archive-pagination pagination">
                            <?php get_template_part('my-pagination'); ?>
                        </div>
                        
                        <!--pagination end-->
                        
					</div>
					
					
					<!-------------Sidebar----------------->
					<?php get_sidebar(); ?>
					
				</div>
<?php get_footer(); ?>