//document.querySelector('.entry-content h2').textContent = 'Hello World';

document.querySelector('.page-id-434 .entry-content h2').style.display = "none";

document.querySelector('.page-id-434 .entry-content p').textContent = "Submit the form below to become a coach.";

document.querySelector('.single-product .wc-bookings-booking-form-button').textContent = "Book Now!";

const list = document.querySelectorAll('ul.products .add-to-cart-container a');

list.forEach(function (a, index) {
    console.log(a.innerText);
    a.textContent = "Book Now!";
});
