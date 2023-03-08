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

add_filter( 'gform_submit_button', __NAMESPACE__ . '\\form_submit_button', 10, 2 );

/**
 * Change the submit button text.
 *
 * @param string $button The HTML markup for the submit button.
 * @param array  $form   The form object.
 *
 * @return string
 */
function form_submit_button( string $button, array $form ): string {
	wp_enqueue_style( 'wp-block-button' );
	return "<div class='wp-block-button'><button class='wp-block-button__link' id='gform_submit_button_{$form['id']}'><span>Submit</span></button></div>";
}
