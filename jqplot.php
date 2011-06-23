<?php
/*
Plugin Name: jPlot Charts and Graphs for jQuery
Plugin URI: http://www.ramoonus.nl/wordpress/jqplot/
Description: A pure JavaScript charting plugin for the jQuery javascript framework. 
Version: 0.8.2.792
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_jqplot() {
		// JS
		wp_deregister_script('jqplot'); // deregister
		wp_register_script('jqplot', plugins_url('/js/jquery.jqplot.min.js', __FILE__), array("jquery"), '0.8.2.792');
		wp_enqueue_script('jqplot'); 		// load
		// CSS
		wp_deregister_style('jqplot'); // deregister
		wp_register_style('jqplot', plugins_url('/css/jquery.jqplot.min.css', __FILE__), false, '0.8.2.792');
		wp_enqueue_style('jqplot'); // load
}
// load
add_action('init', 'rw_jqplot');
?>