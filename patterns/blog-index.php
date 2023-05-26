<?php
/**
 * Title: Blog Index
 * Slug: xeno/blog-index
 * Categories: xeno-blog
 *
 * @package Xeno
 */

declare( strict_types=1 );
?>
<!-- wp:group {"tagName":"main","className":"blogroll site-content","layout":{"type":"constrained"}} -->
<main class="wp-block-group blogroll site-content"><!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"displayLayout":{"type":"flex","columns":2},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
		<!-- wp:columns {"className":"blogroll-article"} -->
		<div class="wp-block-columns blogroll-article"><!-- wp:column {"width":"34%"} -->
			<div class="wp-block-column" style="flex-basis:34%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","align":"wide","className":"is-style-leaf"} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66%","style":{"spacing":{"padding":{"top":"var:preset|spacing|reset","right":"var:preset|spacing|reset","bottom":"var:preset|spacing|reset","left":"var:preset|spacing|reset"}}},"className":"blogroll-article-content"} -->
			<div class="wp-block-column blogroll-article-content" style="padding-top:var(--wp--preset--spacing--reset);padding-right:var(--wp--preset--spacing--reset);padding-bottom:var(--wp--preset--spacing--reset);padding-left:var(--wp--preset--spacing--reset);flex-basis:66%"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","fontSize":"heading4"} /-->

				<!-- wp:columns {"isStackedOnMobile":false} -->
				<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column {"width":"9.2%"} -->
					<div class="wp-block-column" style="flex-basis:9.2%"><!-- wp:avatar {"size":40,"className":"is-style-leaf"} /--></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column"><!-- wp:post-terms {"term":"category","style":{"typography":{"lineHeight":"1"}}} /-->

						<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"tiny"} /--></div>
					<!-- /wp:column --></div>
				<!-- /wp:columns -->

				<!-- wp:post-excerpt {"fontSize":"small"} /--></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></main>
<!-- /wp:group -->
