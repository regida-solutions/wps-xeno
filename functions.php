<?php
/**
 * Xeno Theme functions and definitions.
 *
 * @see https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno;

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Silence is golden.' );
}

if ( ! function_exists( 'get_theme_version' ) ) {
	/**
	 * Get the current theme version. Used for asset loading.
	 *
	 * @return string Version number or random number
	 */
	function get_theme_version(): string {
		$theme_data = wp_get_theme( get_template() );
		$version    = $theme_data->get( 'Version' );

		return ( ! empty( $version ) ) ? $version : (string) wp_rand();
	}
}

// Setup constants.
define( 'XENO_THEME_VERSION', get_theme_version() );
define( 'XENO_THEME_DIR', get_template_directory() );
define( 'XENO_THEME_URI', get_template_directory_uri() );
define( 'XENO_THEME_SLUG', 'xeno' );
define( 'XENO_UPDATE_FOLDER', 'xeno' );
define( 'XENO_UPDATE_URL', 'https://zsoltrevay.com/packages' );

// Mata fields.
require __DIR__ . '/inc/meta-fields/meta-fields-page.php';

require __DIR__ . '/inc/setup/setup.php';

require __DIR__ . '/inc/blocks/wps-query-slider/template.php';
