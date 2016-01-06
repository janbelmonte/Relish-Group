function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('.wnk-nav').addClass('main-nav-scrolled');
        $('.ghost-120').addClass('unghost');
    } else {
        $('.wnk-nav').removeClass('main-nav-scrolled');
        $('.ghost-120').removeClass('unghost');
    }
}

$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});


function kill_logo() {
    var window_top = $(window).scrollTop();
    var div_top = $('.kill-logo').offset().top;
    if (window_top > div_top) {
        $('#relish-logo').addClass('logo-invisible');
    } else {
        $('#relish-logo').removeClass('logo-invisible');
    }
}

$(function () {
    $(window).scroll(kill_logo);
    kill_logo();
});
