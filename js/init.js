/*	Initialize magnific gallery
	https://github.com/dimsemenov/Magnific-Popup
-------------------------------------------------------------- */

jQuery(document).ready(function($){

	$('.gallery').each(function() { // the containers for all your galleries
		
		$(this).magnificPopup({
			
			delegate: '.gallery-item a', // the selector for gallery item
			
			type: 'image',
			
			gallery: {
				enabled: true,
				preload: [ 0, 2 ]
			},
			
			image: {
	            titleSrc: function( item ) {
	              return item.el.find('img').attr('alt');
	            }
            }

		});
		
	}); 
	
});