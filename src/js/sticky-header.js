let prevY = 0;

const stickyHeader = () => {
	let top =
		(window.pageYOffset || document.scrollTop) - (document.clientTop || 0);
	if (Number.isNaN(top)) {
		top = 0;
	}
	if (prevY < top) {
		document.body.classList.remove('show-scroll-header');
	} else {
		document.body.classList.add('show-scroll-header');
	}
	if (top < 104) {
		document.body.classList.remove('sticky-scroll-header');
	} else {
		document.body.classList.add('sticky-scroll-header');
	}

	if (top < 150) {
		document.body.classList.remove('started-scroll-header');
	} else {
		document.body.classList.add('started-scroll-header');
	}

	prevY = top;
};

export default stickyHeader;
