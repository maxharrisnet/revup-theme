document.addEventListener('DOMContentLoaded', () => {
	const hamburgerMenu = document.querySelector('.hamburger-menu');
	const headerNav = document.querySelector('.header-nav');

	hamburgerMenu.addEventListener('click', () => {
		hamburgerMenu.classList.toggle('active');
		headerNav.classList.toggle('active');
	});
});
