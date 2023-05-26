/**
 * WordPress dependencies
 */
import domReady from '@wordpress/dom-ready';
import { registerBlockStyle } from '@wordpress/blocks';

domReady(() => {
	// column/card item settings
	['wps/grid-column', 'wps/card'].forEach((element) => {
		registerBlockStyle(element, {
			name: 'shadow-hover',
			label: 'Shadow hover',
			isDefault: false,
		});

		registerBlockStyle(element, {
			name: 'bordered',
			label: 'Bordered',
			isDefault: false,
		});
		registerBlockStyle(element, {
			name: 'highlighted',
			label: 'Highlighted',
			isDefault: false,
		});

		// decorations
		registerBlockStyle('core/cover', {
			name: 'angled-up',
			label: 'Angled up',
			isDefault: false,
		});

		registerBlockStyle('core/cover', {
			name: 'angled-down',
			label: 'Angled down',
			isDefault: false,
		});

		registerBlockStyle('core/cover', {
			name: 'arrow-up',
			label: 'Arrow up',
			isDefault: false,
		});

		registerBlockStyle('core/cover', {
			name: 'arrow-down',
			label: 'Arrow down',
			isDefault: false,
		});

		registerBlockStyle('core/cover', {
			name: 'circle',
			label: 'Circle',
			isDefault: false,
		});

		registerBlockStyle('core/cover', {
			name: 'rounded',
			label: 'Rounded',
			isDefault: false,
		});
		registerBlockStyle('core/cover', {
			name: 'wave',
			label: 'Wave',
			isDefault: false,
		});
	});

	/* Gravity styles */
	registerBlockStyle('gravityforms/form', {
		name: 'xeno-style',
		label: 'Custom style',
		isDefault: false,
	});
});
