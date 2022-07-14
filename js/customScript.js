
const $id = ['#home', '#about', '#skills', '#projects', '#contact'];
const $class = ['.fp-wrapper-top', '.fp-about', '.skill-container', '.project-container', '.contact-container'];


$("#home").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".fp-wrapper-top").offset().top
    }, 1000);
});
$("#about").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".fp-about").offset().top
    }, 1000);
});
$("#projects").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".project-container").offset().top
    }, 1000);
});
$("#skills").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".skill-container").offset().top
    }, 1000);
});
$("#contact").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".contact-container").offset().top
    }, 1000);
});

// $('html, body').animate({scrollTop: $('.contact-container').offset().top -100 }, 'slow');