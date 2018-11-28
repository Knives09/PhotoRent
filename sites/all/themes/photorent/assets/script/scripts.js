$( document ).ready(function() {
    $('#edit-field-interessi-und--2 .form-item').each(function(index, el) {
    	$(this).click(function(event) {
    		/* Act on the event */
    		$(this).toggleClass('selected');
    	});
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
});