//Single Product
document.querySelector('.single-product .wc-bookings-booking-form-button').textContent = "Book Now!";

const list = document.querySelectorAll('ul.products .add-to-cart-container a');

list.forEach(function (a, index) {
    console.log(a.innerText);
    a.textContent = "Book Now!";
});

//alert('product page');