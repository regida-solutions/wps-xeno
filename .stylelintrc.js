module.exports = {
	extends: ['@dekode/stylelint-config'],
	ignoreFiles: ['packages/themes/wps-prime/assets/font-packs/**/*.css'],
	rules: {
		'at-rule-no-unknown': [
			true,
			{
				ignoreAtRules: ['mixin', 'define-mixin'],
			},
		],
	},
};
