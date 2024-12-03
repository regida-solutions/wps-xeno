<?php
/**
 * Gravity Forms.
 *
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Setup\GravityForms;

/**
 * Remove legend from Gravity Forms.
 *
 * @link https://docs.gravityforms.com/gform_required_legend/
 */
add_filter( 'gform_required_legend', '__return_empty_string' );

add_filter( 'gform_submit_button', __NAMESPACE__ . '\\add_custom_css_classes', 10, 2 );

function add_custom_css_classes( $button, $form ) { // phpcs:ignore
	$fragment = \WP_HTML_Processor::create_fragment( $button );
	$fragment->next_token();
	$fragment->add_class( 'wp-block-button__link' );

	return $fragment->get_updated_html();
}
