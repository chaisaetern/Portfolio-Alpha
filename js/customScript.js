
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
$("#contact").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".contact-container").offset().top
    }, 1000);
});