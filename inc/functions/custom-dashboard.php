<?php


add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

	function my_custom_dashboard_widgets() {

	global $wp_meta_boxes;

	wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');

	}

	function custom_dashboard_help() {

	echo '<p>Welcome to Techblog-pro Theme! Need help? Contact with developer :<br> Email: bdnahid55@gmail.com.<br>Developer <a href="http://codefusions.com/">NAZMUL HOSSAIN</a></p>';

	}
