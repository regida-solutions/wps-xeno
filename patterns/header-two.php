<?php
/**
 * Title: Header Two
 * Slug: xeno/header-two
 * Categories: header
 * Block Types: core/template-part/header
 *
 * @package Xeno
 */

declare( strict_types=1 );
?>
<!-- wp:group {"backgroundColor":"base","textColor":"base","className":"site-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group site-header has-base-color has-base-background-color has-text-color has-background"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile" style="padding-top:var(--wp--preset--spacing--normal);padding-bottom:var(--wp--preset--spacing--normal)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:site-logo {"width":230,"shouldSyncIcon":false} /--></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":""} -->
				<div class="wp-block-column is-vertically-aligned-center"><!-- wp:html -->
					<div style="text-align:right;" class="custom-mobile-toggle-position"></div>
					<!-- /wp:html --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"230px","className":"u-hide-mobile"} -->
				<div class="wp-block-column is-vertically-aligned-center u-hide-mobile" style="flex-basis:230px"><!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#313131","openInNewTab":true,"size":"has-normal-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"right","orientation":"horizontal","flexWrap":"nowrap"}} -->
					<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"","service":"mail","label":"Email"} /-->

						<!-- wp:social-link {"url":"","service":"facebook","label":"Facebook"} /-->

						<!-- wp:social-link {"url":"","service":"youtube","label":"Youtube"} /-->

						<!-- wp:social-link {"url":"","service":"google","label":"My Business"} /--></ul>
					<!-- /wp:social-links --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|normal","bottom":"var:preset|spacing|normal"},"margin":{"top":"var:preset|spacing|reset"}},"color":{"background":"#f5c800"}},"textColor":"contrast","className":"navigation-container"} -->
	<div class="wp-block-columns alignfull are-vertically-aligned-center is-not-stacked-on-mobile navigation-container has-contrast-color has-text-color has-background" style="background-color:#f5c800;margin-top:var(--wp--preset--spacing--reset);padding-top:var(--wp--preset--spacing--normal);padding-bottom:var(--wp--preset--spacing--normal)"><!-- wp:column {"verticalAlignment":"center","width":"100%","layout":{"type":"constrained","wideSize":"1410px","contentSize":"1140px"}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:wps/navigation {"toggleButtonLocation":"custom-mobile-toggle-position"} /--></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->
