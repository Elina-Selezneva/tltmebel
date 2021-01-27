(function (window, $, undefined) {

    //    //бургер
    //
    $('.menu-burger__header').click(function () {
        $('.menu-burger__header').toggleClass('open-menu');
        $('.header__nav').toggleClass('open-menu');
        $('.fon-blac').toggleClass('open-menu');
    });
    
    
    $( ".header__menu li" ).on( "click", function() {
        var isActive = false;
        if ($(this).hasClass("active")){
            isActive=true;
        }
        $(".header__menu li").removeClass("active");
          if (isActive==false){
              $(this).addClass ("active");
          }      
    });
//        $(function() {
//            $('#ei-slider').eislideshow({
//                animation: 'center',
//                autoplay: true,
//                slideshow_interval: 3000,
//                titlesFactor: 0
//            });
//        });
    /*
     * smartresize: debounced resize event for jQuery
     *
     * latest version and complete README available on Github:
     * https://github.com/louisremi/jquery.smartresize.js
     *
     * Copyright 2011 @louis_remi
     * Licensed under the MIT license.
     */
     var $win_n = $(window).width();
     if($win_n<=760){
        $('.parent_link span').click(function () {
            if($(this).parent().children('.child').css("display")=="none"){
                $('.child').hide('normal');
                $(this).parent().children('.child').show('normal');
                $('.parent_link').removeClass('active');
                $(this).parent().addClass('active');
            } else {
                $('.child').hide('normal');
                $('.parent_link').removeClass('active');
            }
        })
    } else {
        $('.parent_link').mouseenter(function () {
            $(this).children('.child').show('normal');
            $(this).addClass('active');
        });
        $('.parent_link').mouseleave(function () {
            $('.child').hide('normal');
            $('.parent_link').removeClass('active');
        });
    }
// открыть по кнопке
$('.js-button-campaign').click(function() { 
	
	$('.js-overlay-campaign').fadeIn();
	$('.js-overlay-campaign').addClass('disabled');
});

// закрыть на крестик
$('.js-close-campaign').click(function() { 
	$('.js-overlay-campaign').fadeOut();
	
});

// закрыть по клику вне окна
$(document).mouseup(function (e) { 
	var popup = $('.js-popup-campaign');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.js-overlay-campaign').fadeOut();
		
	}
});
})(window, jQuery);
