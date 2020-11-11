window.Popper = require('popper.js').default;
//window.$ = window.jQuery = require('jquery');
global.$ = global.jQuery = require('jquery');

import 'shards-ui/dist/js/shards.min';
require('./bootstrap');



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


