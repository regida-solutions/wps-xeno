const makeid = (length) => {
	let result = '';
	const characters =
		'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	const charactersLength = characters.length;
	for (let i = 0; i < length; i++) {
		result += characters.charAt(
			Math.floor(Math.random() * charactersLength),
		);
	}
	return result;
};

const initFancybox = () => {
	const galleries = document.getElementsByClassName('wp-block-gallery');

	for (const gallery of galleries) {
		const items = gallery.querySelectorAll('.wp-block-image a');
		const galleryId = makeid(20);
		items.forEach((item) => {
			item.setAttribute('data-fancybox', galleryId);
		});
	}
};

export default initFancybox;
