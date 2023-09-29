<?php /* Template Name: Page with search */ ?>
 <?php get_header(); ?>
              <!--------------Content--------------->
  
				<div class="fix maincontent">
				
					<div class="fix full_content floatleft">
                        
                        
                        <!--single post start-->
                        
                        <div class="fix full_post">
                            
                            <!-- nazmul SEARCH BOX -->
			                <input type="text" id="the-filter" placeholder="Search For..."/>
			                <!-- End nazmul Search Box -->
			                
			                
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
					
				</div>
				
<style>
/* nazmul [SEARCH BOX] */
#the-filter {
  box-sizing: border-box;
  width: 100%;
  margin-bottom: 15px;
  padding: 10px;
}
li.hide {
  display: none;
}
</style>

<script>
// (A) WAIT FOR PAGE TO FULLY LOAD
window.addEventListener("load", function(){
  // (B) ATTACH KEY UP LISTENER TO SEARCH BOX
  document.getElementById("the-filter").addEventListener("keyup", function(){
    // (C) GET THE SEARCH TERM
    var search = this.value.toLowerCase();

    // (D) GET ALL LIST ITEMS
    //var all = document.querySelectorAll("#the-list li");
    var all = document.querySelectorAll("li");

    // (E) LOOP THROUGH LIST ITELS - ONLY SHOW ITEMS THAT MATCH SEARCH
    for (let i of all) {
      let item = i.innerHTML.toLowerCase();
      if (item.indexOf(search) == -1) { i.classList.add("hide"); }
      else { i.classList.remove("hide"); }
    }
  });
});
</script>	
				
				
<?php get_footer(); ?>