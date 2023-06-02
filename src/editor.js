if (typeof window.wp !== 'undefined') {
	const { wp } = window;
	wp.domReady(function () {
		// column/card item settings
		['wps/grid-column', 'wps/card'].forEach((element) => {
			wp.blocks.registerBlockStyle(element, {
				name: 'shadow-hover',
				label: 'Shadow hover',
				isDefault: false,
			});

			wp.blocks.registerBlockStyle(element, {
				name: 'bordered',
				label: 'Bordered',
				isDefault: false,
			});
			wp.blocks.registerBlockStyle(element, {
				name: 'highlighted',
				label: 'Highlighted',
				isDefault: false,
			});
		});

		// decorations
		wp.blocks.registerBlockStyle('core/cover', {
			name: 'angled-up',
			label: 'Angled up',
			isDefault: false,
		});

		wp.blocks.registerBlockStyle('core/cover', {
			name: 'angled-down',
			label: 'Angled down',
			isDefault: false,
		});

		wp.blocks.registerBlockStyle('core/cover', {
			name: 'arrow-up',
			label: 'Arrow up',
			isDefault: false,
		});

		wp.blocks.registerBlockStyle('core/cover', {
			name: 'arrow-down',
			label: 'Arrow down',
			isDefault: false,
		});

		wp.blocks.registerBlockStyle('core/cover', {
			name: 'circle',
			label: 'Circle',
			isDefault: false,
		});

		wp.blocks.registerBlockStyle('core/cover', {
			name: 'rounded',
			label: 'Rounded',
			isDefault: false,
		});
		wp.blocks.registerBlockStyle('core/cover', {
			name: 'wave',
			label: 'Wave',
			isDefault: false,
		});

		/* Gravity styles */
		wp.blocks.registerBlockStyle('gravityforms/form', {
			name: 'xeno-style',
			label: 'Custom style',
			isDefault: false,
		});

		wp.blocks.registerBlockStyle('gravityforms/form', {
			name: 'xeno-style',
			label: 'Custom style',
			isDefault: false,
		});
	});
}
