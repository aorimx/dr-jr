$(document).ready(function () {
    
   
       $('.goLeft').on('click', function () {
            if ($('.page1').hasClass('number-1')) {
                $('.page1').addClass('number-2');
                $('.page1').removeClass('number-1');
                $('.page2').addClass('number-1');
                $('.page2').removeClass('number-2');
            }
            else{
                $('.page1').addClass('number-1');
                $('.page1').removeClass('number-2');
                $('.page2').addClass('number-2');
                $('.page2').removeClass('number-1');
            }
            
       });

       $('.goRight').on('click', function () {
            if ($('.page1').hasClass('number-1')) {
                $('.page1').addClass('number-2');
                $('.page1').removeClass('number-1');
                $('.page2').addClass('number-1');
                $('.page2').removeClass('number-2');
            }
            else{
                $('.page1').addClass('number-1');
                $('.page1').removeClass('number-2');
                $('.page2').addClass('number-2');
                $('.page2').removeClass('number-1');
            }
            
        });
    
       
   });