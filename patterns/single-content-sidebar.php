<?php
/**
 * Title: Single Content With Sidebar
 * Slug: xeno/single-content
 * Categories: xeno-blog
 *
 * @package Xeno
 */

declare( strict_types=1 );
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":90,"minHeight":400,"minHeightUnit":"px","customGradient":"linear-gradient(270deg,rgb(0,123,195) 0%,rgb(0,19,33) 100%)","contentPosition":"center center","isDark":false,"align":"wide","className":"is-style-angled","style":{"spacing":{"padding":{"top":"var:preset|spacing|huge","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
			<div class="wp-block-cover alignwide is-light is-style-angled" style="padding-top:var(--wp--preset--spacing--huge);padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim has-background-gradient" style="background:linear-gradient(270deg,rgb(0,123,195) 0%,rgb(0,19,33) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"80%","textColor":"base"} -->
						<div class="wp-block-column has-base-color has-text-color" style="flex-basis:80%"><!-- wp:post-title {"level":1} /-->

							<!-- wp:group {"className":"post-meta-horizontal","layout":{"type":"flex","flexWrap":"wrap","orientation":"horizontal","verticalAlignment":"top"}} -->
							<div class="wp-block-group post-meta-horizontal"><!-- wp:post-author /-->

								<!-- wp:post-date /--></div>
							<!-- /wp:group --></div>
						<!-- /wp:column --></div>
					<!-- /wp:columns --></div></div>
			<!-- /wp:cover -->

			<!-- wp:post-content {"layout":{"type":"constrained","contentSize":"890px","wideSize":"1550px"}} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%"></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
