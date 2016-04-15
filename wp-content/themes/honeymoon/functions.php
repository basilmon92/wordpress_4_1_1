<?php

/**
 * Theme functions. Initializes the Vamtam Framework.
 *
 * @package  wpv
 */

$GLOBALS['wpv_theme_tested_up_to'] = '3.9.x';

require_once('vamtam/classes/framework.php');

new WpvFramework(array(
	'name' => 'honeymoon',
	'slug' => 'honeymoon'
));

// TODO remove next line when the editor is fully functional, to be packaged as a standalone module with no dependencies to the theme
define ('VAMTAM_EDITOR_IN_THEME', true); include_once THEME_DIR.'vamtam-editor/editor.php';

// only for one page home demos
function wpv_onepage_menu_hrefs( $atts, $item, $args ) {
	if ( $item->type === 'custom' && strpos( $atts['href'], '/#' ) === 0 ) {
		$atts['href'] = $GLOBALS['wpv_inner_path'] . $atts['href'];
	}
	return $atts;
}

if ( ( $path = parse_url( get_home_url(), PHP_URL_PATH ) ) !== null ) {
	$GLOBALS['wpv_inner_path'] = untrailingslashit( $path );
	add_filter( 'nav_menu_link_attributes', 'wpv_onepage_menu_hrefs', 10, 3 );
}

