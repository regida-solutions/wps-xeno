let prevY = 0;

const stickyHeader = () => {
	let top =
		(window.pageYOffset || document.scrollTop) - (document.clientTop || 0);
	if (Number.isNaN(top)) {
		top = 0;
	}
	if (prevY < top) {
		document.body.classList.remove('show-scroll-position');
	} else {
		document.body.classList.add('show-scroll-position');
	}
	if (top < 104) {
		document.body.classList.remove('sticky-scroll-position');
	} else {
		document.body.classList.add('sticky-scroll-position');
	}

	if (top < 150) {
		document.body.classList.remove('started-scroll-position');
	} else {
		document.body.classList.add('started-scroll-position');
	}

	prevY = top;
};

export default stickyHeader;
