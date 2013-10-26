(function ($) {
  $(document).ready(function() {

    $("ul.menu li").hover(function(){
    
        $(this).addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    
    }, function(){
    
        $(this).removeClass("hover");
        $('ul:first',this).css('visibility', 'hidden');
    
    });

	 $("#get-demo").click(function(){
		 $(this).switchClass( "footer-buttons-normal-view", "footer-buttons-detailed-view", 1000, "easeInOutQuad" );
    }, function(){
				$(this).reomveClass('footer-buttons-detailed-view');

		$(this).addClass('footer-buttons-normal-view');
    });


	$('.field-type-text-long table').addClass('table table-bordered');
    $('.field-type-text-with-summary table').addClass('table table-bordered');
  });
})(jQuery);

