<?php get_header(); ?>


            <?php if ( have_posts() ) : ?>
                    <h1 class="page-title">
						<?php echo "Search Results for : ", get_search_query() ; ?>
					</h1>
                    <?php
                    /* Run the loop for the search to output the results.
                    * If you want to overload this in a child theme then include a file
                    * called loop-search.php and that will be used instead.
                    */
                    get_template_part( 'content', 'search' );
                    ?>
                        <!-------------pagination----------------->
                        
                        <div class="fix archive-pagination pagination">
                            <?php get_template_part('my-pagination'); ?>
                        </div>
            <?php else : ?>
			
			
			<article class="post">
									
				<header class="entry-header">
					<h2 class="entry-title">
						<?php __( 'Nothing Found', 'techblog-pro' ); ?>
					</h2>
				</header>
										
				<div class="fix entry-content">
					<p><?php __( 'Sorry, but nothing matched your search words. Please try again with some different keywords.', 'techblog-pro' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
									
								
			</article>
				
							
							
            <?php endif; ?>



<?php get_footer(); ?>