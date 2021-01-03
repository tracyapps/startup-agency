/**
 * adding "smaller" class for the top fixed nav
 */


jQuery(document).ready( function($) {

	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$('header.site-header').addClass('smaller');
		} else {
			$('header.site-header').removeClass('smaller');
		}
	});

});
/**
 * scripts for the simple mobile menu
 */

jQuery(document).ready( function($) {
	$('#toggle').click( function() {
		$("#menu-main-navigation").toggleClass("open");
	});
});
jQuery(document).ready( function($) {

	//pullquote
	$('span.pullquote.right').each(function(index) {
		var $parentParagraph = $(this).parent('p');
		$parentParagraph.css('position', 'relative');
		$(this).clone()
			.addClass('pulled-right')
			.prependTo($parentParagraph);
	});
	$('span.pullquote.left').each(function(index) {
		var $parentParagraph = $(this).parent('p');
		$parentParagraph.css('position', 'relative');
		$(this).clone()
			.addClass('pulled-left')
			.prependTo($parentParagraph);
	});
	
});
/**
 * jquery to smooth scroll down the homepage from hero video section.
 */

jQuery(document).ready( function($) {

	$( "#learnmorebutton" ).click( function() {
		$( 'html, body' ).animate({
			scrollTop: $( "#more" ).offset().top
		}, 1000 );
	});

});