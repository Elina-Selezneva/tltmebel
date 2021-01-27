$(function () {
    "use strict";

    $(".popup img").click(function (e) {
        e.preventDefault();
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });

    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });

});