$( document ).ready(function() {
    $('#edit-field-interessi-und--2 .form-item').each(function(index, el) {
    	$(this).click(function(event) {
    		/* Act on the event */
    		$(this).toggleClass('selected');
    	});
    });
    $('.views-row').each(function(index, el) {
        console.log('started');
        var widthb = $(this).width();
        console.log(widthb);
        $(this).height(widthb);
    });
    $('#edit-field-abbonamento-und--2 .form-item').each(function(index, el) {
    	$(this).click(function(event) {
    		/* Act on the event */
    		$('#edit-field-abbonamento-und--2 .form-item').removeClass('selected');
    		$(this).addClass('selected');
    	});
    });
    $('#edit-field-tipo-und--2 .form-item').each(function(index, el) {
    	$(this).click(function(event) {
    		/* Act on the event */
    		$('#edit-field-tipo-und--2 .form-item').removeClass('selected');
    		$(this).addClass('selected');
    	});
    });
    if($('.user-info-from-cookie').length > 0){
    	$('body').addClass('register');
    }
    $('body').on( "click", ".multipage-link-next", function() {
	  /* Act on the event */
    	if($('.group-step2:visible').length > 0 && $('.group-step3:visible').length == 0 && $('.group-step4:visible').length == 0){
	    	$('body').addClass('interessi');
	    }else if($('.group-step2:visible').length == 0 && $('.group-step3:visible').length > 0 && $('.group-step4:visible').length == 0){
	    	$('body').addClass('abbonamento');
	    }else if($('.group-step2:visible').length == 0 && $('.group-step3:visible').length == 0 && $('.group-step4:visible').length > 0){
	    	$('body').addClass('tipo');
	    }
	});
    if($(window).height() > ($('html').outerHeight() + 80)){
        console.log($('html').outerHeight());
        $('#footer-wrapper').addClass('fixed');
    }
});