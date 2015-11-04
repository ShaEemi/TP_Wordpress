<?php

/*

	Plugin Name: Mon Plugin
	Description: Mon 1er plugin
	Version: 0.1

*/


defined('ABSPATH') or die('No script kiddies please !');

add_filter('the_content','ma_fonction');
function ma_fonction($content){
	return str_replace('test', 'hello', $content);
}

add_action( 'plugins_loaded', 'myplugin_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function myplugin_load_textdomain() {
  load_plugin_textdomain( 'my-plugin', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
}
