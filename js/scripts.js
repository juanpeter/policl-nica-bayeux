(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		const timer = 500;

		// TO-DO: Needs to reset the css to it's original state
		document.getElementById('menu-button').addEventListener('click', function() {
			$('li#menu-button svg').css({
				'fill': '#F58400',
				'transform': 'rotate(90deg)',
				'transition': (timer / 1000) + 's',
			});
			$('.fade-in').css('display','block');
			$('.side-menu').animate({
				right: 0,
			}, timer);
			$('.fade-in').animate({
				opacity: 1,
			}, timer);
		});
		
		document.getElementById('close-menu').addEventListener('click', function() {
			$('li#menu-button svg').css({
				'fill': '#015C8F',
				'transform': 'rotate(0deg)',
				'transition': (timer / 1000) + 's',
			});
			$('#close-menu').css({
				'transform': 'rotate(270deg)',
				'transition': (timer / 1000) + 's',
			});
			$('.side-menu').animate({
				right: "-50vw",
			}, timer);
			
			$('.fade-in').animate({
				opacity: 0,
			}, timer);
			$('.fade-in').css('display','none');
			$('#close-menu').css({
				'transform': 'rotate(0deg)'
			});
		});
	});
	
})(jQuery, this);
