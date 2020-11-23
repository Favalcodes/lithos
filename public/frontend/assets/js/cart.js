//jshint esversion:6

$('[data-title="Product"]').html("$0");
$('[data-title="Price"]').html("$0");

var products = [{
        title: 'Choose One',
        price: 0.00
    },
    {
        title: 'Blouse',
        price: 60,
        image: "http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3024702"
    },
    {
        title: 'Evening Dress',
        price: 110,
        image: "https://s-media-cache-ak0.pinimg.com/236x/21/8c/da/218cdadce9a19122a6fd325fee443efc.jpg"
    },
    {
        title: 'Pants',
        price: 95,
        image: "http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=126767993"
    },
    {
        title: 'Paris Sweatshirt',
        price: 70,
        image: "https://ae01.alicdn.com/kf/HTB1DplZNpXXXXamaXXXq6xXFXXXB/Modern-Spring-Autumn-and-Winter-Womens-Long-Sleeve-Printed-Pullover-casual-Sweatshirts-Blouse-Tops-Cotton-Eiffel.jpg_220x220.jpg"
    }
];

function populateProductsDdl(selector, items) {
    var $options = [];

    for (var i = 0; i < items.length; i++) {
        var item = items[i];
        $options.push($('<option />', {
            text: item.title,
            value: /*"$" + */ item.price
        }));
    }
    $(selector).html($options);
}

populateProductsDdl('[data-role="productsDdl"]', products);

//A bad way to load the item's image.
function populateImage(selector) {
    if ((selector).text() === products[1].title) {
        $('img').attr('src', "http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3024702");
    }
    if ((selector).text() === products[2].title) {
        $('img').attr('src', "https://s-media-cache-ak0.pinimg.com/236x/21/8c/da/218cdadce9a19122a6fd325fee443efc.jpg");
    }
    if ((selector).text() === products[3].title) {
        $('img').attr('src', "http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=126767993");
    }
    if ((selector).text() === products[4].title) {
        $('img').attr('src', "https://ae01.alicdn.com/kf/HTB1DplZNpXXXXamaXXXq6xXFXXXB/Modern-Spring-Autumn-and-Winter-Womens-Long-Sleeve-Printed-Pullover-casual-Sweatshirts-Blouse-Tops-Cotton-Eiffel.jpg_220x220.jpg");
    }
}

//When a product is selected, populate the price
function populatePrice(selector, priceSelector) {
    var x = $('<p />', {
        text: $(selector).val()
    });
    $(priceSelector).html(x);
}

var qtyOptions = [];

//Set the quantity values in the qty dropdown.
function qtyDdlOptions(someArray, number) {

    for (i = 0; i < number; i++) {
        someArray.push([i]);
    }
}

qtyDdlOptions(qtyOptions, 100);

function populateQtyDdl(selector, items) {
    var $options = [];

    for (var i = 1; i < items.length; i++) {
        var item = [i];
        $options.push($('<option />', {
            text: item
        }));
    }
    $(selector).html($options);
}

populateQtyDdl('[data-role="qtyDdl"]', qtyOptions);

//I need to calc the subtotal based on price and qty. It works when hard coded, but not when I try to grab the price value.
function calcSubtotal() {
    value1 = $('[data-role="qtyDdl"] :selected').text();
    value2 = $('[data-role="price"]').text().slice(0);
    var x = value1 * value2;
    $('[data-role="subtotal"]').html("$" + x);
}

function calcTotal() {
    var x = $('[data-role="total"]').text();
    var value1 = $('[data-role="qtyDdl"] :selected').text();
    var value2 = $('[data-role="price"]').text().slice(0);
    var x = value1 * value2;
    $('[data-role="total"]').html("Total: $" + x);
}

$('[data-role="productsDdl"]').on("change", function() {

    populatePrice('[data-role="productsDdl"]', '[data-role="price"]');


    populateImage($('[data-role="productsDdl"] :selected'));


    //$('img').attr('src', "http://www.polyvore.com/cgi/img-thing?.out=jpg&size=l&tid=3024702");
    calcSubtotal();
});

$('[data-role="qtyDdl"]').on("change", function() {
    calcSubtotal();
});

//Changes the quantity in the cart and displays to customer
$('[data-role="addBtn"]').on("click", function() {
    var u = $('[data-role="productsDdl"] :selected').text();
    var x = $('[data-role="qtyDdl"] :selected').text();
    $('[data-role="qtyValue"]').html(x);

    var y = $('[data-role="productsDdl"] :selected').text();
    var z = $('[data-role="qtyDdl"] :selected').text();

    $('<li />', {
        text: y + " was added to your cart. (Qty: " + z + ")"
    }).prependTo($('.cartList'));

    calcTotal();
});

//"Removes the product from the cart. 
$('[data-role="removeBtn"]').on("click", function() {
    $('[data-role="productsDdl"] :selected').text("Choose One");
    $('[data-role="qtyDdl"] :selected').text("1");
    $('[data-role="qtyValue"]').html(0);
    $('[data-role="subtotal"]').html("$0");
});

$('[data-role="cancel"]').on("click", function() {
    $('[data-role="qtyValue"]').html(0);
    $('.cartList').empty();
    $('[data-role="total"]').text("Total: $0");
});