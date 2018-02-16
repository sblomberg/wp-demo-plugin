<?php
/*
Plugin Name: Demonstration WordPress Plugin
Plugin URI:
Description:
Version: 1.0.0
Author: sblomberg
Author URI:
License: MIT
License URI: https://opensource.org/licenses/MIT
GitHub Plugin URI: sblomberg/wp-demo-plugin
*/

add_filter( 'admin_footer_text', 'wp_demo_plugin_custom_footer_text' );

function wp_demo_plugin_custom_footer_text( $text ) {
	return 'WP demo plugin v1.0.0 installed.';
}
