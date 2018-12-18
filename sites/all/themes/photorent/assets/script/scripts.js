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
    if($('.views-exposed-form').length > 0){
        $('.views-exposed-form').addClass('container');
        $('.views-exposed-widgets').addClass('row');
        $('.views-widget-filter-field_categorie_tid').addClass('col-lg-4 col-md-6');
        $('.views-widget-filter-field_artista_tid').addClass('col-lg-4 col-md-6');
        $('.views-submit-button').addClass('col-lg-4 col-md-6');
    }
    if($('.form-opere').length > 0){
        $('body').removeClass('starting-sections');
        $('#header').addClass('nomenu');
        $('#footer-wrapper').addClass('nomenu');
    }
    if($('.home-mostre').length > 0){
        $('.tablinks').click(function(event) {
            event.preventDefault();
            $('.tablinks').each(function(index, el) {
                $(this).toggleClass('active');
            });
            $('.tabcontent').each(function(index, el) {
                $(this).toggleClass('not-vis');
            });
        });
    }
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
    if($(window).height() > ($('html').outerHeight())){
        console.log($('html').outerHeight());
        $('#footer-wrapper').addClass('fixed');
    }
});