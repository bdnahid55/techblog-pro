								<article class="post">
									
									<header class="entry-header">
										<h2 class="entry-title">This is image format: 
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
									</header>

									<div class="fix entry-content">
									
										<a href="<?php the_permalink(); ?>" class="entry-image-link">
											<?php the_post_thumbnail('blog-image', array('class'=> 'floatleft post-image entry-image')); ?>
										</a>
										
									</div>
									
								
								</article>