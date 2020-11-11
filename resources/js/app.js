window.Popper = require('popper.js').default;
window.$ = window.jQuery = require('jquery');


require('bootstrap');




(function($) {

    "use strict";

    var fullHeight = function() {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function(){
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

})(jQuery);

// Accordion

if ($(".accordion__item__header").length > 0) {
    var active = "active";
    $(".accordion__item__header").click(function () {
        $(this).toggleClass(active);
        $(this).next("div").slideToggle(200);
    });
}



