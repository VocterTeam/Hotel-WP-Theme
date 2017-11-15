/*FUNCTIONS*/
// smoothScroll

// $(".header-nav li a").on("click", function(event) {
//   var href = $(this).attr("href");

//   if (href.length) {
//     if (href.charAt(0) === "#") {
//       event.preventDefault();
//       var elementScrollTo = $(href);

//       if (elementScrollTo.length) {
//         $("html, body").animate(
//           {
//             scrollTop: elementScrollTo.offset().top
//           },
//           1000
//         );
//       }
//     }
//   }
// });
// END: smoothScroll

// clickOutside
function clickOutside(args) {
    // argsCheck
    function argsCheck() {
        if (args.elementRemoveClass) {
            args.elementRemoveClass.removeClass('active');
        } else if (args.fadeOut) {
            args.elementToHide.fadeOut();
        }
        $('body').removeClass('popup-opened');

        $('.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors').hide();
        $('.wpcf7-response-output.wpcf7-display-none.wpcf7-mail-sent-ok').hide();
        $('#popupSuccess').hide();
        $('#popupReview').hide();
    }
    // END:argsCheck

    $('body').on('mouseup touchstart', function(event) {
        if (!args.elementToPreserve.is(event.target) && args.elementToHide.has(event.target).length === 0) {
            argsCheck();
        }
    });
    $(document).on('keyup', function(event) {
        if (event.keyCode == 27) {
            argsCheck();
        }
    });
}
// END:clickOutside

function popupShow() {
	$('[data-popup], #call').on('click', function(event) {
		event.preventDefault();
        $('#popupReview').show();
		
		if(dataPopup = $(this).data('popup')) {

			var popupElement = $('#' + dataPopup);
			var popupTitle = $(this).find('.default-btn__title').text();
			var popupSubtitle = $(this).find('.default-btn__subtitle').text();

			if(popupElement.length) {
                popupElement.find('.hidden-input').val(popupTitle);
				popupElement.find('.popup-title').html(popupTitle + '<span class="popup-title popup-title--thin">' + popupSubtitle + '</span>');
                popupElement.find('.default-btn').val(popupTitle);
                popupElement.addClass('active').siblings().removeClass('active');
                $('body').addClass('popup-opened');
			}
		} else {
            var popupElement = $('#popupReview');
            var popupTitle = 'ЗАКАЗАТЬ ЗВОНОК';

            if(popupElement.length) {
                popupElement.find('.hidden-input').val(popupTitle);
                popupElement.find('.popup-title').html(popupTitle + '<span class="popup-title popup-title--thin"></span>');
                popupElement.find('.default-btn').val(popupTitle);
                popupElement.addClass('active').siblings().removeClass('active');
                $('body').addClass('popup-opened');
            }
        }
	});
}
/*END:FUNCTIONS*/

$(document).ready(function() {
	$('.site-header').on('click', '.toggle-btn', function(event) {
        event.preventDefault();
        $(this).parents().find('.mobile-menu').toggleClass('active');
    });

    var clickOutsideArgs = {
        elementRemoveClass: $('.mobile-menu, .popup'),
        elementToHide: $('.mobile-menu, .popup'),
        elementToPreserve: $('.mobile-menu'),
    }

    clickOutside(clickOutsideArgs);

    $('.popup').on('click', '#btn_review', function(event) {
    	event.preventDefault();
    	$(this).parents().removeClass('active');
    	$('body').removeClass('popup-opened');
        $('.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors').hide();
        $('#popupReview').hide();
    });

    $('#popupSuccess').on('click', '#btn_success', function(event) {
        event.preventDefault();
        $('.wpcf7-response-output.wpcf7-display-none.wpcf7-mail-sent-ok').hide();
        $('.close-btn').parents().removeClass('active');
        $('body').removeClass('popup-opened');

        $('#popupSuccess').hide();
        $('#popupReview').hide();
    });

    popupShow();

    $('#fullpage').fullpage({
        verticalCentered: false,
        anchors: ['location', 'infrastructure', 'about', 'area', 'furnish', 'price', 'footer'],
        menu: '#menu-verhnee-menyu',
        // scrollingSpeed: 1000
    });

});