<?php get_header(); ?>
              <!--------------Content--------------->
  
				<div class="fix maincontent">
				
					<div class="fix left_content floatleft">
                        
                        
                        <!--single post start-->
                        
                        <div class="fix full_post">
						<?php
							if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('
							<p id="breadcrumbs">','</p>
							');
							}
							?>
						
							<?php while( have_posts() ) :the_post(); ?>
								<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
									
									<header class="entry-header">
										<h2 class="entry-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
									</header>
									
									<div class="fix singlepostinfo">
										Posted on <time><?php the_time('M d,Y'); ?></time> by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> with <a href="<?php comments_link(); ?> "><?php if ( comments_open() ) : comments_popup_link( 'No comments yet', '1 comment', '% comments', 'Comments are off for this post'); endif; ?></a> <?php edit_post_link(__('Edit','techblog-pro'), '[', ']'); ?>
									</div>
									

									<div class="fix entry-content">
									
										
										<p class="post_details">
											<?php the_content(); ?>
										</p>
										
									</div>
									<footer class="entry-footer">
										
									</footer>
								
								</article>
							<?php endwhile; ?>
								
                        </div>   
                        
                        <!--single post end-->
                        <?php if ( comments_open() || get_comments_number() ) :    comments_template(); endif ?>
                        
                       
					</div>
					
					
					<!-------------Sidebar----------------->
					<?php get_sidebar(); ?>
					
				</div>
<?php get_footer(); ?>