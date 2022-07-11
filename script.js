$(function () {
    $("#hamburger-btn").on("click", function () {
        $(this).toggleClass("on");
        $("ul").toggleClass("hide");
    })
})