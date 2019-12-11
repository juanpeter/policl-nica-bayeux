(function ($, root, undefined) {
	$(function () {
		
		'use strict';

		let i = 0;

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
				'height': '244',
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

				// Init AOS scroll
				AOS.init({
					duration: 1200,
				});
		});
		
		// footer to top link
		document.getElementById('footer-arrow').addEventListener('click', () => {
			$('html, body').animate({scrollTop:0}, timer);
		});
		// Results, add on every menu
		document.getElementById('results-header').addEventListener('click', () => {
			i++;
			if (i%2 !== 0) {
				$('#results').animate({
					bottom: 0
				}, 250, 'linear');
			} else {
				$('#results').animate({
					bottom: '-310px'
				}, 250, 'linear');
				$('#results-header svg').animate ({
					transform: 'rotate(0deg)'
				}, 250, 'linear');
			}
		});
	});

})(jQuery, this);
