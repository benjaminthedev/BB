
const listy = document.querySelectorAll('ul.products .add-to-cart-container a');

listy.forEach(function (a, index) {
    console.log(a.innerText);
    a.textContent = "Book Now!";
});