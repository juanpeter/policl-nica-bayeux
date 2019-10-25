(function ($, root, undefined) {
	$(function () {
		
		'use strict';

		//init nicescroll
		$(function() {  
			$("body").niceScroll({
				cursorcolor: "#F58400",
				cursoropacitymax: 0.75,
				cursorwidth: "8px",
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

			// TODO maybe just make then animate, instead of using aos
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
		
	});

})(jQuery, this);
