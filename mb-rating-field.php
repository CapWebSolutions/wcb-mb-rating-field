<?php
/**
 * Plugin Name: Wolf Creek Backcountry Star rating field for Meta Box
 * Plugin URI: https://github.com/capwebsolutions.com/wcb-mb-rating-field
 * Description: Add a new star rating field type for Meta Box
 * Version: 1.0	
 * Author: Cap Web Solutions | MetaBox.io
 * Author URI: capwebsolutions.com
 * License: GPLv2
 * GitHub Plugin URI: https://github.com/CapWebSolutions/wcb-mb-rating-field
 */

add_action( 'init', 'prefix_load_rating_type' );
function prefix_load_rating_type() {
	require __DIR__ . '/rating.php';
}