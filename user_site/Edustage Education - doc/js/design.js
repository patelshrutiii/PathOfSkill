$(".hover").mouseleave(
    function() {
        $(this).removeClass("hover");
    }
);
// slider js
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 4,
        navText: [
            '&lsaquo;',
            '&rsaquo;'
        ]
    });
});