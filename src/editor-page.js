/**
 * WordPress dependencies
 */
import { registerPlugin } from '@wordpress/plugins';
/**
 * Internal dependencies
 */
import PageSettingsPanel from './js/meta-fields/page-meta-ui';

registerPlugin('wp-page-settings-panel', {
	render: PageSettingsPanel,
	icon: 'admin-tools',
});
