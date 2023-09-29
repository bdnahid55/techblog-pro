<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<?php wp_head();?>
	</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
		<style>
		 body{
		 background: #999999 url(<?php background_image(); ?>);
		 }
		 
	</style>
       <div class="fix body_bg">

   
            <div class="fix column">
				<div class="fix header">
				
					<div class="fix logo floatleft">
						<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('title'); ?></a>
					</div>
					
					
					<div class="fix header_right floatright">
					
						<!-- <div class="fix social_share">
							<a href="#"><img src="images/facrbook.png" alt="facebok" /></a>
							<a href="#"><img src="images/twitter.png" alt="twitter" /></a>
							<a href="#"><img src="images/youtube.png" alt="youtube" /></a>
							<a href="#"><img src="images/google_plus.png" alt="google-plus" /></a>
						</div>  -->
						
						<div class="fix post_search">
							
							<form method="GET" action="<?php echo esc_url( home_url() ); ?>">
								<input name="s" type="text" placeholder="search here">
								<input type="submit" value="search">
							</form>
						</div>
						
					</div>
					
				</div>
				
				<div class="mainmenu">

					<nav id="main-nav" class="stellarnav">
						<?php
						wp_nav_menu( array(
							'container' => '', 
							'container_class' => '', 
							'menu_class' => 'stellarnav', 
							'menu_id' => 'main-nav', 
							'sort_column' => 'menu_order', 
							'theme_location' => 'primarymenu', 
							'link_after' => '', 
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) );
						?>
					</nav>
					
				</div>
				
				<div style="clear:both"></div>
				