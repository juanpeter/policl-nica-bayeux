(function ($, root, undefined) {
	// TO-DO http://iamdustan.com/smoothscroll/ Use this for smooth scrolling
	$(function () {
		
		'use strict';
		// Scroll navigation
		const navLinks = document.getElementsByClassName('nav-link');
		for (let i = 0; i < navLinks.length; i++) {
			navLinks[i].addEventListener('click', () => {
				switch(i) {
					case 0:
						document.querySelector('#hero').scrollIntoView({behavior: 'smooth'});
						break;
					case 1:
						document.querySelector('#description').scrollIntoView({behavior: 'smooth'});
						break;
					case 2:
						document.querySelector('#pictures').scrollIntoView({behavior: 'smooth'});
						break;
					case 3:
						document.querySelector('#exams-specialities').scrollIntoView({behavior: 'smooth'});
						break;
					case 4:
						document.querySelector('#results').scrollIntoView({behavior: 'smooth'});
						break;
					case 5:
						document.querySelector('#hero').scrollIntoView({behavior: 'smooth'});
						break;
					case 6:
						document.querySelector('#description').scrollIntoView({behavior: 'smooth'});
						break;
					case 7:
						document.querySelector('#pictures').scrollIntoView({behavior: 'smooth'});
						break;
					case 8:
						document.querySelector('#exams-specialities').scrollIntoView({behavior: 'smooth'});
						break;
					case 9:
						document.querySelector('#results').scrollIntoView({behavior: 'smooth'});
						break;
				};
			});
		};
		// Main button scroll
		document.getElementById('button-white').addEventListener('click', () => {
			document.querySelector('#description').scrollIntoView({behavior: 'smooth'});
		});

		const timer = 500;
		let i = 0;

		// Contact pop-up
		document.getElementById('contact-header').addEventListener('click', () => {
			i++
			i % 2 == 0
			? $('#contact').animate({ bottom: '0', }, timer)
			: $('#contact').animate({ bottom: '145px',}, timer)
			// ? () => {
			// 	$('#contact').animate({ bottom: '0', }, timer);
			// }
			// : () => {
			// 	$('#contact').animate({ bottom: '145px',}, timer);
			// 	$('.contact-header svg').css({
			// 		'transform': 'rotate(180deg)',
			// 		'transition': (timer / 1000) + 's',
			// 	}, timer);
			// }
		});

		document.getElementById('menu-button').addEventListener('click', () => {
			$('li#menu-button svg').css({
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
			// If the body size is more than 590px, hide menu to '50vw'
			if ($('body').width() > 590) {
				$('li#menu-button svg').css({
					'transform': 'rotate(0deg)',
					'transition': (timer / 1000) + 's',
				});
				$('.side-menu').css('right', "-50vw");
				$('.fade-in').css('opacity:', 0);
				$('.fade-in').css('display','none');
			}
			// If the body size is less than 590px, hide menu to '50vw'
			else {
				$('li#menu-button svg').css({
					'transform': 'rotate(0deg)',
					'transition': (timer / 1000) + 's',
				});
				$('.side-menu').css('right', "-300px");
				$('.fade-in').css('opacity:', 0);
				$('.fade-in').css('display','none');
			}
		});
		document.getElementById('close-menu').addEventListener('click', () => {
			$('li#menu-button svg').css({
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
		});

	});

})(jQuery, this);
