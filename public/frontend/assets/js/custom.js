//Go Back
//jshint esversion:6
function OpenProduct() {
    var i = $('.product-image[item-data="' + i + '"] img');
    var lbi = $('.lightbox-blanket .product-image img');
    console.log($(i).attr("src"));
    $(lbi).attr("src", $(i).attr("src"));


    $(".lightbox-blanket").toggle();

}

function GoBack() {
    $(".lightbox-blanket").toggle();
}