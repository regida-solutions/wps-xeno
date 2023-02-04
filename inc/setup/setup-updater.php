<?php
/**
 * Theme Updater
 *
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Setup\Updater;

// pre_set_site_transient_update_themes.
add_filter( 'themes_api', __NAMESPACE__ . '\\theme_info', 20, 3 );
add_filter( 'site_transient_update_themes', __NAMESPACE__ . '\\theme_push_update' );
add_action( 'upgrader_process_complete', __NAMESPACE__ . '\\theme_after_update', 10, 2 );

/**
 * Plugin pop-up when new release is out
 *
 * @param false|object|array $res The result object or array.
 * @param string             $action The type of information being requested from the Theme Installation API.
 * @param object             $args Theme API arguments.
 */
function theme_info( $res, string $action, object $args ) { //phpcs:ignore

	// Do nothing if this is not about getting plugin information.
	if ( 'theme_information' !== $action ) {
		return false;
	}

	// Do nothing if it is not our plugin.
	if ( XENO_THEME_SLUG !== $args->slug ) {
		return $res;
	}

	$remote = get_transient( 'xeno_upgrade_' . XENO_THEME_SLUG );

	if ( false === $remote ) {

		$remote = wp_remote_get(
			XENO_UPDATE_URL . '/get-info.php?slug=' . XENO_THEME_SLUG . '&action=info',
			[
				'timeout' => 5,
				'headers' => [
					'Accept' => 'application/json',
				],
			]
		);

		if ( ! is_wp_error( $remote ) && isset( $remote['response']['code'] ) && 200 === $remote['response']['code'] && ! empty( $remote['body'] ) ) {
			set_transient( 'xeno_upgrade_' . XENO_THEME_SLUG, $remote, 21600 ); // 6 hours cache.
		}
	}

	if ( ! is_wp_error( $remote ) ) {

		$remote = json_decode( $remote['body'] );

		$res                 = new \stdClass();
		$res->name           = $remote->name;
		$res->slug           = $remote->slug;
		$res->version        = $remote->version;
		$res->tested         = $remote->tested;
		$res->requires       = $remote->requires;
		$res->author         = $remote->author;
		$res->author_profile = $remote->author_homepage;
		$res->download_link  = $remote->download_link;
		$res->trunk          = $remote->download_link;
		$res->last_updated   = $remote->last_updated;
		$res->sections       = [
			'description'  => $remote->sections->description, // description tab.
			'installation' => $remote->sections->installation, // installation tab.
		];
		$res->banners        = [
			'low'  => $remote->banners->low,
			'high' => $remote->banners->high,
		];

		return $res;
	}

	return false;
}

/**
 * Define Plugin update site_transient_update_plugins callback
 *
 * @param object $transient Plugin transient.
 */
function theme_push_update( $transient ) { //phpcs:ignore

	if ( ! $transient ) {
		return $transient;
	}

	if ( empty( $transient->checked ) ) {
		return $transient;
	}

	$remote = get_transient( 'xeno_upgrade_' . XENO_THEME_SLUG );

	if ( false === $remote ) {
		// info.json is the file with the actual plugin information on your server.
		$remote = wp_remote_get( XENO_UPDATE_URL . '/get-info.php?slug=' . XENO_THEME_SLUG . '&action=update',
			[
				'timeout' => 10,
				'headers' => [
					'Accept' => 'application/json',
				],
			]
		);

		if ( ! is_wp_error( $remote ) && isset( $remote['response']['code'] ) && 200 === $remote['response']['code'] && ! empty( $remote['body'] ) ) {
			set_transient( 'xeno_upgrade_' . XENO_THEME_SLUG, $remote, 21600 ); // 6 hours cache.
		}
	}

	$remote = $remote ? json_decode( $remote['body'] ) : json_decode( '{{error: true}}' );

	if ( ! isset( $remote->error ) ) {

		if ( $remote && version_compare( XENO_THEME_VERSION, $remote->version, '<' ) && version_compare( $remote->requires, get_bloginfo( 'version' ), '<' ) ) {
			$res       = new \stdClass();
			$res->slug = XENO_THEME_SLUG;

			$res->theme_data  = [
				'theme'       => XENO_THEME_SLUG,
				'new_version' => $remote->version,
				'url'         => XENO_UPDATE_URL . '/' . XENO_THEME_SLUG . '/',
				'package'     => $remote->download_link,
			];
			$res->new_version = $remote->version;
			$res->tested      = $remote->tested;
			$res->package     = $remote->download_link;
			$res->url         = XENO_UPDATE_URL . '/' . XENO_THEME_SLUG . '/';
			$transient->response[ $res->theme_data['theme'] ] = $res->theme_data;
		}
	}
	return $transient;
}

/**
 * Cache the results to make update process fast
 *
 * @param \WP_Upgrader $upgrader_object  WP_Upgrader instance.
 * @param array        $options Array of bulk item update data.
 */
function theme_after_update( \WP_Upgrader $upgrader_object, array $options ): void {
	if ( 'update' === $options['action'] && 'theme' === $options['type'] ) {
		// just clean the cache when new plugin version is installed.
		delete_transient( 'xeno_upgrade_' . XENO_THEME_SLUG );
	}
}
