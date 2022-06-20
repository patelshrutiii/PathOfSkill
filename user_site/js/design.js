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

// video display js

var ProductImg = document.getElementById("ProductImg");
var SmallImg = document.getElementsByClassName("small-img");

$(document).ready(function() {
    $(SmallImg[0]).click(function() {
        ProductImg.src = SmallImg[0].src
    });
    $(SmallImg[1]).click(function() {
        ProductImg.src = SmallImg[1].src
    });
    $(SmallImg[2]).click(function() {
        ProductImg.src = SmallImg[2].src
    });
    $(SmallImg[3]).click(function() {
        ProductImg.src = SmallImg[3].src
    });
    $(SmallImg[4]).click(function() {
        ProductImg.src = SmallImg[4].src
    });
    $(SmallImg[5]).click(function() {
        ProductImg.src = SmallImg[5].src
    });
    $(SmallImg[6]).click(function() {
        ProductImg.src = SmallImg[6].src
    });
    $(SmallImg[7]).click(function() {
        ProductImg.src = SmallImg[7].src
    });
    $(SmallImg[8]).click(function() {
        ProductImg.src = SmallImg[8].src
    });
    $(SmallImg[9]).click(function() {
        ProductImg.src = SmallImg[9].src
    });

});