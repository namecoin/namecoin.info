$(function () {
    $(document).scroll(function () {
        if ($(document).scrollTop() > $('#fancy-graphic').outerHeight()) {
            $('nav').fadeOut();
        } else {
            $('nav').fadeIn();
        }
    });
});
