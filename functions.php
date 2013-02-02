<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );

// Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );

// Add Viewport meta tag for mobile browsers
add_action( 'genesis_meta', 'sample_viewport_meta_tag' );
function sample_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

// Add support for custom background
add_theme_support( 'custom-background' );

// Add support for custom header
add_theme_support( 'genesis-custom-header', array(
	'width' => 1152,
	'height' => 120
) );

// Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

// Filter Footer Crds
add_filter( 'genesis_footer_creds_text', 'kraft_footer_creds_text');
function kraft_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo 'Copyright &copy; ';
	echo date(Y);
	echo ' &middot; Development by <a href="http://coffeaweb.com">Coffea Web Services &middot; Built on <a href="http://wordpress.org">WordPress</a> &amp; <a href="http://brandonkraft.com/go/studiopress/">Genesis</a>.';
	echo '</p></div>';
}