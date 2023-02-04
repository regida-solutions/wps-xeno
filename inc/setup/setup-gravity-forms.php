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
