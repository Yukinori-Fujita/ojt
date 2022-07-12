$(function () {
    $("#hamburger-btn").on("click", function () {
        $(this).toggleClass("on");
        $("ul").toggleClass("hide");
    })

    $("#main-visual").slick({
        "autoplay": true,
        "autoplaySpeed": 3000,
        "fade": true,
        "variableWidth": true,
        // "adaptiveHeight	": true,
        "arrows": false,
    });
})