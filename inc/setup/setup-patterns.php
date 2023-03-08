<?php
/**
 * Setup patterns.
 *
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Setup\Patterns;

add_action( 'init', __NAMESPACE__ . '\\register_pattern_category' );
/**
 * Register block pattern categories.
 *
 * @return void
 */
function register_pattern_category(): void {
	register_block_pattern_category( 'hero', [
		'label' => __( 'Hero sections', 'xeno' ),
	] );
	register_block_pattern_category( 'xeno-call-to-action', [
		'label' => __( 'Call to actions', 'xeno' ),
	] );
	register_block_pattern_category( 'xeno-blog', [
		'label' => __( 'Blog', 'xeno' ),
	] );
	register_block_pattern_category( 'misc', [
		'label' => __( 'Miscellaneous', 'xeno' ),
	] );
	register_block_pattern_category( 'xeno-content', [
		'label' => __( 'Content', 'xeno' ),
	] );
}


add_action( 'init', __NAMESPACE__ . '\\remove_default_patterns', 99 );

/**
 * Remove default patterns
 */
function remove_default_patterns(): void {
	remove_theme_support( 'core-block-patterns' );
}
