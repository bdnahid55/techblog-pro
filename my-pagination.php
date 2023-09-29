				<div class="fix archive-pagination pagination">
					<?php  wp_link_pages( $defaults );
						the_posts_pagination(array(
							'prev_text' => 'PREV',
							'next_text' => 'NEXT',
							'screen_reader_text' => ' '
							
						));
						 

					?>					
				</div>