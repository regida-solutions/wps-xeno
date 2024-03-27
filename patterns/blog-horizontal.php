<?php
/**
 * Title: Blog Horizontal
 * Slug: xeno/blog-horizontal
 * Categories: xeno-blog
 *
 * @package Xeno
 */

declare( strict_types=1 );
?>
<!-- wp:group {"tagName":"main","className":"blogroll site-content","layout":{"type":"constrained"}} -->
<main class="wp-block-group blogroll site-content"><!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column {"width":"75%","layout":{"type":"default"}} -->
		<div class="wp-block-column" style="flex-basis:75%"><!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
			<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|reset"}},"layout":{"type":"default","columnCount":1}} -->
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"","height":"","align":"wide","className":"is-style-leaf"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|tiny"}},"layout":{"type":"flex","orientation":"horizontal","justifyContent":"left"}} -->
				<div class="wp-block-group"><!-- wp:image {"id":1746,"width":"auto","height":"14px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-default"} -->
					<figure class="wp-block-image size-large is-resized is-style-default"><img src="https://rf.wpshapers.com/wp-content/uploads/2024/03/calendar-light.svg" alt="" class="wp-image-1746" style="width:auto;height:14px"/></figure>
					<!-- /wp:image -->

					<!-- wp:post-date {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|reset","right":"0","bottom":"var:preset|spacing|reset","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"},":hover":{"color":{"text":"var:preset|color|custom-light-blue"}}}}},"fontSize":"tiny"} /--></div>
				<!-- /wp:group -->

				<!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-custom-dark"},":hover":{"color":{"text":"var:preset|color|custom-light-blue"}}}},"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"fontSize":"heading4"} /-->

				<!-- wp:post-excerpt {"textAlign":"left","moreText":"","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|custom-light-blue"}}}}}} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|normal"}}},"layout":{"type":"constrained","justifyContent":"right"}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--normal)"><!-- wp:read-more {"content":"Leggi tutto ...","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"layout":{"selfStretch":"fixed","flexSize":"5.5rem"}},"backgroundColor":"contrast","textColor":"base","fontSize":"small"} /--></div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|tiny"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
				<div class="wp-block-group"><!-- wp:image {"id":1747,"width":"14px","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
					<figure class="wp-block-image size-large is-resized"><img src="https://rf.wpshapers.com/wp-content/uploads/2024/03/tags-light.svg" alt="" class="wp-image-1747" style="width:14px"/></figure>
					<!-- /wp:image -->

					<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-color-1"},":hover":{"color":{"text":"var:preset|color|custom-light-blue"}}}}}} /--></div>
				<!-- /wp:group -->

				<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal"}}},"backgroundColor":"light"} -->
				<hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--normal);margin-bottom:var(--wp--preset--spacing--normal)"/>
				<!-- /wp:separator -->
				<!-- /wp:post-template -->

				<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous /-->
				<!-- wp:query-pagination-numbers /-->
				<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination --></div>
			<!-- /wp:query --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">ARTICOLI RECENTI</h4>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"displayPostDate":true,"featuredImageAlign":"left","featuredImageSizeWidth":45,"featuredImageSizeHeight":45,"addLinkToFeaturedImage":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|reset"}}},"fontSize":"small"} /-->

			<!-- wp:heading {"level":4} -->
			<h4 class="wp-block-heading">TAG</h4>
			<!-- /wp:heading -->

			<!-- wp:tag-cloud {"smallestFontSize":"1rem","largestFontSize":"1rem"} /--></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></main>
<!-- /wp:group -->
