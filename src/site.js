/**
 * Internal dependencies
 */
import stickyHeader from './js/sticky-header';

window.addEventListener('load', function () {
	const { useSticky } = window.themeSettings;

	if (useSticky) {
		/* Add sticky header */
		function throttle(fn, wait) {
			let time = Date.now();
			return () => {
				if (time + wait - Date.now() < 0) {
					fn();
					time = Date.now();
				}
			};
		}

		window.addEventListener('scroll', throttle(stickyHeader, 20));
	}
});
