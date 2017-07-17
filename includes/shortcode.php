<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.4
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Coub shortcode
 * Register shortcode handler.
 *
 * usage: [coub id=""]
 *
 * @since 1.4
 */
function coub_shortcode( $atts ) {

	// Set default attributes
	$atts = shortcode_atts(
		array(
			'id'            => '',
			'width'         => 600,
			'height'        => 400,
			'muted'         => 'false',
			'autostart'     => 'false',
			'nocontrols'    => 'false',
			'hidetopbar'    => 'false',
			'nohdcontrol'   => 'false',
			'nositebuttons' => 'false',
			'originalsize'  => 'false',
			'startwithhd'   => 'false'
		), $atts
	);

	// Embed code
	$embed_code = '<iframe src="//coub.com/embed/' . $atts['id'] . '?muted=' . $atts['muted'] . '&autostart=' . $atts['autostart'] . '&noControls=' . $atts['nocontrols'] . '&hideTopBar=' . $atts['hidetopbar'] . '&noHDControl=' . $atts['nohdcontrol'] . '&noSiteButtons=' . $atts['nositebuttons'] . '&originalSize=' . $atts['originalsize'] . '&startWithHD=' . $atts['startwithhd'] . '" allowfullscreen="true" frameborder="0" width="' . esc_attr( $atts['width'] ) . '" height="' . esc_attr( $atts['height'] ) . '"></iframe>';

	// Return embed code
	return $embed_code;

}
add_shortcode( 'coub', 'coub_shortcode' );
