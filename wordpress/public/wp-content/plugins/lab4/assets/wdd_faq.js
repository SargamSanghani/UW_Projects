jQuery(document).ready(function ($) {
    $(".faq-a").hide();

    $(".faq-q").click(function () {
        $(this).next().slideToggle();
    });

})