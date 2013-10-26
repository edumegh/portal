(function ($) {
  $(document).ready(function() {
	
	$('a.link-phone').tooltip({placement:'top'});

	$( "#get-demo" )
	.mouseenter(function() {

		$(this).removeClass('footer-buttons-normal-view');
		$(this).addClass('footer-buttons-detailed-view');
	})
	.mouseleave(function() {
		$(this).removeClass('footer-buttons-detailed-view');
		$(this).addClass('footer-buttons-normal-view');
	});

	$( "#join-to-learn" )
	.mouseenter(function() {

		$(this).removeClass('footer-buttons-normal-view');
		$(this).addClass('footer-buttons-detailed-view');
	})
	.mouseleave(function() {
		$(this).removeClass('footer-buttons-detailed-view');
		$(this).addClass('footer-buttons-normal-view');
	});

	$( "#join-to-teach" )
	.mouseenter(function() {

		$(this).removeClass('footer-buttons-normal-view');
		$(this).addClass('footer-buttons-detailed-view');
	})
	.mouseleave(function() {
		$(this).removeClass('footer-buttons-detailed-view');
		$(this).addClass('footer-buttons-normal-view');
	});

  });
})(jQuery);

