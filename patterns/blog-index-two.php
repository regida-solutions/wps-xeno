<?php
/**
 * Title: Blog Index Two
 * Slug: xeno/blog-index-two
 * Categories: xeno-blog
 *
 * @package Xeno
 */

declare( strict_types=1 );
?>
<!-- wp:group {"tagName":"main","className":"blogroll site-content","layout":{"type":"constrained"}} -->
<main class="wp-block-group blogroll site-content"><!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"default"}} -->
	<div class="wp-block-query"><!-- wp:post-template {"align":"wide"} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|reset","right":"var:preset|spacing|reset","bottom":"var:preset|spacing|reset","left":"var:preset|spacing|reset"},"blockGap":"var:preset|spacing|reset"},"border":{"radius":"5px"}},"backgroundColor":"light","className":"fullheight","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group fullheight has-light-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--reset);padding-right:var(--wp--preset--spacing--reset);padding-bottom:var(--wp--preset--spacing--reset);padding-left:var(--wp--preset--spacing--reset)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|reset"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--reset)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","width":"100%","height":"100%","align":"wide","style":{"border":{"radius":"5px"}},"className":"is-style-leaf"} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"textDecoration":"none"}},"fontSize":"heading6"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|tiny"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal","verticalAlignment":"top"}} -->
				<div class="wp-block-group"><!-- wp:avatar {"size":40,"className":"is-style-leaf"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|tiny"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group"><!-- wp:post-date {"displayType":"modified","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}},"typography":{"lineHeight":"1.5"}},"fontSize":"tiny"} /-->

						<!-- wp:post-terms {"term":"category","style":{"typography":{"lineHeight":"1"}},"fontSize":"small"} /--></div>
					<!-- /wp:group --></div>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"textAlign":"left","moreText":"","showMoreOnNewLine":false,"fontSize":"small"} /-->

				<!-- wp:read-more {"content":"\u003cstrong\u003eRead more\u003c/strong\u003e","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"bottom":"0"}}}} /--></div>
			<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></main>
<!-- /wp:group -->
