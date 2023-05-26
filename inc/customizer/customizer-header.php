<?php
/**
 * Header customizer options.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Customizer\Header;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Silence is golden.' );
}

add_action( 'customize_register', __NAMESPACE__ . '\\register' );
/**
 * Register customizer options
 *
 * @param object $wp_customize WP Customizer object.
 * @return void
 */
function register( object $wp_customize ): void {

	// Add customizer section.
	$wp_customize->add_section(
		'xeno_header_setup_settings',
		[
			'title'      => __( 'Header', 'xeno' ),
			'capability' => 'edit_theme_options',
		]
	);

	// SETTING.
	$wp_customize->add_setting(
		'sticky_position',
		[
			'capability' => 'edit_theme_options',
			'type'       => 'theme_mod',
			'default'    => 'in_header',
		]
	);

	$wp_customize->add_control(
		'sticky_position',
		[
			'type'    => 'select',
			'section' => 'xeno_header_setup_settings',
			'label'   => __( 'Select sticky location', 'xeno' ),
			'choices' => [
				'header'       => __( 'Header', 'xeno' ),
				'under_header' => __( 'Under header', 'xeno' ),
			],
		]
	);

	// SETTING.
	$wp_customize->add_setting(
		'use_sticky',
		[
			'default'    => false,
			'type'       => 'theme_mod',
			'capability' => 'edit_theme_options',
		]
	);

	$wp_customize->add_control(
		'use_sticky',
		[
			'type'        => 'checkbox',
			'label'       => __( 'Use sticky location', 'xeno' ),
			'description' => __( 'Make location scroll with the page', 'xeno' ),
			'priority'    => 10,
			'section'     => 'xeno_header_setup_settings',
		]
	);
}

