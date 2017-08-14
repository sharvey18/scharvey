jQuery(document).ready(function ($) {
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop < 200) {
            maxHeight = 150;
        } else if (scrollTop > 100) {
            maxHeight = 55;
        } else {
            maxHeight = 150 - 75 * ((scrollTop - 200)) / 200;
        }
        $('.navbar navbar-inverse navbar-fixed-top bs-docs-nav').css({
            'max-height': maxHeight + "px"
        });
    });
});
