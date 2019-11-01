(function ($, root, undefined) {
	$(function () {
		
		'use strict';

		//init nicescroll
		$(function() {  
			$("body").niceScroll({
				cursorcolor: "#F58400",
				cursoropacitymax: 0.75,
				cursorwidth: "12px",
				autohidemode: true,
				smoothscroll: true,
				horizrailenabled: false,
				zindex: 99
			});
		});
		//global timer for animations, change value here
		const timer = 500;

		//Loading animation

		// Wait for window load
		$(window).load(function() {
			//Animation when done loading
			$(".loader").animate({
				'height': '450px',
				'width': '450px',
				'border-width': '36px',
				'opacity': 0
			}, timer);
			$(".se-pre-con img").animate({
				'height': '420',
				'width': '420',
				'opacity': 0
			}, timer, () => {
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");
			});

			// This works, use this
			setTimeout(
				() => {
				$('.hero-text').animate({
					'opacity': 1,
					'margin-bottom': 0
					}, timer)
				}
				, 2 * timer);
		});

		// Init AOS scroll
		AOS.init({
			duration: 1200,
		});
		
		let i = 0;

		// Contact pop-up
		document.getElementById('contact-header').addEventListener('click', () => {
			i++;
			i % 2 == 0
			? (
				$('#contact').animate({ bottom: '0'}, timer),
				$('.contact-header svg').css({
					'transform': 'rotate(0deg)',
					'transition': (timer / 1000) + 's',
				}, timer)
			)
			: (
				$('#contact').animate({ bottom: '145px'}, timer),
				$('.contact-header svg').css({
					'transform': 'rotate(180deg)',
					'transition': (timer / 1000) + 's',
				}, timer)
			)
		});
		
		// footer to top link
		document.getElementById('footer-arrow').addEventListener('click', () => {
			$('html, body').animate({scrollTop:0}, timer);
        });
	});

})(jQuery, this);
