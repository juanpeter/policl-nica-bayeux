(function ($, root, undefined) {
	$(function () {
		
		'use strict';

		//global timer for animations, change value here
		const timer = 500;
		
		// Scroll navigation
		const navLinks = document.getElementsByClassName('nav-link');
		for (let i = 0; i < navLinks.length; i++) {
			navLinks[i].addEventListener('click', () => {
				switch(i) {
					case 0:
						document.querySelector('#hero').scrollIntoView({behavior: 'smooth'});
						break;
					case 1:
						document.querySelector('#description-section').scrollIntoView({behavior: 'smooth'});
						break;
					case 2:
						document.querySelector('#pictures-section').scrollIntoView({behavior: 'smooth'});
						break;
					case 3:
						document.querySelector('#exams-specialities-section').scrollIntoView({behavior: 'smooth'});
						break;
					case 4:
						document.querySelector('#contact-section').scrollIntoView({behavior: 'smooth'});
						break;
					case 5:
						document.querySelector('#hero').scrollIntoView({behavior: 'smooth'});
						closeMenu();
						break;
					case 6:
						document.querySelector('#description-section').scrollIntoView({behavior: 'smooth'});
						closeMenu();
						break;
					case 7:
						document.querySelector('#pictures-section').scrollIntoView({behavior: 'smooth'});
						closeMenu();
						break;
					case 8:
						document.querySelector('#exams-specialities-section').scrollIntoView({behavior: 'smooth'});
						closeMenu();
						break;
					case 9:
						document.querySelector('#contact-section').scrollIntoView({behavior: 'smooth'});
						closeMenu();
						break;
				};
			});
		};
		
		const closeMenu = () => {
			$('aside#menu-button svg').css({
				'transform': 'rotate(0deg)',
				'transition': (timer / 1000) + 's',
			});
			$('#close-menu').css({
				'transform': 'rotate(90deg)',
				'transition': (timer / 1000) + 's',
			});
			if ($('body').width() < 590) {
				$('.side-menu').animate({
					right: "-300px",
				}, timer);
			}
			else {
				$('.side-menu').animate({
					right: "-50vw",
				}, timer);
			}
			$('.fade-in').animate({
				opacity: 0,
			}, timer);
			$('.fade-in').css('display','none');
		}

		document.getElementById('menu-button').addEventListener('click', () => {
			$('aside#menu-button svg').css({
				'transform': 'rotate(90deg)',
				'transition': (timer / 1000) + 's',
			});
			$('#close-menu').css({
				'transform': 'rotate(0deg)'
			});
			$('.fade-in').css('display','block');
			$('.side-menu').animate({
				right: 0,
			}, timer);
			$('.fade-in').animate({
				opacity: 1,
			}, timer);
		});
		// If window size is reajusted, hide the side-menu
		window.addEventListener('resize', () => {
			closeMenu();
			resultMenu();
		});

		document.getElementById('close-menu').addEventListener('click', () => {
			closeMenu();
		});
		let i = 0;
		document.getElementById('results-button').addEventListener('click', () => {
			i++;
			if (i % 2 !== 0) {
				$('.results-menu').animate({
					bottom: 0
				}, 500);
				$('aside#contact, aside#results-button').animate({
					bottom: '+=320'
				}, 500);
			} 
			else {
				$('.results-menu').animate({
					bottom: '-500'
				}, 500);
				$('aside#contact, aside#results-button').animate({
					bottom: '-=320'
				}, 500);
			}
		});
    });

})(jQuery, this);