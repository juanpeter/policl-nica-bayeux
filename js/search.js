(function ($, root, undefined) {
	$(function () {
		
		'use strict';
        document.getElementById('searchInput').addEventListener('keyup', () => {
        let input, filter, li, e, i;
            input = document.getElementById('searchInput');
            filter = input.value.toUpperCase();
            li = $('.wrapper li');

        for(i = 0; i < li.length; i++) {
            e = li[i];
            // look for element inside the list
            if (e.innerHTML.toUpperCase().indexOf(filter) > -1) {
                // filter elements again by the next letter
                if (e.innerHTML.toUpperCase().indexOf(filter)[filter.length] === filter[filter.length]){
                    li[i].style.display = '';
                }
            }
            else {
                li[i].style.display='none';
            }
        }
    });

});

})(jQuery, this);