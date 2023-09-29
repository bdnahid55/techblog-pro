<?php

	function no_wordpress_errors(){
	  return 'Something is wrong!';
	}
	add_filter( 'login_errors', 'no_wordpress_errors' );

	
	// remove wordpress version number
	function te_remove_version() {
	return '';
	}
	add_filter('the_generator', 'te_remove_version');

