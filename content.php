							
								<article class="post">
									
									<header class="entry-header">
										<h2 class="entry-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
									</header>
									
									<div class="fix singlepostinfo">
										Posted on <time><?php the_time('M d,Y'); ?></time> by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> with <a href="<?php comments_link(); ?> "><?php if ( comments_open() ) : comments_popup_link( 'No comments yet', '1 comment', '% comments', 'Comments are off for this post'); endif; ?></a> <?php edit_post_link(__('Edit','techblog-pro'), '[', ']'); ?>
									</div>
									

									<div class="fix entry-content">
										<a href="<?php the_permalink(); ?>" class="entry-image-link">
											<?php the_post_thumbnail('post-thumbnails', array('class'=> 'floatleft post-image entry-image')); ?>
										</a>

										<p class="post_details">
										<?php echo esc_html(wp_trim_words(get_the_content(), 40, '...' )); ?>&nbsp; ...
										<footer class="entry-footer">
										<a href="<?php the_permalink(); ?>">Read More<i class="fa fa-angle-double-right"></i></a>
										</footer>
										</p>
									</div>
									
								
								</article>