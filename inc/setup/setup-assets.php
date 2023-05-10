<?php
/**
 * Functions to register assets.
 *
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Setup\Assets;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\front_end_assets' );
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\editor_assets' );

/**
 * Get uri to asset file
 *
 * @param  string $file Filename.
 * @return string
 */
function get_file_uri( string $file ): string {
	return get_template_directory_uri() . '/build/' . $file;
}

/**
 * Get file path
 *
 * @param  string $file Filename.
 * @return string
 */
function get_file_path( string $file ): string {
	return get_template_directory() . '/build/' . $file;
}


/**
 * Enqueue scripts and styles for the client.
 */
function front_end_assets() {

	// SWIPER Slider Core.
	wp_register_script( 'xeno-slider-core', 'https://unpkg.com/swiper@7/swiper-bundle.min.js', [ 'xeno' ], XENO_THEME_VERSION, true );
	wp_register_style( 'xeno-slider-core', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', [], XENO_THEME_VERSION );

	// Fancybox.
	wp_register_script( 'xeno-fancybox-core', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', [ 'xeno' ], XENO_THEME_VERSION, true );
	wp_register_style( 'xeno-fancybox-core', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css', [], XENO_THEME_VERSION );

	if ( has_block( 'gallery' ) ) {
		wp_enqueue_style( 'xeno-fancybox-core' );
		wp_enqueue_script( 'xeno-fancybox-core' );
	}

	// Stylesheets.
	$style_path = get_file_path( 'style.css' );
	if ( file_exists( $style_path ) ) {
		wp_enqueue_style(
			'xeno',
			get_file_uri( 'style.css' ),
			[],
			filemtime( $style_path )
		);
	}

	// JavaScripts.
	$site_js_path = get_file_path( 'site.js' );
	if ( file_exists( $site_js_path ) ) {
		$script_deps_path    = get_file_path( 'site.asset.php' );
		$script_dependencies = file_exists( $script_deps_path ) ?
			require $script_deps_path :
			[
				'dependencies' => [],
				'version'      => filemtime( $site_js_path ),
			];

		// Add custom dependencies.
		$custom_dependencies                 = [ 'jquery' ];
		$script_dependencies['dependencies'] = array_merge( $script_dependencies['dependencies'], $custom_dependencies );

		wp_register_script(
			'xeno',
			get_file_uri( 'site.js' ),
			$script_dependencies['dependencies'],
			$script_dependencies['version'],
		true);

		// Get site options.
		wp_localize_script(
			'xeno',
			'themeSettings',
			apply_filters( 'xeno_theme_setting_js', [] )
		);
		wp_enqueue_script( 'xeno' );
	}
}


/**
 * Enqueue editor style for the WordPress editor.
 */
function editor_assets() {

	// Fonts.
	$fonts_path = get_template_directory() . '/assets/fonts/fonts.css';
	if ( file_exists( $fonts_path ) ) {
		wp_enqueue_style(
			'xeno-editor-fonts',
			get_template_directory_uri() . '/assets/fonts/fonts.css',
			[],
			filemtime( $fonts_path )
		);
	}

	// Stylesheets.
	$style_path = get_file_path( 'editor.css' );
	if ( file_exists( $style_path ) ) {
		wp_enqueue_style(
			'xeno-editor',
			get_file_uri( 'editor.css' ),
			[],
			filemtime( $style_path )
		);
	}

	// JavaScripts.
	$editor_js_path = get_file_path( 'editor.js' );
	if ( file_exists( $editor_js_path ) ) {
		$script_deps_path    = get_file_path( 'editor.asset.php' );
		$script_dependencies = file_exists( $script_deps_path ) ?
			require $script_deps_path :
			[
				'dependencies' => [],
				'version'      => filemtime( $editor_js_path ),
			];

		wp_enqueue_script(
			'xeno-editor',
			get_file_uri( 'editor.js' ),
			$script_dependencies['dependencies'],
			$script_dependencies['version'],
			true
		);
	}
	// JavaScripts.
	if ( 'page' === get_post_type() ) {
		$editor_page_js_path = get_file_path( 'editor-page.js' );
		if ( file_exists( $editor_page_js_path ) ) {
			$script_deps_path    = get_file_path( 'editor.asset.php' );
			$script_dependencies = file_exists( $script_deps_path ) ?
				require $script_deps_path :
				[
					'dependencies' => [],
					'version'      => filemtime( $editor_page_js_path ),
				];

			wp_enqueue_script(
				'xeno-editor-page',
				get_file_uri( 'editor-page.js' ),
				$script_dependencies['dependencies'],
				$script_dependencies['version'],
				true
			);
		}
	}
}

add_filter( 'xeno_theme_setting_js', __NAMESPACE__ . '\\site_js_settings' );

/**
 * Make available site settings in js
 *
 * @param array $settings The site options settings.
 */
function site_js_settings( array $settings ): array {

	/* Get theme settings */
	$use_sticky = get_theme_mod( 'header_use_sticky', false );

	$settings['useSticky'] = $use_sticky;

	return $settings;
}
