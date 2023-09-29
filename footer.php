<!--------------Footer--------------->

				
				<div class="fix footer">
				
				    <div class="fix footer_menu">
						<?php wp_nav_menu(
							array(
							'theme_location' => 'bottommenu'
							) 
												
						); ?>  
				    </div>
				    
					<p class="copyright_text">
					Copyright &copy; <?php the_time('Y'); ?> - <a href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php bloginfo('name'); ?> </a>all right reserved. Theme designed by Nazmul.
					
					</p>
					
				</div>
				
        </div>
           <!-- All js -->
		   
		<script>
		jQuery('#main-nav').stellarNav({

		  // adds default color to nav. (light, dark)
		  theme     : 'plain', 
		  // number in pixels to determine when the nav should turn mobile friendly
		  breakpoint: 768, 
		  phoneBtn: false, 
		  locationBtn: false, 
		  sticky     : true, 
		  // 'static' or 'top' - when set to 'top', this forces the mobile nav to be placed absolutely on the very top of page
		  position: 'static', 
		  showArrows: true, 
		  closeBtn     : true, 
		  scrollbarFix: true, 
		  
		});
	</script>

<?php wp_footer();?>    
</body>
</html>
