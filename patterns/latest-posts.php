<?php
/**
 * Title: Latest posts
 * Slug: xeno/latest-posts
 * Categories: xeno-content
 *
 * @package Xeno
 */

declare( strict_types=1 );
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"className":"is-style-leaf","layout":{"type":"constrained"}} -->
		<div class="wp-block-column is-style-leaf"><!-- wp:paragraph {"textColor":"cta-one"} -->
			<p class="has-cta-one-color has-text-color">BLOG</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">Latest News</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>It’s takes many elements to build and grow your website to reach the ultimate goal – <br>fill your calendar with bookings! text text blah blah<br></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"tagName":"main","className":"blogroll","layout":{"type":"constrained"}} -->
			<main class="wp-block-group blogroll"><!-- wp:query {"queryId":3,"query":{"perPage":2,"pages":"2","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"type":"default"}} -->
				<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
					<!-- wp:columns {"className":"blogroll-article"} -->
					<div class="wp-block-columns blogroll-article"><!-- wp:column {"width":"34%","className":"is-style-leaf"} -->
						<div class="wp-block-column is-style-leaf" style="flex-basis:34%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","align":"wide","className":"is-style-leaf"} /--></div>
						<!-- /wp:column -->

						<!-- wp:column {"width":"66%","className":"blogroll-article-content"} -->
						<div class="wp-block-column blogroll-article-content" style="flex-basis:66%"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
							<div class="wp-block-group alignwide"><!-- wp:post-title {"level":4,"isLink":true,"align":"wide","fontSize":"heading5"} /--></div>
							<!-- /wp:group -->

							<!-- wp:columns {"isStackedOnMobile":false} -->
							<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"9.2%"} -->
								<div class="wp-block-column" style="flex-basis:9.2%"><!-- wp:avatar {"size":40,"className":"is-style-leaf"} /--></div>
								<!-- /wp:column -->

								<!-- wp:column {"width":""} -->
								<div class="wp-block-column"><!-- wp:post-terms {"term":"category","style":{"typography":{"lineHeight":"1"}}} /-->

									<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"tiny"} /--></div>
								<!-- /wp:column --></div>
							<!-- /wp:columns -->

							<!-- wp:post-excerpt {"fontSize":"small"} /--></div>
						<!-- /wp:column --></div>
					<!-- /wp:columns -->
					<!-- /wp:post-template --></div>
				<!-- /wp:query --></main>
			<!-- /wp:group --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
