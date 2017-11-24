
$(document).ready(function () {
	
	$('.modal-button').on('click', function () {
		$('.modalInicio').addClass('modal-open');
		$('.modal-button').addClass('modal-button-close');
		
    });
    
    $('.span-button').on('click', function () {
		$('.modalInicio').removeClass('modal-open');
		$('.modal-button').removeClass('modal-button-close');
	
	});

});