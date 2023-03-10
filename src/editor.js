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

		// decorations
		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'angled-up',
			label: 'Angled up',
			isDefault: false,
		});

		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'angled-down',
			label: 'Angled down',
			isDefault: false,
		});

		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'arrow-up',
			label: 'Arrow up',
			isDefault: false,
		});

		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'arrow-down',
			label: 'Arrow down',
			isDefault: false,
		});

		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'circle',
			label: 'Circle',
			isDefault: false,
		});

		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'rounded',
			label: 'Rounded',
			isDefault: false,
		});
		window.wp.blocks.registerBlockStyle('core/cover', {
			name: 'wave',
			label: 'Wave',
			isDefault: false,
		});
	});
});
