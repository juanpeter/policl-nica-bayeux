(function ($, root, undefined) {
	$(function () {
		
		'use strict';

		//global timer for animations, change value here
		const timer = 500;

        // Get current position, add 'active' class when reached
		const highlightScroll = () => {
			// Reset classes
			$('.nav-item').removeClass('menu-active');
			$('.side-nav li').removeClass('menu-active');

			// TODO This code could work better

			if ($(window).height() > 920) {
				if (window.scrollY <= 400) {
					$('.nav-item:nth-of-type(1)').addClass('menu-active');
					$('.side-nav li:nth-of-type(1)').addClass('menu-active');
				}
				else if (window.scrollY <= 1300) {
					$('.nav-item:nth-of-type(2)').addClass('menu-active');
					$('.side-nav li:nth-of-type(2)').addClass('menu-active');
				}
				else if (window.scrollY <= 1800) {
					$('.nav-item:nth-of-type(3)').addClass('menu-active');
					$('.side-nav li:nth-of-type(3)').addClass('menu-active');
				}
				else if (window.scrollY <= 2400) {
					$('.nav-item:nth-of-type(4)').addClass('menu-active');
					$('.side-nav li:nth-of-type(4)').addClass('menu-active');
				}
				else {
					$('.nav-item:nth-of-type(5)').addClass('menu-active');
					$('.side-nav li:nth-of-type(5)').addClass('menu-active');
				}
			}
			else if ($(window).height() <= 920) {
				if (window.scrollY <= 400) {
					$('.nav-item:nth-of-type(1)').addClass('menu-active');
					$('.side-nav li:nth-of-type(1)').addClass('menu-active');
				}
				else if (window.scrollY <= 1100) {
					$('.nav-item:nth-of-type(2)').addClass('menu-active');
					$('.side-nav li:nth-of-type(2)').addClass('menu-active');
				}
				else if (window.scrollY <= 1700) {
					$('.nav-item:nth-of-type(3)').addClass('menu-active');
					$('.side-nav li:nth-of-type(3)').addClass('menu-active');
				}
				else if (window.scrollY <= 2100) {
					$('.nav-item:nth-of-type(4)').addClass('menu-active');
					$('.side-nav li:nth-of-type(4)').addClass('menu-active');
				}
				else {
					$('.nav-item:nth-of-type(5)').addClass('menu-active');
					$('.side-nav li:nth-of-type(5)').addClass('menu-active');
				}
			}
			else if ($(window).height() <= 800) {
				if (window.scrollY <= 400) {
					$('.nav-item:nth-of-type(1)').addClass('menu-active');
					$('.side-nav li:nth-of-type(1)').addClass('menu-active');
				}
				else if (window.scrollY <= 1300) {
					$('.nav-item:nth-of-type(2)').addClass('menu-active');
					$('.side-nav li:nth-of-type(2)').addClass('menu-active');
				}
				else if (window.scrollY <= 1770) {
					$('.nav-item:nth-of-type(3)').addClass('menu-active');
					$('.side-nav li:nth-of-type(3)').addClass('menu-active');
				}
				else if (window.scrollY <= 2400) {
					$('.nav-item:nth-of-type(4)').addClass('menu-active');
					$('.side-nav li:nth-of-type(4)').addClass('menu-active');
				}
				else {
					$('.nav-item:nth-of-type(5)').addClass('menu-active');
					$('.side-nav li:nth-of-type(5)').addClass('menu-active');
				}
			}
		}
		// add menu active on first load
		highlightScroll();
		// add menu active when scrolling
		$(window).scroll( () => {
			highlightScroll();
		});

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
						document.querySelector('#results-section').scrollIntoView({behavior: 'smooth'});
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
						document.querySelector('#results-section').scrollIntoView({behavior: 'smooth'});
						closeMenu();
						break;
				};
			});
		};

		// repeated, better refactor
		const closeMenu = () => {
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
		}
		// Main button scroll
		document.getElementById('button-white').addEventListener('click', () => {
			document.querySelector('#description-section').scrollIntoView({behavior: 'smooth'});
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
					'fill': '#015C8F'
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
					'fill': '#015C8F'
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