module.exports = {
	extends: ['@dekode/stylelint-config'],
	ignoreFiles: ['assets/font/**/*.css'],
	rules: {
		'at-rule-no-unknown': [
			true,
			{
				ignoreAtRules: ['mixin', 'define-mixin'],
			},
		],
	},
};
