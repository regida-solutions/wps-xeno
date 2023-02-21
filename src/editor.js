/**
 * Internal dependencies
 */
window.wp.domReady(() => {
	// column/card item settings
	['wps/grid-column', 'wps/card'].forEach((element) => {
		window.wp.blocks.registerBlockStyle(element, {
			name: 'shadow-hover',
			label: 'Shadow hover',
			isDefault: false,
		});

		window.wp.blocks.registerBlockStyle(element, {
			name: 'bordered',
			label: 'Bordered',
			isDefault: false,
		});
		window.wp.blocks.registerBlockStyle(element, {
			name: 'highlighted',
			label: 'Highlighted',
			isDefault: false,
		});
	});
});
