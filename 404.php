<?php get_header(); ?>
              <!--------------Content--------------->
  
				<div class="fix maincontent">
				
					<div class="fix left_content floatleft">
                        
                        <!-- 404 start-->
						<div class="fix my404">
							<div class="fix my404heading">
								<h1>404 Error - Page Not Found!</h1>
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/404.jpg" alt="404" />
								<h1>Ooops! Something went wrong</h1>
								<h3>We could not find the page you were loocking for.</h3>
								<h3>Why not try back to the <a href="<?php echo esc_url( home_url() ); ?>">Homepage</a></h3>
							</div>
						</div>
                        <!-- 404 end-->
                        
						<?php comments_template('', false); ?>
                        
					</div>
					
					
					<!-------------Sidebar----------------->
					<?php get_sidebar(); ?>
					
				</div>
<?php get_footer(); ?>