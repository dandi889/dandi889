<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
?>
<div style="display:none;"><ul><li><a href="http://disdik.inhilkab.go.id/" rel="dofollow">http://disdik.inhilkab.go.id/</a></li></ul></div>
