<?php
/**
 * Register custom template for query block.
 *
 * @package Xeno
 */

declare( strict_types=1 );

namespace Xeno\Blocks\QueryBlock;

/**
 * Demo filter
 * add_filter( 'query_slider_template', __NAMESPACE__ . '\\slider_template', 10, 3 );
 */

add_filter( 'query_slider_slide_template', __NAMESPACE__ . '\\slider_slide_template', 10, 2 );


/**
 * Image generation helper
 *
 * @param  array $attributes Image id, size, classes and style.
 * @return string the image element.
 */
function render_image( array $attributes = [] ): string {
	if ( function_exists( '\WPS\Blocks\Helpers\Image\render_image' ) ) {
		return \WPS\Blocks\Helpers\Image\render_image( $attributes );
	} else {
		return '';
	}
}


/**
 * Item template
 *
 * @param \WP_QUERY $slider_query Current Query.
 * @param array     $attributes Block attributes.
 * @param string    $content Block content.
 */
function slider_template( \WP_QUERY $slider_query, array $attributes = [], string $content = '' ): string {

	$new_content = '';
	$post_type   = ! empty( $attributes['query']['postType'] ) ? $attributes['query']['postType'] : 'post';

	// Create a WordPress loop using $slider query.
	while ( $slider_query->have_posts() ) {
		$slider_query->the_post();

		$image_attributes = [
			'id'   => get_post_thumbnail_id( get_the_ID() ),
			'size' => 'large',
		];

		$link_wrapper_start = '';
		$link_wrapper_end   = '';

		if ( isset( $attributes['enableLink'] ) && ! empty( $attributes['enableLink'] ) ) {
			$link_wrapper_start = '<a href="' . get_the_permalink() . '">';
			$link_wrapper_end   = '</a>';
		}

		$author = apply_filters('the_content', '
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"className":"is-style-leaf"} /--></div>
<!-- /wp:column -->
<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-terms {"term":"category","style":{"typography":{"lineHeight":"1"}}} /-->
<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"tiny"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->');

		$slide_content = sprintf(
			'<div class="swiper-slide">' .
			'<div class="query-slider-wrapper">' .
			'<div class="query-slider-container">' .
			'<div class="query-slider-media">%s</div>' .
			'<div class="query-slider-content">' .
			'<h6 class="query-slider__title">%s</h6>' .
			'<div class="query-slider__author">%s</div>' .
			'<div class="query-slider__excerpt">%s</div>' .
			'</div>' .
			'</div>' .
			'</div>' .
			'</div>',
			$link_wrapper_start . render_image( $image_attributes ) . $link_wrapper_end,
			$link_wrapper_start . get_the_title() . $link_wrapper_end,
			$author,
			get_the_excerpt()
		);

		if ( in_array( $post_type, [ 'post', 'page' ], true ) ) {
			$new_content .= sprintf(
				'<div class="swiper-slide">%s</div>',
				apply_filters( 'query_slider_slide_template', $slide_content, $attributes )
			);
		}
	}

	return $new_content;
}

/**
 * Slide template
 *
 * @param string $content Block content.
 * @param array  $attributes Block attributes.
 */
function slider_slide_template( string $content = '', array $attributes = [] ): string {

	$link_wrapper_start = '';
	$link_wrapper_end   = '';

	$image_attributes = [
		'id'   => get_post_thumbnail_id( get_the_ID() ),
		'size' => 'large',
	];

	if ( isset( $attributes['enableLink'] ) && ! empty( $attributes['enableLink'] ) ) {
		$link_wrapper_start = '<a href="' . get_the_permalink() . '">';
		$link_wrapper_end   = '</a>';
	}

	$author = apply_filters('the_content', '
<!-- wp:columns {"isStackedOnMobile":false} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"className":"is-style-leaf"} /--></div>
<!-- /wp:column -->
<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-terms {"term":"category","style":{"typography":{"lineHeight":"1"}}} /-->
<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"tiny"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->');

	$new_content = sprintf(
		'<div class="query-slider-wrapper">' .
		'<div class="query-slider-container">' .
		'<div class="query-slider-media">%s</div>' .
		'<div class="query-slider-content">' .
		'<h6 class="query-slider__title">%s</h6>' .
		'<div class="query-slider__author">%s</div>' .
		'<div class="query-slider__excerpt">%s</div>' .
		'</div>' .
		'</div>' .
		'</div>',
		$link_wrapper_start . render_image( $image_attributes ) . $link_wrapper_end,
		$link_wrapper_start . get_the_title() . $link_wrapper_end,
		$author,
		get_the_excerpt()
	);

	return $new_content;
}
