<?php
/**
 * The main theme customizer.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Customizer;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Silence is golden.' );
}

/**
 * Load all the customizer options
 */
function load_customizer_sections() {
	$sections = [
		'header',
	];

	foreach ( $sections as $section ) {
		include_once __DIR__ . '/customizer-' . $section . '.php';
	}
}

load_customizer_sections();
