$(document).ready(function(){
    $('.closeIcon').click(function(){
        if (!$('.hero-aviso').hasClass('close')) {
            $('.hero-aviso').addClass('close');
        }
        else{
            $('.hero-aviso').removeClass('close');
        }

    });
})