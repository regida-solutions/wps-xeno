/**
 * WordPress dependencies
 */
import { useSelect } from '@wordpress/data';
import { useEntityProp } from '@wordpress/core-data';
import { __ } from '@wordpress/i18n';
import { CheckboxControl } from '@wordpress/components';
import { PluginDocumentSettingPanel } from '@wordpress/edit-post';

const PageSettingsPanel = () => {
	/* Access post props */
	const postType = useSelect((select) =>
		select('core/editor').getCurrentPostType(),
	);

	/* Access meta data */
	const [meta, setMeta] = useEntityProp('postType', postType, 'meta');

	if ('page' !== postType) {
		return '';
	}

	const {
		_reset_page_top_space: resetPageTopSpace = false,
		_reset_page_bottom_space: resetPageBottomSpace = false,
	} = meta;

	return (
		<PluginDocumentSettingPanel
			name="xeno-custom-page-settings-panel"
			title="Custom page settings"
			className="xeno-custom-page-settings"
		>
			<CheckboxControl
				label={__('Disable Content Top Space')}
				checked={resetPageTopSpace}
				onChange={() =>
					setMeta({
						_reset_page_top_space: !resetPageTopSpace,
					})
				}
			/>
			<CheckboxControl
				label={__('Disable Content Bottom Space')}
				checked={resetPageBottomSpace}
				onChange={() =>
					setMeta({
						_reset_page_bottom_space: !resetPageBottomSpace,
					})
				}
			/>
		</PluginDocumentSettingPanel>
	);
};

export default PageSettingsPanel;
